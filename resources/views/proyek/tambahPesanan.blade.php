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
    
@forelse ($lihat as $item)

    <header>
        <nav>
            <h1>Menu Order</h1>
        </nav>
    </header>

    <main>
        <h1 class="text-center">Menu Order</h1>
        <section class="order-form form-scroll-container">
            <div class="text-start mb-3">
                <a href="{{ url()->previous() }}">
                <button class="btn btn-danger" id="addButton" >Kembali</button>
                </a>
            </div>
        <section class="order-form form-scroll-container">
            <form method="post" action="/tambah-form-pesanan">
                @csrf <!-- Add CSRF token for protection -->

                <label for="meja">Nomor Meja{{-- $req->meja --}}</label>
                <input type="number" id="meja" name="meja" required>
                
                <label for="orang">Jumlah Orang :</label>
                <input type="number" id="orang" name="orang">
                
                <label for="menuItem">Menu Makanan:</label>
                <select id="menuItem" name="menu[]" multiple required onchange="showQuantityInput()">
                    <!-- Daftar menu bisa ditambahkan di sini -->
                    <option value={{ $item->id }} data-price={{ $item->harga }} class="menu-option">. {{ $item->makanan }}
                    </option>
                    @empty
                    <tr id="noDataMessage">
                        <td colspan="7" class="text-center">Tidak ada data untuk ditampilkan.</td>
                    </tr>
                    @endforelse
                    <!-- Tambahkan lebih banyak menu sesuai kebutuhan -->
                </select>


                <label for="total_harga">Harga Total:</label>
                <input type="number" id="total_harga" name="total_harga" readonly>

                <label for="penyediaan">Lama Pembuatan:</label>
                <input type="text" id="penyediaan" name="penyediaan" readonly>

                <button type="submit">Pesan</button>
            </form>
        </section>
    </main>
</body>

<footer class="bg-dark text-light">
    <div class="container text-center">
        <p>&copy; 2024 Menu Restoran | About Us</p>
    </div>
</footer>
</html>