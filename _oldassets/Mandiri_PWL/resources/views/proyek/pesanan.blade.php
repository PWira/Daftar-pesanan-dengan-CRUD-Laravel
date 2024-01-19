<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chef di Dapur - Pelayan Pesanan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
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

  <div class="container mt-4">
    <h1 class="text-center">Chef di Dapur - Pelayan Pesanan</h1>

    <!-- Daftar Pesanan -->
    <div class="card mt-4">
      <div class="card-header">
        Daftar Pesanan
      </div>
      <div class="card-body">
        <ul class="list-group">
          <!-- Contoh Pesanan -->
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Meja 1
            <span class="badge badge-primary badge-pill">3 items</span>
          </li>
          <!-- End Contoh Pesanan -->
        </ul>
      </div>
    </div>
    <!-- End Daftar Pesanan -->

    <!-- Detail Pesanan -->
    <div class="card mt-4">
      <div class="card-header">
        Detail Pesanan
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Menu</th>
              <th scope="col">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <!-- Contoh Detail Pesanan -->
            <tr>
              <th scope="row">1</th>
              <td>Nasi Goreng</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mie Goreng</td>
              <td>2</td>
            </tr>
            <!-- End Contoh Detail Pesanan -->
          </tbody>
        </table>
      </div>
    </div>
    <!-- End Detail Pesanan -->

  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/