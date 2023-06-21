<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data</h1>

        <form method="post" action="/insert_matkul">
            @csrf
            <div class="form-group">
                <label for="kode_matkul">Kode Matkul:</label>
                <input type="text" class="form-control" id="kode_matkul" name="vKODEMATKUL">
            </div>
            <div class="form-group">
                <label for="mata_kuliah">Mata Kuliah:</label>
                <input type="text" class="form-control" id="mata_kuliah" name="vMATAKULIAH">
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
