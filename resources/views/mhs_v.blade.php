<!DOCTYPE html>
<html>
<head>
    <title>List Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>List Mahasiswa</h1>
        <a href="/add" class="btn btn-primary">Tambah Data</a>
        <br>
        @if (session('message'))
            {{ session('message') }}
        @endif
        <table class="table table-bordered" cellpadding="5">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($mhs as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>
                        <a href="/edit/{{ $data->nim }}" class="btn btn-warning">Update</a>
                        <a href="/delete/{{ $data->nim }}" class="btn btn-danger">Delete</a>
                        <a href="/cetak-laporan" class="btn btn-primary">Cetak Laporan</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/matkul" class="btn btn-light">Lihat Mata Kuliah</a>
    
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
