<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $primaryKey ="id";
    protected $fillable = [
        'article_title', 'article_content'
    ];
    protected $table = "article";
}
