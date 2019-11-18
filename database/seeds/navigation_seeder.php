<?php

use Illuminate\Database\Seeder;

class navigation_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navigation = [
            "parent_id"=>0,
            "navigation_name"=>"根目录",
            "navigation_url"=>"/home"
        ];
        DB::table("navigation")->insert($navigation);
    }
}
