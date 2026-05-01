<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Tambang Theme</title>
    <style>
        body {
            background: linear-gradient(135deg, #2c1810, #1a1a1a);
            color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        h1 {
            font-size: 3em;
            text-shadow: 2px 2px 4px #000;
            color: #d4af37;
            text-align: center;
        }
        p {
            font-size: 1.2em;
            text-align: center;
            margin: 20px 0;
        }
        nav {
            text-align: center;
            margin-top: 50px;
        }
        nav a {
            color: #d4af37;
            text-decoration: none;
            margin: 0 15px;
            padding: 10px 20px;
            border: 2px solid #d4af37;
            border-radius: 5px;
            transition: background 0.3s;
        }
        nav a:hover {
            background: #d4af37;
            color: #2c1810;
        }
    </style>
</head>
<body>
    <h1>Halaman Profil</h1>
    <p>Ini adalah halaman profil saya dengan tema tambang.</p>
    <p>Nama: John Doe</p>
    <p>Email: john@example.com</p>
    <nav>
        <a href="/">Welcome</a> |
        <a href="/home">Home</a> |
        <a href="/profil">Profil</a> |
        <form method="POST" action="/logout" style="display: inline;">
            @csrf
            <button type="submit" style="background: none; border: none; color: #d4af37; cursor: pointer; padding: 10px 20px; border: 2px solid #d4af37; border-radius: 5px; transition: background 0.3s;">Logout</button>
        </form>
    </nav>
</body>
</html>