<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Menu Makanan</title>
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
        <button class="text-end btn btn-outline-danger btn-transparent" onclick="clearHiddenMejas()">Force Refresh</button>
    </nav>
        </div>
    </header>

    @php
        $folderPath = public_path('formPesanan');
        $mejaData = [];

        $files = File::allFiles($folderPath);

        foreach ($files as $file) {
            $data = include($file->getPathname());

            $mejaData[] = [
                'meja' => $data['meja'],
                'id' => $data['id'],
                'selectedMenus' => $data['selectedMenus'],
                'quantity' => $data['quantity'],
                'harga' => $data['total_harga'],
            ];
        }
    @endphp

    <div class="container mt-4">
        <h1 class="text-center">Chef di Dapur - Pelayan Pesanan</h1>
        <div class="text-end mb-3">
            <a href="/tambah-pesanan">
                <button class="btn btn-primary" id="addButton">Tambah Pesanan</button>
            </a>
        </div>

        @foreach ($mejaData as $mejaItem)
            <div class="card mt-4">
                <div class="card-header">
                    <div>
                        Detail Pesanan - Meja {{ $mejaItem['meja'] }}
                    </div>
                    <div class="text-end mb-3">
                        <button class="btn btn-danger btn-sm" onclick="confirmHide('{{ $mejaItem['id'] }}', '{{ $mejaItem['meja'] }}', '{{ $mejaItem['harga'] }}')">
                            Hide Meja</button>
                    </div>
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
                            @forelse ($mejaItem['selectedMenus'] as $index => $selectedMenu)
                                @php
                                    $menuDetails = explode(' - ', $selectedMenu);
                                    $menuName = $menuDetails[0];
                                    $menuPrice = $menuDetails[1];
                                @endphp
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $menuName }}</td>
                                    <td>{{ $mejaItem['quantity'] }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data untuk ditampilkan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach

        <br>
        <br>
        <br>
    </div>

  <footer class="bg-dark text-light">
    <div class="container text-center">
        <p>&copy; 2024 Menu Restoran | About Us</p>
    </div>
    </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>