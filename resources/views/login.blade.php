<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>

<body>
    <form method="post" class="login-form">
        <div>メールアドレス: <input type="text" name="email" required></div>
        <div>パスワード: <input type="password" name="password" required></div>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
        <div><button type="submit">ログイン</button></div>
        @csrf
    </form>
</body>

</html>