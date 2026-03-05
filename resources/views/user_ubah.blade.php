<html>
    <head>
        <title>Ubah Data</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="{{ url('/user') }}">Kembali</a>
        <form action="{{ url('/user/tambah_simpan') }}" method="POST">
            {{ csrf_field() }}
            {{-- {{ method_field('PUT') }} --}}
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ $data->username }}" required><br><br>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="{{ $data->nama }}" required><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="{{ $data->password }}" required><br><br>
            <label for="level_id">Level:</label>
            <input type="number" name="level_id" id="level_id" value="{{ $data->level_id }}" required><br><br>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>