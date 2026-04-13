<?php
session_start();

// ngecek user harus login dulu
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Pasien</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen flex flex-col">

<div class="max-w-3xl mx-auto p-6 w-full flex-1">

    <!-- card form -->
    <div class="bg-white border rounded-2xl shadow-sm p-8">

        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Form Pendaftaran Pasien
        </h1>

        <!-- form kirim ke proses_pendaftaran -->
        <form method="POST" action="proses_pendaftaran.php" class="space-y-5">

            <!-- input nama -->
            <div>
                <label class="text-sm text-gray-600">Nama Lengkap</label>
                <input type="text" name="nama" required
                placeholder="Masukkan nama lengkap"
                class="w-full border border-gray-200 p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- input nik -->
            <div>
                <label class="text-sm text-gray-600">NIK</label>
                <input type="text" name="nik" required
                placeholder="16 digit NIK"
                class="w-full border border-gray-200 p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- input no hp -->
            <div>
                <label class="text-sm text-gray-600">No HP</label>
                <input type="text" name="no_hp" required
                placeholder="Contoh: 0812xxxx"
                class="w-full border border-gray-200 p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>

            <!-- pilih poli -->
            <div>
                <label class="text-sm text-gray-600">Poli</label>
                <select name="poli" required
                class="w-full border border-gray-200 p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">Pilih Poli</option>
                    <option>Poli Umum</option>
                    <option>Poli Gigi</option>
                    <option>Poli Anak</option>
                </select>
            </div>

            <!-- pilih dokter -->
            <div>
                <label class="text-sm text-gray-600">Dokter</label>
                <select name="dokter" required
                class="w-full border border-gray-200 p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="">Pilih Dokter</option>
                    <option>Dr. Dante</option>
                    <option>Dr. Vergil</option>
                    <option>Dr. Nero</option>
                </select>
            </div>

            <!-- tombol submit -->
            <button class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition shadow-sm">
                Daftar Sekarang
            </button>

        </form>

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