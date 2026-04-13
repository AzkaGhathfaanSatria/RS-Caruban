<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rumah Sakit Caruban</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-green-50">

<div class="min-h-screen flex flex-col">

    <!-- navbar buat navigasi ke login & register -->
    <nav class="flex justify-between items-center px-8 py-4 bg-white shadow-sm">
        
        <!-- logo + nama web -->
        <div class="flex items-center gap-3">
            <img src="RS Caruban.png" class="w-10">
            <h1 class="font-semibold text-gray-800">RS Caruban</h1>
        </div>

        <!-- tombol masuk & daftar -->
        <div class="space-x-3">
            <a href="login.php">
                <button class="px-4 py-2 text-blue-600 hover:text-blue-800">
                    Login
                </button>
            </a>

            <a href="register.php">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Daftar
                </button>
            </a>
        </div>
    </nav>

    <main class="flex flex-col md:flex-row items-center justify-between flex-1 px-8 py-12 max-w-6xl mx-auto w-full">

        <div class="max-w-xl">
            <h2 class="text-4xl font-bold text-gray-800 leading-tight mb-4">
                Layanan Rumah Sakit <br>
                Lebih Mudah & Cepat
            </h2>

            <p class="text-gray-600 mb-6">
                Daftar pasien, cek riwayat, dan akses layanan kesehatan 
                langsung dari rumah tanpa perlu antri lama.
            </p>

            <div class="flex gap-4">
                <a href="login.php">
                    <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition shadow">
                        Mulai Sekarang
                    </button>
                </a>

                <a href="register.php">
                    <button class="border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-100 transition">
                        Buat Akun
                    </button>
                </a>
            </div>
        </div>

        <div class="mt-10 md:mt-0">
            <img src="RS Caruban.png" class="w-60 mx-auto drop-shadow-xl">
        </div>

    </main>

    <!-- fitur singkat biar user tau kegunaan web -->
    <section class="bg-white py-10">
        <div class="max-w-6xl mx-auto px-8 grid md:grid-cols-3 gap-6">

            <div class="p-5 rounded-xl border shadow-sm hover:shadow-md transition">
                <h3 class="font-semibold text-blue-600 mb-2">
                    Pendaftaran Online
                </h3>
                <p class="text-gray-600 text-sm">
                    Daftar tanpa harus datang langsung ke rumah sakit.
                </p>
            </div>

            <div class="p-5 rounded-xl border shadow-sm hover:shadow-md transition">
                <h3 class="font-semibold text-green-600 mb-2">
                    Riwayat Pasien
                </h3>
                <p class="text-gray-600 text-sm">
                    Lihat riwayat pendaftaran dengan mudah.
                </p>
            </div>

            <div class="p-5 rounded-xl border shadow-sm hover:shadow-md transition">
                <h3 class="font-semibold text-red-500 mb-2">
                    Akses Cepat
                </h3>
                <p class="text-gray-600 text-sm">
                    Sistem cepat dan praktis untuk semua pengguna.
                </p>
            </div>

        </div>
    </section>

    <!-- footer info kontak -->
    <footer class="bg-white border-t text-center p-4">
        <p class="text-gray-600 text-sm">Caruban, Jawa Timur</p>
        <p class="text-gray-600 text-sm">021-912007 | WhatsApp: 0812-2345-6789</p>
        <p class="text-gray-400 text-xs mt-1">© 2026 RS Caruban</p>
    </footer>

</div>

</body>
</html>
