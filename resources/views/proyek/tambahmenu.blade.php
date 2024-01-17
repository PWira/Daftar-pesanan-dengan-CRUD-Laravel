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
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Home</a>
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
        </div>
    </header>

    <div class="container mt-4">
        <h2>Menu Makanan</h2>
        <form method="post" action="/tambah-form-makanan">
            @csrf
            <div class="mb-3">
                <label for="namaMakanan" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control" id="namaMakanan" name="makanan" placeholder="Masukkan nama makanan">
            </div>
            <div class="mb-3">
                <label for="hargaMakanan" class="form-label">Harga</label>
                <input type="number" class="form-control" id="hargaMakanan" name="harga" placeholder="Masukkan harga makanan">
            </div>
            <div class="mb-3">
                <label for="lamaPembuatan" class="form-label">Lama Pembuatan</label>
                <input type="number" class="form-control" id="lamaPembuatan" name="penyediaan" placeholder="Masukkan lama pembuatan">
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan Menu</button>
        </form>
    </div>

    <footer class="bg-dark text-light py-3 mt-5">
        <div class="container text-center">
            <p>&copy; 2024 Menu Restoran | About Us</p>
        </div>
    </footer>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
