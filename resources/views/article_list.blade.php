<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章列表</title>
    <style type="text/css">
        table
        {
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
            width: 700px;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
            height: 30px;
        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 100px;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }
        .pagination {
            padding-left: 0;
            margin: 1.5rem 0;
            list-style: none;
            color: #999999;
            text-align: left;
        }
        .pagination:before,
        .pagination:after {
            content: " ";
            display: table;
        }
        .pagination:after {
            clear: both;
        }
        .pagination > li {
            display: inline-block;
        }
        .pagination > li > a,
        .pagination > li > span {
            position: relative;
            display: block;
            padding: 0.5em 1em;
            text-decoration: none;
            line-height: 1.2;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0;
            margin-bottom: 5px;
            margin-right: 5px;
        }
        .pagination > li:last-child > a,
        .pagination > li:last-child > span {
            margin-right: 0;
        }
        .pagination > li > a:hover,
        .pagination > li > span:hover,
        .pagination > li > a:focus,
        .pagination > li > span:focus {
            background-color: #eeeeee;
        }
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > a:hover,
        .pagination > .active > span:hover,
        .pagination > .active > a:focus,
        .pagination > .active > span:focus {
            z-index: 2;
            color: #fff;
            background-color: #0e90d2;
            border-color: #0e90d2;
            cursor: default;
        }
        .pagination > .disabled > span,
        .pagination > .disabled > span:hover,
        .pagination > .disabled > span:focus,
        .pagination > .disabled > a,
        .pagination > .disabled > a:hover,
        .pagination > .disabled > a:focus {
            color: #999999;
            background-color: #fff;
            border-color: #ddd;
            cursor: not-allowed;
            pointer-events: none;
        }
        .pagination .pagination-prev {
            float: left;
        }
        .pagination .pagination-prev a {
            border-radius: 0;
        }
        .pagination .pagination-next {
            float: right;
        }
        .pagination .pagination-next a {
            border-radius: 0;
        }
        .pagination-centered {
            text-align: center;
        }
        .pagination-right {
            text-align: right;
        }
    </style>
</head>
<body>
<table align="center">
    <tr>
        <td>id</td>
        <td>article_title</td>
        <td>article_content</td>
        <td>预览</td>
    </tr>
    @foreach($article as $article_key => $article_value)
    <tr>
        <td>{{$article_value->id}}</td>
        <td>{{$article_value->article_title}}</td>
        <td>{{substr($article_value->article_content,0,100)}}</td>
        <td>
            <a href="{{route("show_article_detail",["id"=>$article_value->id])}}">预览</a>
        </td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4">
            {{$article->links()}}
        </td>
    </tr>
</table>
</body>
</html>
