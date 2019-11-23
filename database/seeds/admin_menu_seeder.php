<?php

use Illuminate\Database\Seeder;

class admin_menu_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_menu_article = [
            'parent_id'=>0,
            'order'=>8,
            'title'=>'文章管理',
            'icon'=>'fas fa-edit',
            'uri'=>'/articles'
        ];
        $navigation=[
            'parent_id'=>0,
            'order'=>9,
            'title'=>'导航管理',
            'icon'=>'fas fa-edit',
            'uri'=>'/navigation'
        ];
        DB::table("admin_menu")->insert($admin_menu_article);
        DB::table("admin_menu")->insert($navigation);
    }
}
