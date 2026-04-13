<?php
session_start();
include 'koneksi.php';

// ngecek user harus login dulu
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

$email = $_SESSION['email'];

// ambil data berdasarkan email user, urut terbaru di atas
$query = mysqli_query($conn, "SELECT * FROM pasien WHERE email='$email' ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pendaftaran</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-gray-100 to-slate-200 min-h-screen flex flex-col">

<!-- navbar -->
<nav class="bg-white border-b shadow-sm mb-6">
    <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
        
        <h1 class="font-semibold text-blue-600">RS Caruban</h1>

        <!-- balik ke dashboard -->
        <a href="dashboard.php" class="text-sm text-gray-600 hover:text-blue-500 transition">
            Dashboard
        </a>
    </div>
</nav>

<div class="max-w-6xl mx-auto p-4 w-full flex-1">

    <div class="bg-white border rounded-2xl shadow-sm p-6">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">
            Riwayat Pendaftaran
        </h2>

        <!-- kalau belum ada data -->
        <?php if (mysqli_num_rows($query) == 0) { ?>
            <p class="text-gray-500 text-sm">
                Belum ada data pendaftaran.
            </p>
        <?php } else { ?>

        <!-- tabel data -->
        <div class="overflow-x-auto">
            <table class="w-full text-sm">

                <!-- header tabel -->
                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="px-4 py-3 text-left">Nama</th>
                        <th class="px-4 py-3 text-left">NIK</th>
                        <th class="px-4 py-3 text-left">No HP</th>
                        <th class="px-4 py-3 text-left">Poli</th>
                        <th class="px-4 py-3 text-left">Dokter</th>
                        <th class="px-4 py-3 text-left">Tanggal</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr class="hover:bg-gray-50 transition">

                        <!-- nampilin data dari database -->
                        <td class="px-4 py-3"><?php echo $data['nama']; ?></td>
                        <td class="px-4 py-3"><?php echo $data['nik']; ?></td>
                        <td class="px-4 py-3"><?php echo $data['no_hp']; ?></td>
                        <td class="px-4 py-3"><?php echo $data['poli']; ?></td>
                        <td class="px-4 py-3"><?php echo $data['dokter']; ?></td>
                        <td class="px-4 py-3 text-gray-500"><?php echo $data['tanggal']; ?></td>

                    </tr>
                <?php } ?>

                </tbody>

            </table>
        </div>

        <?php } ?>

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