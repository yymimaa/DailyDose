<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DailyDose</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div style="position:absolute; top:20px; right:20px;">
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">Logout</button>
        </form>
    </div>

    <div class="bungkus">
        <h1> MENU </h1>
        <p>checkout your favorite Menu</p>
        <div id="pencarian">
            <input type="search" id="searching" placeholder="search name of product...">
            <button id="search">Search</button>
        </div>
        <div id="tombol">
            <button class="button-value" onclick="filterProduct('all')">All</button>
            <button class="button-value" onclick="filterProduct('Cake')">Cake</button>
            <button class="button-value" onclick="filterProduct('Icecream')">IceCream</button>
            <button class="button-value" onclick="filterProduct('Pancake')">Pancake</button>
            <button class="button-value" onclick="filterProduct('Pastry')">Pastry</button>

        </div>
        <div id="products"></div>
    </div>

    <div id="checkout-popup" class="popup">
        <h2>Keranjang</h2>
        <ul id="checkout-list"></ul>
        <h3 id="checkout-total">Total: RP 0</h3>
        <button id="close-popup">Tutup</button>
    </div>



    <script>
    let product = {
        data: [
        {
            namaProduct: "Chocolate Cranberry Mini Cake",
            category: "Cake",
            harga: " 86.000",
            gambar: "{{asset ('img/ChocolateCranberryMiniCakes.jpg') }}",
        },
        {
            namaProduct: "Brownie Fudge Swirl Ice Cream",
            category: "Icecream",
            harga: " 95.000",
            gambar: "{{ asset('img/browniefudgeswirlicecream.jpg')}}",
        },
        {
            namaProduct: "PufF Pastry Fruit Tarts",
            category: "Pastry",
            harga: " 75.000",
            gambar: "{{ asset ('img/puffpastryfruittarts.jpg') }}",
        },
        {
            namaProduct: "Mini Gluten Cheesecake",
            category: "Cake",
            harga: " 70.000",
            gambar: "{{asset ('img/MinjGlutenCheeseCake.jpg') }}",
        },
        {
            namaProduct: "Greek Yoghurt Chocolate Pancakes",
            category: "Pancake",
            harga: " 87.000",
            gambar: "{{ asset ('img/greekyoghurtchocolatepancake.jpg') }}",
        },
        {
            namaProduct: "Chai Spiced Ice Cream Parfait",
            category: "Icecream",
            harga: " 90.000",
            gambar: "{{ asset ('img/chaispicedicecreamparfait.jpg') }}",
        },
        {
            namaProduct: "Raspberry Choux au Craquelin",
            category: "Pastry",
            harga: " 83.000",
            gambar: "{{ asset ('img/Raspberry Choux au Craquelin.jpg') }}",
        },
        {
            namaProduct: "Raspberry Pistacio Eton Mess",
            category: "Icecream",
            harga: " 95.000",
            gambar: "{{ asset ('img/Raspberry Pistacio Eton Mess.jpg')}}",
        },
        {
            namaProduct: "Classy Fluffy Pancakes",
            category: "Pancake",
            harga: " 80.000",
            gambar: "{{ asset ('img/classyfluffypancakes.jpg')}}",
        },
        {
            namaProduct: "No-Churn Oreo Ice Cream",
            category: "Icecream",
            harga: " 10.000",
            gambar: "{{ asset ('img/nochurnoreoicecream.jpg')}}",
        },
        {
            namaProduct: "Fluffy Japanese Pancakes",
            category: "Pancake",
            harga: " 80.000",
            gambar: "{{ asset ('img/Fluffy Japanese Pancakes.jpg')}}",
        },
        {
            namaProduct: "Ice Cream Cookie Sandwich",
            category: "Icecream",
            harga: " 98.000",
            gambar: "{{ asset ('img/icecreamcookiwsandwich.jpg')}}",
        },
    ],
    };
    </script>
    <script src="{{asset('script.js')}}"></script>
</body>
</html>
