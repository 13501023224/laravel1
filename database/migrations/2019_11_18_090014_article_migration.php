<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
              $table->string("article_title");
              $table->string("article_description");
              $table->string("article_keyword");
              $table->integer("article_click_time");
              $table->string("article_thumbnail_url");
              $table->text("article_content");
              $table->string("article_auth");
              $table->integer("article_navigation_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
