<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catetanku</title>
</head>
<body>
    @foreach($list as $key => $val)
    <table style="width : auto; margin-top: 10px" border="1">
        <tr>
            <td>{{ $key+1 }}.</td>
            <td>{{ $val->judul }}</td>
            <td>{{ $val->tgl }}</td>
        </tr>
        <tr>
            <td colspan="3">{{ $val->deskripsi }}</td>
        </tr>
    </table>
    @endforeach
</body>
</html>