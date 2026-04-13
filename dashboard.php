<?php
session_start();

// ngecek user harus login dan rolenya user
// kalau bukan user, langsung balik ke login
if (!isset($_SESSION['login']) || $_SESSION['role'] != 'user') {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-gray-100 to-slate-200 min-h-screen flex flex-col">

<div class="max-w-6xl mx-auto p-6 w-full flex-1">

    <!-- header user -->
    <div class="bg-white border rounded-2xl p-6 shadow-sm mb-8 flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Dashboard User</h1>

            <!-- nampilin email dari session -->
            <p class="text-gray-500 text-sm mt-1"><?php echo $_SESSION['email']; ?></p>
        </div>

        <!-- tombol logout -->
        <a href="logout.php">
            <button class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition shadow-sm">
                Logout
            </button>
        </a>
    </div>

    <!-- menu utama -->
    <div class="grid md:grid-cols-2 gap-8">

        <!-- card pendaftaran -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
            
            <h2 class="text-lg font-semibold text-gray-800 mb-2">
                Pendaftaran Pasien
            </h2>

            <p class="text-gray-500 text-sm mb-6">
                Daftar untuk mendapatkan layanan tanpa perlu antri lama.
            </p>

            <!-- link ke halaman pendaftaran -->
            <a href="pendaftaran.php">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Daftar Sekarang
                </button>
            </a>
        </div>

        <!-- card riwayat -->
        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md hover:-translate-y-1 transition">
            
            <h2 class="text-lg font-semibold text-gray-800 mb-2">
                Riwayat Pendaftaran
            </h2>

            <p class="text-gray-500 text-sm mb-6">
                Cek data pendaftaran yang pernah kamu lakukan.
            </p>

            <!-- link ke halaman riwayat -->
            <a href="riwayat.php">
                <button class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                    Lihat Riwayat
                </button>
            </a>
        </div>

    </div>

    <!-- info tambahan -->
    <div class="bg-green-50 border border-green-200 p-4 mt-8 rounded-xl">
        <p class="text-sm text-green-700">
            Pastikan data yang dimasukkan sudah benar sebelum dikirim.
        </p>
    </div>

</div>

<!-- footer -->
<footer class="bg-white border-t text-center p-4">
    <p class="text-gray-600 text-sm">Caruban, Jawa Timur</p>
    <p class="text-gray-600 text-sm">021-912007 | WhatsApp: 0812-2345-6789</p>
    <p class="text-gray-400 text-xs mt-1">© 2026 RS Caruban</p>
</footer>

</body>
</html>
