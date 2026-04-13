<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="bg-white p-6 rounded shadow w-80">

<h2 class="text-lg font-bold mb-4 text-center">Tambah Admin</h2>

<form method="POST" action="proses_tambah_admin.php">

    <input type="email" name="email" placeholder="Email"
    class="w-full border p-2 mb-2">

    <input type="text" name="nik" placeholder="NIK"
    class="w-full border p-2 mb-2">

    <input type="password" name="password" placeholder="Password"
    class="w-full border p-2 mb-3">

    <button class="bg-blue-500 text-white w-full p-2 rounded">
        Tambah
    </button>

</form>

</div>

</body>
</html>