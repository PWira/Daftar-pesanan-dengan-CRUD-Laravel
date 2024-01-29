<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Next Dash</title>
        <link rel="stylesheet" href="styles.css">
        <script src="script.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

    <main>
        <h1 class="text-center">Menu Order</h1>
        <section class="order-form form-scroll-container">
            <div class="text-start mb-3">
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-danger" id="addButton">Kembali</button>
                </a>
            </div>
            <form method="post" action="/tambah-form-pesanan">
                @csrf <!-- Add CSRF token for protection -->
    
                <label for="meja">Nomor Meja{{-- $req->meja --}}</label>
                <input type="number" id="meja" name="meja" required>
    
                <label for="orang">Jumlah Orang :</label>
                <input type="number" id="orang" name="orang">
    
                <!-- Form for selecting menu items -->
                <div class="container mt-4">
                    <div class="form-group">
                        <label for="menu">Pilih Menu:</label>
                        <select class="form-control" id="menuList" name="menuList">
                            @forelse ($lihat as $item)
                            <option value={{ $item->id }} data-price={{ $item->harga }} class="menu-option">
                                {{ $item->id }}. {{ $item->makanan }} - Harga: {{ $item->harga }}
                            </option>
                            @empty
                            <option value="0" data-price="0" class="menu-option">Tidak ada data untuk ditampilkan.</option>
                            @endforelse
                            <!-- Tambahkan opsi sesuai dengan menu yang tersedia -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Jumlah Pesanan:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Jumlah">
                    </div>
                    <br>
                    <button type="button" class="btn btn-primary" onclick="addMenuItem()">Tambah ke Pesanan</button>
                </div>
    
                <!-- Display selected menu items -->
                <div class="container mt-4">
                    <h2>Daftar Menu yang Akan Dimasak</h2>
                    <ul id="daftar-menu" class="list-group">
                        <!-- Daftar menu yang akan ditampilkan di sini -->
                    </ul>
                </div>

                <label for="total_harga">Harga Total:</label>
                <input type="number" id="total_harga" name="total_harga" readonly>
                <br>

                <button type="submit">Pesan</button>
            </form>
        </section>
    </main>
</body>

<footer class="bg-dark text-light">
    <div class="container text-center">
        <p>&copy; 2024 Next Dash | About Us</p>
    </div>
</footer>

<script>

</script>

</html>