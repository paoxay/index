<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ເຂົ້າສູ່ລະບົບ - Secure Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Lao:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4A90E2;
            --gradient-bg: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --glass-bg: rgba(255, 255, 255, 0.95);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Noto Sans Lao', sans-serif; }

        body {
            background: var(--gradient-bg);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background: var(--glass-bg);
            width: 100%;
            max-width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-card h2 { color: #333; margin-bottom: 30px; font-size: 1.8rem; }

        .form-group { margin-bottom: 20px; text-align: left; }

        .form-group label { display: block; margin-bottom: 8px; color: #666; font-size: 0.9rem; }

        input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 1rem;
        }

        input:focus { border-color: var(--primary-color); }

        button {
            width: 100%;
            padding: 12px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover { background: #357ABD; transform: translateY(-2px); }

        .footer-text { margin-top: 20px; font-size: 0.85rem; color: #888; }
    </style>
</head>
<body>

<div class="login-card">
    <h2>ເຂົ້າສູ່ລະບົບ</h2>
    <form action="auth.php" method="POST">
        <div class="form-group">
            <label>ຊື່ຜູ້ໃຊ້ (Username)</label>
            <input type="text" name="username" placeholder="ໃສ່ຊື່ຜູ້ໃຊ້ຂອງທ່ານ" required>
        </div>
        <div class="form-group">
            <label>ລະຫັດຜ່ານ (Password)</label>
            <input type="password" name="password" placeholder="ໃສ່ລະຫັດຜ່ານ" required>
        </div>
        <button type="submit">ເຂົ້າສູ່ລະບົບ</button>
    </form>
    <div class="footer-text">
        <p>© 2024 ລະບົບຈັດການເວັບໄຊ</p>
    </div>
</div>

</body>
</html>