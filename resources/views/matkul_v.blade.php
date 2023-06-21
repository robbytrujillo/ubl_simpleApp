<!DOCTYPE html>
<html>
<head>
    <title>List Mata Kuliah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>List Matakuliah</h1>
        <a href="/add_matkul" class="btn btn-primary">Tambah Data</a>
        <br>
        @if (session('message'))
            {{ session('message') }}
        @endif
        <table class="table table-bordered" cellpadding="5">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>Kode Matakuliah</th>
                    <th>Mata Kuliah</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($matkul as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode_matkul }}</td>
                    <td>{{ $data->mata_kuliah }}</td>
                    <td>
                        <a href="/edit/{{ $data->nim }}" class="btn btn-warning">Update</a>
                        <a href="/delete/{{ $data->nim }}" class="btn btn-danger">Delete</a>
                        <a href="/cetak-laporan" class="btn btn-primary">Cetak Laporan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/mhs" class="btn btn-light">Kembali</a>
    </div>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
