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
