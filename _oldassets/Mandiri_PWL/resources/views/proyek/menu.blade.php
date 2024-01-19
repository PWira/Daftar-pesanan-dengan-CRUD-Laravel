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
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <h2>Form Pemesanan</h2>
  <form>
    <div class="form-group">
      <label for="menu">Menu:</label>
      <select class="form-control" id="menu" onchange="updateTotalHarga()">
        <option value="nasi_goreng" data-harga="20000">Nasi Goreng</option>
        <option value="mie_goreng" data-harga="17000">Mie Goreng</option>
        <option value="ayam_goreng" data-harga="9000">Ayam Goreng</option>
        <!-- Tambahkan menu makanan lainnya sesuai kebutuhan -->
      </select>
    </div>
    <div class="form-group">
      <label for="jumlahPesanan">Jumlah Pesanan:</label>
      <input type="number" class="form-control" id="jumlahPesanan" placeholder="Jumlah Pesanan" min="1" value="0" onchange="updateTotalHarga()">
    </div>
    <div class="form-group">
      <label for="totalHarga">Total Harga:</label>
      <input type="text" class="form-control" id="totalHarga" placeholder="Total Harga" readonly>
    </div>
    <button type="button" class="btn btn-primary" onclick="tambahKeDaftar()">Tambahkan ke Daftar</button>
  </form>
  </ul>
</div>

<script>
  function updateTotalHarga() {
    var hargaMenu = document.getElementById('menu').options[document.getElementById('menu').selectedIndex].getAttribute('data-harga');
    var jumlahPesanan = parseInt(document.getElementById('jumlahPesanan').value);
    var totalHarga = hargaMenu * jumlahPesanan;
    document.getElementById('totalHarga').value = totalHarga.toFixed(2); // Menggunakan toFixed untuk menampilkan dua angka desimal

    if (jumlahPesanan === 0) {
      document.getElementById('jumlahPesanan').value = 0;
    }
  }

  function tambahKeDaftar() {
    var menu = document.getElementById('menu').value;
    var jumlahPesanan = parseInt(document.getElementById('jumlahPesanan').value);
    var hargaMenu = document.getElementById('menu').options[document.getElementById('menu').selectedIndex].getAttribute('data-harga');

    // Buat elemen list item baru
    if (jumlahPesanan > 0) {
      // Buat elemen list item baru
      var listItem = document.createElement('li');
      listItem.className = 'list-group-item';

      //Tampilkan informasi dengan jumlah pesanan yang mengikuti menu
      listitem.textContent = menu 

      // Tampilkan informasi dengan harga yang mengikuti jumlah pesanan
      listItem.textContent = menu + ' (Jumlah: ' + jumlahPesanan + ', Harga: ' + (hargaMenu * jumlahPesanan).toFixed(2) + ' total)';

      // Tambahkan list item ke daftar pesanan
      document.getElementById('daftarPesanan').appendChild(listItem);

      // Reset input setelah ditambahkan
      document.getElementById('menu').value = 'nasi_goreng';
      document.getElementById('jumlahPesanan').value = 0; // Mengubah jumlah pesanan menjadi 0
      document.getElementById('totalHarga').value = '';
    } else {
      // Jika jumlah pesanan 0, beri peringatan
      alert('Jumlah pesanan harus lebih dari 0.');
    }
  }
</script>


    <footer class="bg-dark text-light py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Menu Restoran | About Us</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
