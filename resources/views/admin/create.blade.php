<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お知らせ作成</title>
    <link rel="stylesheet" href="{{ mix('css/users.css') }}">
</head>

<body>
    <a href="{{ route('admin.index') }}">一覧へ戻る</a>
    <form action="{{ route('admin.store') }}" method="post">
        <table>
            <thead>
                <tr>
                    <th>項目</th>
                    <th>値</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>description</th>
                    <td>
                        <input type="text" name="description" value="{{ old('description') }}" required>
                        <x-errors name="name" />
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