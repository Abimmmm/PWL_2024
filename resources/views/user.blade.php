{{-- <html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level</th>
            </tr>
                <tr>
                    <td>{{ $data->user_id }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->level_id }}</td>
                </tr>
        </table>
    </body>
</html> --}}


<html>
<head>
    <title>Data User</title>
</head>
<body>

    <h1>Data User hired</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data }}</td>
            </tr>
        </tbody>
    </table>

</body>
</html>
