<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダッシュボード</title>
</head>

<body>
    ログインしました。あなたのユーザー名は {{ $user->name }} です。
    <form method="post" action="/logout">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>

</html>