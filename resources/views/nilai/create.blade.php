@extends('layouts.app')

@section('content')
    <h1>Tambah Data Nilai Mahasiswa</h1>

    <form method="POST" action="{{ route('nilai.store') }}">
        @csrf
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="matakuliah">Matakuliah</label>
            <input type="text" class="form-control" id="matakuliah" name="matakuliah" required>
        </div>
        <div class="form-group">
            <label for="tugas">Tugas</label>
            <input type="number" class="form-control" id="tugas" name="tugas" required>
        </div>
        <div class="form-group">
            <label for="uts">UTS</label>
            <input type="number" class="form-control" id="uts" name="uts" required>
        </div>
        <div class="form-group">
            <label for="uas">UAS</label>
            <input type="number" class="form-control" id="uas" name="uas" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
