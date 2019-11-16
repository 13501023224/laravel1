<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class article_manager extends Controller
{
    //添加文章
    protected function add_article(Request $request){
        $result = $request->all();
        $slug = DB::table("article")->insert([
            "article_title"=>$result["article_title"],
            "article_content"=>$result["article_content"]
        ]);
        if($slug){
            echo "<script>alert('添加成功！') ;window.location.href='/show_article';</script>";
        }else{
            echo "<script>alert('添加失败！') ;window.location.href='/show_article';</script>";
        }
    }

    protected function show_article(){
        $result = DB::table("article")->orderByDesc("id")->paginate(20);
        return view("article_list",["article"=>$result]);
    }


    protected function show_article_detail(Request $request){
        $id = $request["id"];
        $article = DB::table("article")->where("id","=",$id)->get();
        return view("show_article_detail",["article"=>$article]);
    }

}
