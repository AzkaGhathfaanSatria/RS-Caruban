<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | RS Caruban</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-5xl mx-auto flex flex-col items-center justify-center min-h-screen px-4">

    <header class="text-center mb-6">
        <img src="RS Caruban.png" class="w-28 mx-auto mb-2">
        <h1 class="text-2xl font-bold">Register</h1>
    </header>

    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-lg font-semibold mb-4 text-center">Daftar Akun</h2>

        <form method="POST" action="proses_register.php">

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" required class="w-full border p-2 rounded mt-1">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" required class="w-full border p-2 rounded mt-1">
            </div>

            <div class="mb-3">
                <label>NIK</label>
                <input type="text" name="nik" required class="w-full border p-2 rounded mt-1">
            </div>

            <div class="mb-3">
                <label>No HP</label>
                <input type="text" name="no_hp" required class="w-full border p-2 rounded mt-1">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" required class="w-full border p-2 rounded mt-1"></textarea>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" required class="w-full border p-2 rounded mt-1">
            </div>

            <button class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-600">
                DAFTAR
            </button>
        </form>

        <p class="text-center text-sm mt-3">
            Sudah punya akun?
            <a href="login.php" class="text-blue-500">Login</a>
        </p>

    </div>
</div>

</body>
</html>