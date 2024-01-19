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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-c6QJNLQ9C6vz5E+P1RjNCAS5cU6ZzN1DS9tWXMlWpRCU0kMwqWJ2aG/2AX6PYIszR25Y3RZrjvK0xGckZq5RPw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            </nav>
        </div>
    </header>

    @php
    $folderPath = public_path('formPesanan');
    $pesanan = [];

    $files = File::allFiles($folderPath);

    foreach ($files as $file) {
        $data = include($file->getPathname());

        $pesanan[] = [
            'meja' => $data['meja'],
            'orang' => $data['orang'],
            'selectedMenus' => $data['selectedMenus'],
            'quantity' => $data['quantity'],
            'total_harga' => $data['total_harga'],

        ];
    }
    @endphp

    <div class="container mt-4">
        <h1 class="text-center">Struk Pemesanan</h1>

        <div class="row row-cols-1 row-cols-md-3">
            @foreach ($pesanan as $struk)
            <div class="col mb-4">
                <div id="struk" class="struk-container">
                    <div class="struk-header"></div>

                    <div class="struk-item">
                        <th scope="row">Meja: {{ $struk['meja'] }}</th>
                    </div>

                    @foreach ($struk['selectedMenus'] as $menu)
                    <div class="struk-item">
                        <th scope="row">Menu: {{ $menu }}</th>
                    </div>
                    @endforeach

                    <div class="struk-item">
                        <th scope="row">Jumlah Orang: {{ $struk['orang'] }}</th>
                    </div>

                    <div class="struk-total">Total Harga: Rp {{ $struk['total_harga'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer class="bg-dark text-light">
        <div class="container text-center">
            <p>&copy; 2024 Menu Restoran | About Us</p>
        </div>
    </footer>
    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
