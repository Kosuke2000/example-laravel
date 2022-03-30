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
    <h1>管理ページ</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>日付</th>
                <th>description</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach($infomation as $info)
            <tr>
                <td>{{ $info->id }}</td>
                <td>{{ $info->created_at }}</td>
                <td>{{ $info->description }}</td>
                <td>
                    <button type="button" onclick="location.href = `{{ route('admin.edit', ['id' => $info->id]) }}`">編集</button>
                    <form action="{{ route('admin.destroy', ['id' => $info->id]) }}" method="post" onsubmit="return window.confirm('お知らせ{{ $info->id }}を削除してよろしいですか？')">
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
                    <button type="button" onclick="location.href = `{{ route('admin.create') }}`">新規作成</button>
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>