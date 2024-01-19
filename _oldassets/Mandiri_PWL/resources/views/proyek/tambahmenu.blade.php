<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef di Dapur - Pelayan Pesanan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <header class="navbar navbar-expand-lg navbar-light bg-dark">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Chef di Dapur</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('pesanan') }}">Lihat Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tambahmenu') }}">Tambah Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('logs') }}">Logs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('struk') }}">Struk</a>
                    </li>
                </ul>
            </div>
        </nav>
  </header>

    <div class="container mt-4">
        <h2>Menu Makanan/Minuman</h2>
        <form>
            <div class="mb-3">
                <label for="namaMakanan" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control" id="namaMakanan" placeholder="Masukkan nama makanan">
            </div>
            <div class="mb-3">
                <label for="hargaMakanan" class="form-label">Harga</label>
                <input type="text" class="form-control" id="hargaMakanan" placeholder="Masukkan harga makanan">
            </div>
            <div class="mb-3">
                <label for="lamaPembuatan" class="form-label">Lama Pembuatan</label>
                <input type="text" class="form-control" id="lamaPembuatan" placeholder="Masukkan lama pembuatan">
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan Menu</button>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
