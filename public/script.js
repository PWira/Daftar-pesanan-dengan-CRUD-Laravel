// Create a global array to store selected menu items and quantities
var menuData = [];

function showQuantityInput() {
    // Dapatkan elemen select menuItems
    var menuItemsSelect = document.getElementById("menuItem");

    // Dapatkan div untuk menampilkan input jumlah
    var quantityInputsDiv = document.getElementById("quantityInputs");

    // Bersihkan div setiap kali ada perubahan pada select menuItems
    quantityInputsDiv.innerHTML = "";

    // Iterasi melalui opsi yang dipilih
    for (var i = 0; i < menuItemsSelect.selectedOptions.length; i++) {
        var menuItem = menuItemsSelect.selectedOptions[i].value;

        // Tampilkan label untuk setiap opsi
        var label = document.createElement("label");
        label.textContent = "Jumlah " + menuItem + ":";

        // Tampilkan input jumlah untuk setiap opsi
        var input = document.createElement("input");
        input.type = "number";
        input.name = "quantity-" + menuItem;
        input.required = true;

        // Tambahkan label dan input ke div
        quantityInputsDiv.appendChild(label);
        quantityInputsDiv.appendChild(input);

        // Tambahkan data ke array
        menuData.push({
            menu: menuItem,  // Assuming the name of the menu field in the database is 'menu'
            quantity: input.value
        });
    }
}