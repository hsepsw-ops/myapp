<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tambang Theme</title>
    <style>
        body {
            background: linear-gradient(135deg, #2c1810, #1a1a1a);
            color: #f5f5f5;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        h1 {
            font-size: 2em;
            text-shadow: 2px 2px 4px #000;
            color: #d4af37;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px 0;
            padding: 10px;
            border: 2px solid #d4af37;
            border-radius: 5px;
            background: #333;
            color: #f5f5f5;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background: #d4af37;
            color: #2c1810;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s;
        }
        button:hover {
            background: #b8860b;
        }
        .error {
            color: #ff6b6b;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login Portal</h1>
        <?php if(session('error')): ?>
            <p class="error"><?php echo e(session('error')); ?></p>
        <?php endif; ?>
        <form method="POST" action="/login">
            <?php echo csrf_field(); ?>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Username: admin<br>Password: password</p>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\myapp\resources\views/login.blade.php ENDPATH**/ ?>