<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | RS Caruban</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto flex flex-col items-center justify-center min-h-screen px-4">

    <!-- HEADER -->
    <header class="text-center mb-6">
        <img src="RS Caruban.png" class="w-28 mx-auto mb-2">
        <h1 class="text-2xl font-bold">Sign in</h1>
    </header>

    <!-- CARD LOGIN -->
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-sm">
        <h2 class="text-lg font-semibold mb-4 text-center">Masukkan akun anda</h2>

        <form method="POST" action="proses_login.php">

            <!-- EMAIL -->
            <div class="mb-3">
                <label class="block text-sm">Email</label>
                <input type="email" name="email" required
                class="w-full border rounded p-2 mt-1">
            </div>

            <!-- NIK -->
            <div class="mb-3">
                <label class="block text-sm">NIK</label>
                <input type="text" name="nik" required
                class="w-full border rounded p-2 mt-1">
            </div>

            <!-- PASSWORD -->
            <div class="mb-4">
                <label class="block text-sm">Password</label>
                <input type="password" name="password" required
                class="w-full border rounded p-2 mt-1">
            </div>

            <!-- BUTTON -->
            <button type="submit"
                class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">
                SIGN IN
            </button>

        </form>

        <!-- LINK REGISTER -->
        <p class="text-center text-sm mt-4">
            Belum punya akun?
            <a href="register.php" class="text-green-500 hover:underline">
                Register
            </a>
        </p>
    </div>

</div>

<!-- FOOTER -->
<div class="bg-gray-200 text-center p-4">
    <footer>
        <p>📍 Caruban, Jawa Timur</p>
        <p>📞 021-912007 | 💬 WhatsApp: 0812-2345-6789</p>
        <p>© 2026 RS Caruban. All Rights Reserved.</p>
    </footer>
</div>

</body>
</html>