<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お知らせ一覧</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <h1>公開ページ</h1>

    @foreach($infomation as $info)
    <ul>
        <li>
            {{ $info->id }}
        </li>
        <li>
            {{ $info->description }}
        </li>
        <li>
            {{ $info->created_at }}
        </li>
    </ul>
    @endforeach
</body>

</html>