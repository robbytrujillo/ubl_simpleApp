<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h1>Laporan Nilai</h1>

    <h2>Matakuliah: {{ $matakuliah }}</h2>

    <table>
        <thead>
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
            @foreach ($nilai as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tugas }}</td>
                    <td>{{ $item->uts }}</td>
                    <td>{{ $item->uas }}</td>
                    <td>{{ $item->nilai_akhir }}</td>
                    <td>{{ $item->grade }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
