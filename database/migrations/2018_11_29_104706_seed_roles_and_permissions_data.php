<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeedRolesAndPermissionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 清除缓存
        app()['cache']->forget('spatie.permission.cache');

        // 先创建权限
        Permission::create(['name' => 'post_del', 'title' => '删除帖子']);
        Permission::create(['name' => 'post_index', 'title' => '查看帖子']);
        Permission::create(['name' => 'reply_del', 'title' => '删除回复']);
        Permission::create(['name' => 'reply_index', 'title' => '查看回复']);
        Permission::create(['name' => 'user_add', 'title' => '添加用户']);
        Permission::create(['name' => 'user_del', 'title' => '删除用户']);
        Permission::create(['name' => 'user_index', 'title' => '查看用户']);
        Permission::create(['name' => 'user_edit', 'title' => '修改用户']);
        Permission::create(['name' => 'role_add', 'title' => '添加角色']);
        Permission::create(['name' => 'role_del', 'title' => '删除角色']);
        Permission::create(['name' => 'role_index', 'title' => '查看角色']);
        Permission::create(['name' => 'role_edit', 'title' => '修改角色']);
        Permission::create(['name' => 'permission_add', 'title' => '添加权限']);
        Permission::create(['name' => 'permission_del', 'title' => '删除权限']);
        Permission::create(['name' => 'permission_index', 'title' => '查看权限']);
        Permission::create(['name' => 'permission_edit', 'title' => '修改权限']);

        // 创建站长角色，并赋予权限
        $founder = Role::create(['name' => 'Founder']);
        $founder->givePermissionTo('post_del');
        $founder->givePermissionTo('post_index');
        $founder->givePermissionTo('reply_del');
        $founder->givePermissionTo('reply_index');
        $founder->givePermissionTo('user_add');
        $founder->givePermissionTo('user_del');
        $founder->givePermissionTo('user_index');
        $founder->givePermissionTo('user_edit');
        $founder->givePermissionTo('role_add');
        $founder->givePermissionTo('role_del');
        $founder->givePermissionTo('role_index');
        $founder->givePermissionTo('role_edit');
        $founder->givePermissionTo('permission_add');
        $founder->givePermissionTo('permission_del');
        $founder->givePermissionTo('permission_index');
        $founder->givePermissionTo('permission_edit');

        // 创建管理员角色，并赋予权限
        $maintainer = Role::create(['name' => 'Maintainer']);
        $maintainer->givePermissionTo('post_del');
        $maintainer->givePermissionTo('post_index');
        $maintainer->givePermissionTo('reply_del');
        $maintainer->givePermissionTo('reply_index');
        $maintainer->givePermissionTo('user_index');
        $maintainer->givePermissionTo('user_edit');

        // 创建普通成员角色，并赋予权限
        $member = Role::create(['name' => 'member']);
        $member->givePermissionTo('post_del');
        $member->givePermissionTo('post_index');
        $member->givePermissionTo('reply_del');
        $member->givePermissionTo('reply_index');
    }

    public function down()
    {
        // 清除缓存
        app()['cache']->forget('spatie.permission.cache');

        // 清空所有数据表数据
        $tableNames = config('permission.table_names');

        Model::unguard();
        DB::table($tableNames['role_has_permissions'])->delete();
        DB::table($tableNames['model_has_roles'])->delete();
        DB::table($tableNames['model_has_permissions'])->delete();
        DB::table($tableNames['roles'])->delete();
        DB::table($tableNames['permissions'])->delete();
        Model::reguard();
    }
}
