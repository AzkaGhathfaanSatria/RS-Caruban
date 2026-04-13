<?php
session_start();
include 'koneksi.php';

// ngecek user login dan harus admin, kalau bukan langsung dilempar ke login
if (!isset($_SESSION['login']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit;
}

// ngitung jumlah data user, admin, sama user biasa
$total_user = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user"));
$total_admin = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role='admin'"));
$total_user_biasa = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE role='user'"));

// ambil semua data user buat ditampilin
$data_user = mysqli_query($conn, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-slate-100 via-gray-100 to-slate-200 min-h-screen">

<div class="max-w-7xl mx-auto p-6">

    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Admin Dashboard</h1>
            <p class="text-sm text-gray-500">Kelola data user sistem</p>
        </div>

        <!-- tombol logout buat keluar dari sistem -->
        <a href="logout.php">
            <button class="bg-gray-900 text-white px-5 py-2.5 rounded-lg hover:bg-black transition shadow-sm">
                Logout
            </button>
        </a>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-10">

        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md transition">
            <p class="text-sm text-gray-500">Total User</p>
            <p class="text-3xl font-bold text-blue-600"><?php echo $total_user; ?></p>
        </div>

        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md transition">
            <p class="text-sm text-gray-500">User Biasa</p>
            <p class="text-3xl font-bold text-green-600"><?php echo $total_user_biasa; ?></p>
        </div>

        <div class="bg-white border rounded-2xl p-6 shadow-sm hover:shadow-md transition">
            <p class="text-sm text-gray-500">Admin</p>
            <p class="text-3xl font-bold text-red-500"><?php echo $total_admin; ?></p>
        </div>

    </div>

    <!-- bagian atas tabel + tombol tambah admin -->
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg font-semibold text-gray-700">Data User</h2>

        <!-- pindah ke halaman buat nambah admin -->
        <a href="tambah_admin.php">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition shadow-sm">
                + Tambah Admin
            </button>
        </a>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">

        <div class="overflow-x-auto">
            <table class="w-full text-sm">

                <thead class="bg-gray-50 text-gray-600">
                    <tr>
                        <th class="px-6 py-3 text-left">Email</th>
                        <th class="px-6 py-3 text-left">NIK</th>
                        <th class="px-6 py-3 text-left">Role</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>

                <tbody class="divide-y">

                <?php while ($u = mysqli_fetch_assoc($data_user)) { ?>
                    <tr class="hover:bg-gray-50 transition">

                        <!-- nampilin data dari database -->
                        <td class="px-6 py-4"><?php echo $u['email']; ?></td>
                        <td class="px-6 py-4"><?php echo $u['nik']; ?></td>

                        <!-- ngecek role biar tampil beda (admin merah, user hijau) -->
                        <td class="px-6 py-4">
                            <?php if ($u['role'] == 'admin') { ?>
                                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs">
                                    Admin
                                </span>
                            <?php } else { ?>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs">
                                    User
                                </span>
                            <?php } ?>
                        </td>

                        <td class="px-6 py-4 text-center space-x-2">

                            <!-- kirim id ke hapus_user buat hapus data -->
                            <a href="hapus_user.php?id=<?php echo $u['id']; ?>"
                            onclick="return confirm('Yakin hapus user?')">
                                <button class="bg-red-500 text-white px-3 py-1.5 rounded-md hover:bg-red-600 transition text-xs">
                                    Hapus
                                </button>
                            </a>

                            <!-- kirim id ke ubah_role buat ganti role -->
                            <a href="ubah_role.php?id=<?php echo $u['id']; ?>">
                                <button class="bg-yellow-400 text-white px-3 py-1.5 rounded-md hover:bg-yellow-500 transition text-xs">
                                    Ubah Role
                                </button>
                            </a>

                        </td>

                    </tr>
                <?php } ?>

                </tbody>

            </table>
        </div>

    </div>

</div>

</body>
</html>