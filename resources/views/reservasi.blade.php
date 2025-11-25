<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservasi Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />

    <style>
        body { background-color: rgb(240, 238, 230); }
        .card { background-color: #fff; border: 2px solid #af9c5e; }
        .title { color: #352b06; }
        .label-text { color: #352b06; }
        .submit-btn { background-color: #af9c5e; }
        .submit-btn:hover { background-color: #352b06; }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

    <div class="absolute top-4 right-4">
        <form action="/logout" method="POST">
            @csrf
            <button
                type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition"
            >
                Logout
            </button>
        </form>
    </div>

    <div class="card shadow-lg rounded-2xl p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6 title">Reservasi</h2>

        <form class="space-y-4">
            <div>
                <label class="block mb-1 font-medium label-text">Nama Pemesan</label>
                <input type="text" class="w-full p-2 border rounded-lg" placeholder="Masukkan nama anda" />
            </div>

            <div>
                <label class="block mb-1 font-medium label-text">Nomor HP</label>
                <input type="text" class="w-full p-2 border rounded-lg" placeholder="08xxxxxxxxxx" />
            </div>

            <div>
                <label class="block mb-1 font-medium label-text">Tanggal Reservasi</label>
                <input type="date" class="w-full p-2 border rounded-lg" />
            </div>

            <div>
                <label class="block mb-1 font-medium label-text">Waktu</label>
                <input type="time" class="w-full p-2 border rounded-lg" />
            </div>

            <div>
                <label class="block mb-1 font-medium label-text">Jumlah Orang</label>
                <input type="number" min="1" class="w-full p-2 border rounded-lg" placeholder="Jumlah tamu" />
            </div>

            <div>
                <label class="block mb-1 font-medium label-text">Pilih Area</label>
                <select class="w-full p-2 border rounded-lg">
                    <option>Indoor</option>
                    <option>Outdoor</option>
                    <option>VIP Room</option>
                </select>
            </div>

            <button type="submit" class="w-full submit-btn text-white py-2 rounded-xl transition">Pesan Sekarang</button>
        </form>
    </div>
</body>
</html>
