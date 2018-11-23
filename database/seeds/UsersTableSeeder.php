<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tony=[
            'name'=>'托尼',
            'email'=>'646547989@qq.com',
            'avatar'=>'/avatar/aratar_'.rand(1, 1690).'.jpg',
            'intro'=>'一切都随风都随风都随风……',
            'password'=>bcrypt('admin888')
        ];
        $hou=[
            'name'=>'猴王',
            'email'=>'15001963096@qq.com',
            'avatar'=>'/avatar/aratar_'.rand(1, 1690).'.jpg',
            'intro'=>'山中无老虎，猴子称大王……',
            'password'=>bcrypt('admin888')
        ];
        \App\Models\User::create($tony);
        \App\Models\User::create($hou);
        factory(\App\Models\User::class)->times(10)->create();

    }
}
