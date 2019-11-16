<?php

use App\article;
use Illuminate\Database\Seeder;

class article_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(article::class,200)->create();
    }
}
