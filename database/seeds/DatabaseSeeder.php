<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(article_seeder::class);
         $this->call(admin_menu_seeder::class);
         $this->call(navigation_seeder::class);
    }
}
