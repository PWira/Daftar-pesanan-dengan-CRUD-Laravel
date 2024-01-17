<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Your Website</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Poppins:wght@400;500&display=swap" rel="stylesheet">

  <!-- Your Custom Styles -->
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Poppins', sans-serif;
    }

    /* Add your custom styles here */

  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Your Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <div class="container mt-4">
    <h2>Main Content</h2>
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
            <th>Lama Penyediaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tableBody">
            @forelse ($lihat as $item)
            <tr id="isi">
                <td>{{ $item->makanan }}</td>
                <td>{{ $item->harga }}</td>
                <td>{{ $item->penyediaan }}</td>
                <td class="text-center align-middle">
                    <a class="fas fa-trash center" href="hapus-makanan{{$item->id}}">
                        <button class="btn btn-danger">
                            HAPUS
                        </button>
                    </a>
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
  <footer class="bg-dark text-light text-center p-3">
    <p>About Us</p>
  </footer>

  <!-- Bootstrap JS and DataTable JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>
