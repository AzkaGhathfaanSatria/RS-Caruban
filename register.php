<!DOCTYPE html>
<html>
<head>
    <title>Register | RS Caruban</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-green-50 via-white to-green-100 min-h-screen flex flex-col">

<div class="flex justify-center items-center flex-grow">

<div class="bg-white border p-8 rounded-2xl shadow-sm w-full max-w-md">

    <div class="text-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Buat Akun</h1>
        <p class="text-sm text-gray-500">Isi data dengan lengkap</p>
    </div>

    <!-- notif error -->
    <div id="notif" class="hidden text-white text-sm p-3 rounded mb-3"></div>

    <!-- form kirim ke proses_register -->
    <form method="POST" action="proses_register.php" onsubmit="return validasi()" class="space-y-4">

        <!-- email -->
        <input type="email" name="email" id="email" required
        placeholder="Email"
        class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">

        <!-- nama -->
        <input type="text" name="nama" required
        placeholder="Nama Lengkap"
        class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">

        <!-- nik -->
        <input type="text" name="nik" id="nik" required
        placeholder="NIK (16 digit)"
        class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">

        <!-- no hp -->
        <input type="text" name="no_hp" required
        placeholder="No HP"
        class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">

        <!-- alamat -->
        <textarea name="alamat" required
        placeholder="Alamat"
        class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none"></textarea>

        <!-- password -->
        <div class="relative">
            <input type="password" name="password" id="password" required
            placeholder="Password"
            class="w-full border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-green-400 outline-none">

            <!-- toggle show password -->
            <span onclick="togglePassword()"
            class="absolute right-3 top-3 cursor-pointer text-gray-500">
                👁️
            </span>
        </div>

        <!-- role diset hidden biar otomatis user -->
        <input type="hidden" name="role" value="user">

        <button class="w-full bg-green-500 text-white p-3 rounded-lg hover:bg-green-600 transition">
            Daftar
        </button>

    </form>

    <p class="text-center text-sm mt-4">
        Sudah punya akun?
        <a href="login.php" class="text-green-600 font-semibold hover:underline">
            Login
        </a>
    </p>

</div>
</div>

<!-- footer -->
<footer class="bg-white border-t text-center p-4">
    <p class="text-gray-600 text-sm">Caruban, Jawa Timur</p>
    <p class="text-gray-600 text-sm">021-912007 | WhatsApp: 0812-2345-6789</p>
    <p class="text-gray-400 text-xs mt-1">© 2026 RS Caruban</p>
</footer>

<script>
// nampilin notif error
function showNotif(pesan, warna) {
    let notif = document.getElementById("notif");
    notif.className = "text-white text-sm p-3 rounded mb-3 " + warna;
    notif.innerText = pesan;
    notif.classList.remove("hidden");
}

// validasi sebelum kirim
function validasi() {
    let nik = document.getElementById("nik").value;
    let password = document.getElementById("password").value;

    // cek nik harus 16 angka
    if (nik.length !== 16 || isNaN(nik)) {
        showNotif("NIK harus 16 digit angka!", "bg-red-500");
        return false;
    }

    // password minimal 8
    if (password.length < 8) {
        showNotif("Password minimal 8 karakter!", "bg-red-500");
        return false;
    }

    return true;
}

// toggle password
function togglePassword() {
    let pw = document.getElementById("password");
    pw.type = (pw.type === "password") ? "text" : "password";
}
</script>

</body>
</html>