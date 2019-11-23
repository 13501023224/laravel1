<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index_controller extends Controller
{
    public function index(){
        $result = \DB::table("article")->where("id","=","3")->get();
        return view("index",["article"=>$result]);
    }
}
