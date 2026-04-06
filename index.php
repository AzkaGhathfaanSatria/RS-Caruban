<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Caruban</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-between">

        <!-- HEADER -->
        <header class="text-center mt-10">
            <img src="RS Caruban.png" class="w-28 mx-auto mb-4">
            <h1 class="text-3xl font-bold text-gray-800">
                Rumah Sakit Caruban
            </h1>
            <p class="text-gray-600 mt-2">
                Sistem Informasi Pelayanan Pasien Online
            </p>
        </header>

        <!-- HERO -->
        <main class="flex flex-col items-center text-center px-4">

            <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full mt-8">
                <h2 class="text-xl font-semibold mb-4">
                    Selamat Datang 👋
                </h2>

                <p class="text-gray-600 mb-6">
                    Silakan login atau daftar untuk mengakses layanan rumah sakit.
                </p>

                <div class="space-y-3">

                    <a href="login.php">
                        <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                            Login
                        </button>
                    </a>

                    <a href="register.php">
                        <button class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">
                            Registrasi
                        </button>
                    </a>

                </div>
            </div>

        </main>

        <!-- FOOTER -->
        <footer class="bg-gray-200 text-center p-4 mt-10">
            <p>📍 Caruban, Jawa Timur</p>
            <p>📞 021-912007 | 💬 WhatsApp: 0812-2345-6789</p>
            <p>© 2026 RS Caruban. All Rights Reserved.</p>
        </footer>

    </div>

</body>
</html>