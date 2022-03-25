<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー編集</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <a href="{{ route('users.index') }}">一覧へ戻る</a>
    <form action="{{ route('users.update', ['user' => $user->id]) }}" method="post">
        <table>
            <thead>
                <tr>
                    <th>項目</th>
                    <th>値</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>名前</th>
                    <td>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
                        <x-errors name="name" />
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
                        <x-errors name="email" />
                    </td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td>
                        <input type="password" name="password" placeholder="更新しない">
                        <x-errors name="password" />
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        @csrf
                        @method('PUT')
                        <button type="submit">更新</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>