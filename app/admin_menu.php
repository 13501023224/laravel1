<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_menu extends Model
{
    //
    protected $primaryKey ="id";

    protected $fillable = [
        'parent_id','order','title','icon','permission'
    ];
    protected $table = "admin_menu";

    public  $timestamps = true;

}
