<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | RS Caruban</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex flex-col justify-between">

<div class="flex justify-center items-center flex-grow">

<div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">

    <div class="text-center mb-6">
        <img src="RS Caruban.png" class="w-20 mx-auto mb-2">
        <h1 class="text-2xl font-bold text-gray-700">Login RS Caruban</h1>
        <p class="text-sm text-gray-500">Silakan masuk ke akun anda</p>
    </div>

    <form method="POST" action="proses_login.php" class="space-y-4">

        <input type="email" name="email" placeholder="Email"
        class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-400">

        <input type="text" name="nik" placeholder="NIK"
        class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-400">

        <input type="password" name="password" placeholder="Password"
        class="w-full border p-3 rounded-lg focus:ring-2 focus:ring-blue-400">

        <button class="w-full bg-blue-500 text-white p-3 rounded-lg hover:bg-blue-600 transition">
            Login
        </button>

    </form>

    <!-- LINK REGISTER -->
    <p class="text-center text-sm mt-4">
        Belum punya akun?
        <a href="register.php" class="text-blue-500 font-semibold hover:underline">
            Daftar di sini
        </a>
    </p>

</div>
</div>

<!-- FOOTER -->
<footer class="bg-gray-200 text-center p-4 mt-10">
    <p>📍 Caruban, Jawa Timur</p>
    <p>📞 021-912007 | 💬 WhatsApp: 0812-2345-6789</p>
    <p>© 2026 RS Caruban. All Rights Reserved.</p>
</footer>

</body>
</html>