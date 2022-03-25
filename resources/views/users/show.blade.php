<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー {{ $user->name }}</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <a href="{{ route('users.index') }}">一覧へ戻る</a>
    <table>
        <thead>
            <tr>
                <th>項目</th>
                <td>値</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr>
                <th>名前</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>作成日時</th>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <th>更新日時</th>
                <td>{{ $user->updated_at }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>