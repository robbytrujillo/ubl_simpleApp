<!DOCTYPE html>
<html>
<head>
    <title>budiluhurAPP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- script typewritter -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">budiluhur<span style="color: darkorange">APP</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Registrasi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang di Sistem Informasi Mahasiswa <span style="color: darkorange" id="typed-text"></span>  </h1>
            <p class="lead">Sistem ini membantu Anda mengelola data mahasiswa dengan mudah dan efisien.</p>
            <hr class="my-4">
            <p>Silakan pilih salah satu opsi di bawah ini:</p>
            <a href="/mahasiswa" class="btn btn-primary mr-2">Lihat Data Mahasiswa</a>
            <a href="/matkul" class="btn btn-secondary">Lihat Mata Kuliah</a>
            <a href="/nilaimhs" class="btn btn-success">Lihat Nilai Mahasiswa</a>
        </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Process -->
  <script>
    $(document).ready(function() {
      const typed = new Typed('#typed-text', {
        strings: ['Universitas..', 'Budi..', 'Luhur..'],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
      });
    });
  </script>
  {{-- <footer class="footer bg-light">
    <div class="container text-center">
        <span class="text-muted">Copyright - &copy; 2023</span>
    </div>
</footer> --}}
</body>
</html>
