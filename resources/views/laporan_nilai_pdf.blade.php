<!DOCTYPE html>
<html>
<head>
    <title>Laporan Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Laporan Nilai</h1>
        <h2>Matakuliah: {{ $matkul->mata_kuliah }}</h2>
        <table class="table table-bordered" cellpadding="5">
            <thead class="thead-dark">
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Nilai Akhir</th>
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($dataNilai as $nilai)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $nilai->nim }}</td>
                    <td>{{ $nilai->mahasiswa->nama }}</td>
                    <td>{{ $nilai->tugas }}</td>
                    <td>{{ $nilai->uts }}</td>
                    <td>{{ $nilai->uas }}</td>
                    <td>{{ $nilai->nilai_akhir }}</td>
                    <td>{{ $nilai->grade }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
