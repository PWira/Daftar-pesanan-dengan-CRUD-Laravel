
// Initialize menuItems array
var menuItems = [];

function addMenuItem() {
    var menuId = $('#menuList').val();
    var menu = $('#menuList option:selected').text();
    var quantity = $('#quantity').val();
    var price = parseFloat($('#menuList option:selected').data('price'));

    var idArray = [menuId];

    var makananArray = [menu];
    // Calculate total price
    var totalPrice = quantity * price;

    // Format totalPrice and price with dot as a thousand separator
    var formattedTotalPrice = formatCurrency(totalPrice);
    var formattedPrice = formatCurrency(price);

    // Tambahkan pesanan ke daftar menu
    var menuItem = {
        id: idArray,
        quantity: quantity,
        price: price,
    };

    // Append the menu item to the array
    menuItems.push(menuItem);

    var listItem = '<li class="list-group-item d-flex justify-content-between align-items-center" ' +
        'data-menu-id="' + menuId + '">' +
        quantity + 'x ' + menu + ' - ID: ' + menuId +
        '<span class="badge bg-primary rounded-pill">' + formattedTotalPrice + '</span>' +
        '<button type="button" class="btn btn-danger btn-sm" onclick="removeMenuItem(this, ' + totalPrice + ',' + menuId + ')">Delete</button></li>';

    // Update total harga input
    var currentTotal = parseFloat($('#total_harga').val()) || 0;
    $('#total_harga').val(currentTotal + totalPrice);

    // Add a hidden input field to store the selected menu data
    var hiddenInput = '<input type="hidden" name="selectedMenus[]" value="' + menu + '">';

    $('#daftar-menu').append(listItem);
    $('#daftar-menu').append(hiddenInput);
}

function confirmHide(id, meja, harga) {
    var isConfirmed = confirm('Are you sure you want to hide Meja ' + meja + '?');
    
    if (isConfirmed) {
        hideMeja(meja);

        // Store the hidden Meja ID in local storage
        storeHiddenMeja(meja);

        // Send AJAX request to store data in Laravel controller
        $.ajax({
            type: 'POST',
            url: '/selesai-form-pesanan',
            data: {
                _token: '{{ csrf_token() }}',
                pid: id,
                total_harga: harga,
                // Add other data you want to send
            },
            success: function(response) {
                console.log('Data stored successfully:', response);
                // Redirect to your desired page if needed
                window.location.href = '/pesanan'; // Change the URL accordingly
            },
            error: function(error) {
                console.error('Error storing data:', error);
            }
        });
    } else {
        console.log('Hiding canceled for Meja ' + meja);
    }
}

function hideMeja(meja) {
    $('.card').filter(':contains("Meja ' + meja + '")').hide();
}

function storeHiddenMeja(meja) {
    // Get existing hidden Meja IDs from local storage
    var hiddenMejas = JSON.parse(localStorage.getItem('hiddenMejas')) || [];
    
    // Add the current Meja to the array
    hiddenMejas.push(meja);
    
    // Save the updated array back to local storage
    localStorage.setItem('hiddenMejas', JSON.stringify(hiddenMejas));
}

function clearHiddenMejas() {
    // Clear the hidden Mejas from local storage
    localStorage.removeItem('hiddenMejas');
    location.reload();
}

// Check and hide Mejas on page load
function checkAndHideMejas() {
    var hiddenMejas = JSON.parse(localStorage.getItem('hiddenMejas')) || [];

    hiddenMejas.forEach(function (meja) {
        hideMeja(meja);
    });
}

// Call the function on page load
checkAndHideMejas();

function showStruk()
    {
        $struk = include(public_path('struk.php'));
        return view('struk', compact('struk'));
    }

function removeMenuItem(button, itemPrice, menuId) {
    // Update total harga input when deleting an item
    var currentTotal = parseFloat($('#total_harga').val()) || 0;
    $('#total_harga').val(currentTotal - itemPrice);
    
    // Remove the item from the menuItems array
    menuItems = menuItems.filter(item => item.id != menuId);
    
    // Hapus elemen li yang berisi tombol Delete yang diklik
    $(button).closest('li').remove();
}

function formatCurrency(value) {
    // Format value with dot as a thousand separator
    return value.toLocaleString('id-ID');
}

function confirmDelete(itemId) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        // If the user clicks "OK" in the confirmation dialog, redirect to the delete URL
        window.location.href = "hapus-makanan/" + itemId;
    }
    // If the user clicks "Cancel," do nothing
}