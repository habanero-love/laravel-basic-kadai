<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クエリビルダを使ってデータを取得しよう</title>
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
            <th>タイトル</th>
            <th>本文</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
            </tr>            
        @endforeach       
    </table>
</body>

</html>