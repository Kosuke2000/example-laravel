<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー作成</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <a href="{{ route('users.index') }}">一覧へ戻る</a>
    <form action="{{ route('users.store') }}" method="post">
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
                        <input type="text" name="name" value="{{ old('name') }}" required>
                        <x-errors name="name" />
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type="text" name="email" value="{{ old('email') }}" required>
                        <x-errors name="email" />
                    </td>
                </tr>
                <tr>
                    <th>パスワード</th>
                    <td>
                        <input type="text" name="password" value="{{ old('password') }}" required>
                        <x-errors name="password" />
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        @csrf
                        <button type="submit">作成</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>