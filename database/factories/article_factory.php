<?php

use App\article;
use Faker\Generator as Faker;

$factory->define(article::class, function (Faker $faker) {
    return [
        "article_title"=>$faker->title,
        "article_content"=>$faker->text(300),
    ];
});
