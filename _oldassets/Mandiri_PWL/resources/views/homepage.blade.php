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
                    <a class="nav-link" href="{{ url('struk') }}">Logs</a>
                </li>
            </ul>
        </div>
    </nav>
        </div>
    </header>

    <!-- Pemesanan -->
    <div class="container mt-4">
        <h2>Kasir Pemesanan</h2>
        <form>
            <div class="form-group">
                <label for="menu">Pilih Menu:</label>
                <select class="form-control" id="menu" name="menu">
                    <option>Masakan 1</option>
                    <option>Masakan 2</option>
                    <option>Masakan 3</option>
                    <!-- Tambahkan opsi sesuai dengan menu yang tersedia -->
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah Pesanan:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Jumlah">
            </div>
            <button type="submit" class="btn btn-primary">Tambah ke Pesanan</button>
        </form>
    </div>

    <!-- Daftar Menu -->
    <div class="container mt-4">
        <h2>Daftar Menu yang Akan Dimasak</h2>
        <ul id="daftar-menu" class="list-group">
            <!-- Daftar menu yang akan ditampilkan di sini -->
        </ul>
    </div>

    <footer class="bg-dark text-light py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Menu Restoran | About Us</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk menambahkan pesanan ke daftar menu -->
    <script>
        $(document).ready(function () {
            $('form').submit(function (event) {
                event.preventDefault();

                var menu = $('#menu').val();
                var quantity = $('#quantity').val();

                // Tambahkan pesanan ke daftar menu
                $('#daftar-menu').append('<li class="list-group-item">' + quantity + 'x ' + menu + '</li>');
            });
        });
    </script>
</body>

</html>
