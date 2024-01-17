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
                    <option value="1" data-price="10.000" class="menu-option"> Menu 1</option>
                    <option value="2" data-price="15.000" class="menu-option"> Menu 2</option>
                    <!-- Tambahkan lebih banyak menu sesuai kebutuhan -->
                </select>
                <!-- Tambahkan div untuk menampilkan input jumlah dinamis -->
                <div id="quantityInputs"></div>


                <label for="total_harga">Harga Total:</label>
                <input type="number" id="total_harga" name="total_harga">

                <label for="penyediaan">Lama Pembuatan:</label>
                <input type="text" id="penyediaan" name="penyediaan">

                <button type="submit">Pesan</button>
            </form>
        </section>
    </main>
</body>

</html>