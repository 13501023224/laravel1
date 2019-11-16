

@include('vendor.ueditor.assets')
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>富文本框测试</title>

</head>
<style type="text/css">
    table
    {
        border-collapse: collapse;
        text-align: center;
        table-layout: fixed;
        width: 1005px;
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
</style>
<body>

<form  method="post" id="article" action="{{route("add_article")}}">

    <table align="center" >
        <tr>
            <td colspan="2" align="center">
                添加文章
            </td>
        </tr>
        <tr>
            <td>标题</td>
            <td><input type="text" name="article_title" /></td>
        </tr>
        <tr>
            <td colspan="2">
            {{csrf_field()}}
            <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('container');
                    ue.ready(function() {
                        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
                    });
                </script>
                <!-- 编辑器容器 -->
                <script id="container" name="article_content" type="text/plain">
                </script>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="提交">
            </td>
        </tr>
    </table>
    <input type="submit" value="提交"/>
</form>
</body>
</html>


<script>
    import Textarea from "../../blog/resources/js/home/components/Textarea";
    export default {
        components: {Textarea}
    }
</script>
<script>
    import Form from "../../blog/resources/js/dashboard/components/Form";
    export default {
        components: {Form}
    }
</script>
