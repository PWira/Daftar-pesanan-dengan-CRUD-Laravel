<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-jN2DK6N1I5XI4Z0f5A4N4vE6Jd/jZVbWKaMEKLZcFGKGXaTXwI8W2Dtb8z2KDPOIczP5dznWBw3q2q/EvcO7uA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap"
        rel="stylesheet">
    <script src="script.js" defer></script>
    <title>Menu Order</title>
</head>

<body>
    <header>
        <nav>
            <h1>Menu Order</h1>
        </nav>
    </header>

    <main>
        <section class="order-form">
            <form>
                <label for="tableNumber">Nomor Meja{{-- $req->meja --}}</label>
                <input type="text" id="tableNumber" name="tableNumber" required>

                <label for="menuItems">Menu Makanan/Minuman:</label>
                <select id="menuItems" name="menuItems" multiple required onchange="showQuantityInput()">
                    {{-- @forelse ($menu as $item) --}}
                    <!-- Daftar menu bisa ditambahkan di sini -->
                    <option value="" data-price="10" class="menu-option">Menu 1 - Rp 10,000</option>
                    <option value="" data-price="15" class="menu-option">Menu 2 - Rp 15,000</option>
                    <!-- Tambahkan lebih banyak menu sesuai kebutuhan -->
                </select>
                <!-- Tambahkan div untuk menampilkan input jumlah dinamis -->
                <div id="quantityInputs"></div>

                <label for="totalPrice">Harga Total:</label>
                <input type="text" id="totalPrice" name="totalPrice" readonly>

                <label for="cookTime">Lama Pembuatan:</label>
                <input type="text" id="cookTime" name="cookTime">

                <button type="submit">Pesan</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Menu Order - About Us</p>
    </footer>
</body>

</html>
