<?php
// admin_login.php
session_start();
if (isset($_POST['username']) && $_POST['username'] === 'admin' && $_POST['password'] === 'admin1234') {
    $_SESSION['admin_logged_in'] = true;
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="flex items-center justify-center h-screen">
        <form action="" method="POST" class="bg-gray-800 p-8 rounded shadow-md space-y-4">
            <h2 class="text-2xl font-bold text-center">Admin Login</h2>
            <input type="text" name="username" placeholder="Usuario" class="w-full px-4 py-2 bg-gray-700 rounded">
            <input type="password" name="password" placeholder="Contraseña" class="w-full px-4 py-2 bg-gray-700 rounded">
            <button type="submit" class="w-full bg-blue-600 py-2 rounded mt-4">Ingresar</button>
        </form>
    </div>
</body>
</html>
