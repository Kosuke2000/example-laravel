<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー一覧</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{ route('users.show', ['user' => $user->id]) }}">
                        {{ $user->id }}
                    </a>
                </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button + type="button" + onclick="location.href = `{{ route('users.edit', ['user' => $user->id]) }}`" +>編集</button>
                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post" onsubmit="return window.confirm('ユーザー{{ $user->name }}を削除してよろしいですか？')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">削除</button>
                    </form>
                <td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <button + type="button" + onclick="location.href = `{{ route('users.create') }}`" +>新規作成</button>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>