<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent ORMを使ってデータを取得しよう</title>
<style>
    body{
        display:flex;
        align-items:center;
        min-height:100vh;
    }
    table{
        border-collapse: collapse;
        max-width:800px;
        margin:0 auto;
    }
    table,td,th{
        border:1px solid #EE9487;
    }
    td,th{
        padding:10px;
    }
    th{
        background: #E44461;
        color:white;
        text-align:center;
        font-size:18px;
    }
    th:first-child{
        width:30%;
    }
</style>
</head>

<body>
    <table>
         <tr>
             <th>ID</th>
             <td>{{ $post->id }}</td>
         </tr>
         <tr>
             <th>タイトル</th>
             <td>{{ $post->title }}</td>
         </tr>
         <tr>
             <th>本文</th>
             <td>{{ $post->content }}</td>
         </tr>    
         <tr>
             <th>作成日時</th>
             <td>{{ $post->created_at }}</td>            
         </tr>
         <tr>
             <th>更新日時</th>
             <td>{{ $post->updated_at }}</td>
         </tr>      
    </table>
</body>

</html>