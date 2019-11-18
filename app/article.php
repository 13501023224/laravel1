<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    //
    protected $primaryKey ="id";
    protected $fillable = [
        'article_title','article_description', 'article_keyword'
        ,"article_click_time","article_thumbnail_url","article_content","article_auth","article_navigation_id"
    ];
    protected $table = "article";

    public  $timestamps = false;

}
