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
    </nav>
        </div>
    </header>
<div class="" id="struk">
    <title>Struk Pemesanan</title>
    <div class="struk-container">
        <div class="struk-header">Struk Pemesanan</div>
        <div class="struk-item">
        <th scope="row">Meja : 1</th>
        </div>
        <div class="struk-item">
        <th scope="row">Menu : Ayam Goyeng</th>
        </div>
        <div class="struk-item">
        <th scope="row">Jumlah Pesanan : 10</th>
        </div>
        <div class="struk-item">
        <th scope="row">Jumlah Orang : 40</th>
        </div>
        <!-- Tambahkan struk-item sesuai dengan jumlah pesanan yang ada -->

        <div class="struk-total">Total Harga: Rp 200,000</div>
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