<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Update Data</h1>

        <form method="post" action="/update_matkul/{{ $matkul->kode_matkul }}">
            @csrf
            <div class="form-group">
                <label for="kode_matkul">Kode Matkul:</label>
                <input type="text" class="form-control" id="kode_matkul" name="vKODEMATKUL" value="{{ $matkul->kode_matkul }}">
            </div>
            <div class="form-group">
                <label for="mata_kuliah">Mata Kuliah:</label>
                <input type="text" class="form-control" id="mata_kuliah" name="vMATAKULIAH" value="{{ $matkul->mata_kuliah }}">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Update">
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
