<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class navigation extends Model
{

    protected $primaryKey ="id";
    protected $fillable = [
       'parent_id','navigation_name', 'navigation_url'
    ];
    protected $table = "navigation";

    public  $timestamps = false;
}
