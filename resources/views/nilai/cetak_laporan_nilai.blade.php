<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Cetak Laporan Nilai</h1>
        <form action="/cetak-laporan" method="post">
            @csrf
            <div class="form-group">
                <label for="matakuliah">Matakuliah:</label>
                <select class="form-control" id="matakuliah" name="matakuliah">
                    <option value="mat1">Matakuliah 1</option>
                    <option value="mat2">Matakuliah 2</option>
                    <!-- Tambahkan opsi matakuliah lain sesuai kebutuhan -->
                </select>
            </div>
            <div class="form-group">
                <label for="output">Output:</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="output" id="pdf" value="pdf">
                    <label class="form-check-label" for="pdf">PDF</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="output" id="xls" value="xls">
                    <label class="form-check-label" for="xls">XLS</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cetak</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
