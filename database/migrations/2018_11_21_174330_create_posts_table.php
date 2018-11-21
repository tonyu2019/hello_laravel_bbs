<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 120)->index()->comment('帖子标题');
            $table->text('body')->comment('帖子内容');
            $table->integer('user_id')->unsigned()->comment('用户ID');
            $table->integer('category_id')->unsigned()->comment('分类ID');
            $table->integer('reply_count')->unsigned()->default(0)->comment('回复总数');
            $table->integer('view_count')->unsigned()->default(0)->comment('查看总数');
            $table->integer('last_reply_user_id')->unsigned()->comment('最后回复用户ID');
            $table->integer('order')->unsigned()->default(100)->comment('排序');
            $table->text('description')->nullable()->comment('帖子简介');
            $table->string('slug')->nullable()->comment('自定义url');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
