<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <a href="{{ url('/user') }}">Kembali</a>
        <form action="{{ url('/user/tambah_simpan') }}" method="POST">
            {{ csrf_field() }}
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required><br><br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required><br><br>
            <label for="level_id">Level:</label>
            <input type="number" name="level_id" id="level_id" required><br><br>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>