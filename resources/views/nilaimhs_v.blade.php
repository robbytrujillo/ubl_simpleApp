<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Nilai Mahasiswa</h1>
        <a href="/add" class="btn btn-primary">Tambah Data</a>
        <br>
        @if (session('message'))
            <div class="alert alert-danger">{{ session('message') }}</div>
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
                <?php $no = 1; ?>
                @foreach ($nilaimhs as $data)
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

        <!-- Form Cetak Laporan -->
        <div class="mt-5">
            <h2>Cetak Laporan Nilai</h2>
            <form method="post" action="/cetak-laporan">
                @csrf
                <div class="form-group">
                    <label for="kode_matkul">Matakuliah:</label>
                    <select class="form-control" id="kode_matkul" name="kode_matkul">
                        @foreach ($matkul as $data)
                        <option value="{{ $data->kode_matkul }}">{{ $data->mata_kuliah }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="output_type">Output:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="output_type" id="pdf" value="pdf" checked>
                        <label class="form-check-label" for="pdf">
                            PDF
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="output_type" id="xls" value="xls">
                        <label class="form-check-label" for="xls">
                            XLS
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Cetak">
            </form>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

