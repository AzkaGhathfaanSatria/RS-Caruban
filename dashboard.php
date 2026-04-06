<?php
session_start();

// cek login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | RS Caruban</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto flex flex-col items-center min-h-screen px-4">

    <!-- HEADER -->
    <header class="text-center mt-6 mb-8">
        <img src="RS Caruban.png" alt="Logo RS" class="w-28 mx-auto mb-3">
        <h1 class="text-2xl font-bold">
            Selamat Datang di Halaman Resmi Rumah Sakit Caruban
        </h1>

        <!-- NAMA USER -->
        <p class="text-gray-600 mt-2">
            Halo, <span class="font-semibold"><?php echo $_SESSION['nama']; ?></span>
        </p>
    </header>

    <!-- CARD MENU -->
    <div class="bg-white p-8 rounded-lg shadow-md text-center w-full max-w-md">
        <h2 class="text-xl font-semibold mb-6">
            Sistem RS Caruban
        </h2>

        <div class="space-y-4">

            <a href="PendaftaranPasienOnline.html">
                <button class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                    Pendaftaran Pasien
                </button>
            </a>

            <a href="tentangrs.html">
                <button class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">
                    Tentang Rumah Sakit Caruban
                </button>
            </a>

            <a href="logout.php">
                <button class="w-full bg-red-500 text-white p-2 rounded hover:bg-red-600">
                    Logout
                </button>
            </a>

        </div>
    </div>

    <!-- FOOTER -->
    <div class="bg-gray-200 text-center p-4 mt-10 w-full">
        <footer>
            <p>📍 Caruban, Jawa Timur</p>
            <p>📞 021-912007 | 💬 WhatsApp: 0812-2345-6789</p>
            <p>© 2026 RS Caruban. All Rights Reserved.</p>
        </footer>
    </div>

</div>

</body>
</html>