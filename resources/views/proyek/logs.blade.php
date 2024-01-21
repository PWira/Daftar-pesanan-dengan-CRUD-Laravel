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
    <br>
    <h1 class="text-center">Logs / Riwayat</h1>

    @php
        $folderPath = public_path('formPesanan');
        $mejaData = [];
        
        $files = File::allFiles($folderPath);
        
        foreach ($files as $file) {
          $data = include($file->getPathname());
          
          $mejaData[] = [
            'pid' => $data['id'],
            'selectedMenus' => $data['selectedMenus'],
            'quantity' => $data['quantity'],
            'harga' => $data['total_harga'],
          ];
        }
        @endphp

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
              @forelse ($logs as $item)
                  @if ($item->id !== null)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->created_at }}</td>
                          <td scope="row">
                            Menu:
                            @foreach ($mejaData as $mejaItem)
                                @if ($mejaItem['pid'] == $item->id)
                                    @foreach ($mejaItem['selectedMenus'] as $menu)
                                        {{ $menu }}
                                    @endforeach
                                    <td>{{ $mejaItem['harga'] }}</td>
                                @endif
                            @endforeach
                        </td>
                      </tr>
                  @endif
              @empty
                  <tr>
                      <td colspan="5" class="text-center">Tidak ada data untuk ditampilkan.</td>
                  </tr>
              @endforelse
          </tbody>
      </table>
  </div>
</div>
<!-- End Detail Pesanan -->

</body>

<footer class="bg-dark text-light">
  <div class="container text-center">
      <p>&copy; 2024 Menu Restoran | About Us</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>