<html>
    <body>
        <h2>Edit Mahasiswa</h2>
        <form action="{{ url('mahasiswa/edit') }}" method="post">
        @csrf
        <input type="text" name="nim" value="{{ $mahasiswa->nim }}"><br><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"><br><br>
        <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}"><br><br>
        <input type="text" name="kodejurusan" value="{{ $mahasiswa->kodejurusan }}"><br><br>
        <input type="submit" value="proses">
        </form>
    </body>
</html>
