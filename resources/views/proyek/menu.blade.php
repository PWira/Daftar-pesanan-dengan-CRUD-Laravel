<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Next Dash</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-c6QJNLQ9C6vz5E+P1RjNCAS5cU6ZzN1DS9tWXMlWpRCU0kMwqWJ2aG/2AX6PYIszR25Y3RZrjvK0xGckZq5RPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Montserrat Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">
</head>
<body>
  <header class="bg-dark text-light py-4">
    <div class="container">
        <h1 class="display-4">Next Dash</h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ url('/')}}">Next Dash</a>
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
                <a class="nav-link" href="{{ url('pesanan') }}">Pesanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('menu') }}">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('struk') }}">Struk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('logs') }}">Logs</a>
            </li>
        </ul>
    </div>
</nav>
    </div>
</header>
  <!-- Main Content -->
  <div class="container mt-4 text-center">
    <h1>Menu Makanan</h1>
    <div class="text-end mb-3">
        <a href="/tambah-menu">
        <button class="btn btn-primary" id="addButton" >Tambah Menu</button>
        </a>
    </div>
    <!-- Responsive Table with DataTable -->
    <div class="table-responsive">
      <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tableBody">
            @forelse ($lihat as $item)
                <tr id="isi">
                    <td>{{ $item->makanan }}</td>
                    <td>{{ $item->harga }}</td>
                    <td class="text-center align-middle">
                        <button class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">
                            HAPUS
                        </button>
                    </td>
                </tr>
            @empty
                <tr id="noDataMessage">
                    <td colspan="7" class="text-center">Tidak ada data untuk ditampilkan.</td>
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-light">
    <div class="container text-center">
        <p>&copy; 2024 Menu Restoran | About Us</p>
    </div>
  </footer>

  <!-- Bootstrap JS and DataTable JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
