<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Menu Makanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-c6QJNLQ9C6vz5E+P1RjNCAS5cU6ZzN1DS9tWXMlWpRCU0kMwqWJ2aG/2AX6PYIszR25Y3RZrjvK0xGckZq5RPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Montserrat Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        header {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-light py-4">
        <div class="container">
            <h1 class="display-4">Menu Restoran</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Chef di Dapur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/')}}">Home</a>
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
        </div>
    </header>

    <div class="container mt-5">
    <div class="card-body">
      <ul id="daftarPesanan" class="list-group">
        <!-- Pesanan akan ditampilkan di sini -->
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
            <th scope="col">ID Pesanan</th>
            <th scope="col">Tanggal Pemesanan</th>
            <th scope="col">Menu yang Dipesan</th>
            <th scope="col">Total Harga</th>
          </tr>
        </thead>
        <tbody id="detailPesanan">
        <tr>
              <th scope="row">1</th>
              <td>YG014528964810</td>
              <td>9-1-2024</td>
              <td>Nasi Goreng</td>
              <th>Rp. 80.000</th>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>AF069482752910</td>
              <td>17-1-2024</td>
              <td>Mie Goreng</td>
              <th>Rp. 34.000</th>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>PW831974291047</td>
              <td>9-12-2023</td>
              <td>Mie Goreng</td>
              <th>Rp. 68.000</th>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- End Detail Pesanan -->

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function tambahKeDaftar() {
        var idPesanan = document.getElementById('idPesanan').value;
        var tanggalPemesanan = document.getElementById('tanggalPemesanan').value;
        var menuDipesan = document.getElementById('menuDipesan').value;

        var daftarPesanan = document.getElementById('daftarPesanan');
        var listItem = document.createElement('li');
        listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
        listItem.innerHTML = `${idPesanan}
                          <span class="badge badge-primary badge-pill">${tanggalPemesanan} - ${menuDipesan}</span>`;
        daftarPesanan.appendChild(listItem);

        var detailPesanan = document.getElementById('detailPesanan');
        var row = detailPesanan.insertRow();
        var cellId = row.insertCell(0);
        var cellTanggal = row.insertCell(1);
        var cellMenu = row.insertCell(2);
        var cellAksi = row.insertCell(3);

        cellId.textContent = detailPesanan.rows.length;
        cellTanggal.textContent = tanggalPemesanan;
        cellMenu.textContent = menuDipesan;

        var btnHapus = document.createElement('button');
        btnHapus.className = 'btn btn-danger btn-sm';
        btnHapus.innerHTML = '<i class="fas fa-trash-alt"></i> Hapus';
        btnHapus.addEventListener('click', function () {
            hapusBaris(this);
        });
        cellAksi.appendChild(btnHapus);

        document.getElementById('idPesanan').value = '';
        document.getElementById('tanggalPemesanan').value = '';
        document.getElementById('menuDipesan').value = 'nasi_goreng';
    }

    function hapusBaris(button) {
        var row = button.parentNode.parentNode;
        row.parentNode.removeChild(row);
    }
</script>
