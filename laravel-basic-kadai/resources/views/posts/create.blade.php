<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの作成機能とバリデーションを実装しよう</title>
</head>
<style>
    *{
        box-sizing:border-box;
    }
    body{
        min-height:100vh;
        text-align: center;
    }
    form{
        width: 100%;
    }
    table{
        border-collapse: collapse;
        max-width:800px;
        margin:0 auto;
        width: 100%;
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
    textarea,input{
        width:100%;
        min-height:30px;
        border:1px solid #EE9487;
    }
    input[type="submit"]{
        width:300px;
        text-align:center;
        margin-top:30px;
        background: #E44461;
        color:white;
        font-size:20px;
        font-weight:bold;
        padding:10px;
        border-radius:500vw;
        border:none;
    }
    .error{
        color: #E44461;
        width: fit-content;
        margin: 10px auto;
        text-align: left;
    }
</style>
<body>
    <h1>投稿作成</h1>

    @if ($errors->any())
        <div>
            <ul class="error">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif    

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="title">
                </td>
            </tr>
            <tr>
                <th>本文</th>
                <td>
                    <textarea rows="5" name="content"></textarea>
                </td>
            </tr>     
        </table>
        <input type="submit" value="投稿">
    </form>
</body>

</html>
