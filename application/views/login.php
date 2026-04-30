<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BikePath</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .login-card { background-color: #ffffff; padding: 2.5rem; border-radius: 1.5rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2); width: 100%; max-width: 400px; }
        .header { text-align: center; margin-bottom: 2rem; }
        .header h3 { font-size: 1.5rem; color: #111827; margin-bottom: 0.5rem; }
        .header p { color: #6b7280; font-size: 0.875rem; }
        .input-group { margin-bottom: 1.25rem; }
        .input-group label { display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 600; color: #374151; }
        .input-group input { width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; outline: none; transition: border-color 0.2s; }
        .input-group input:focus { border-color: #10b981; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1); }
        .btn-login { width: 100%; padding: 0.75rem; background-color: #10b981; color: white; border: none; border-radius: 0.5rem; font-weight: 600; font-size: 1rem; cursor: pointer; transition: background-color 0.2s; margin-top: 1rem; }
        .btn-login:hover { background-color: #059669; }
        .footer { margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid #f3f4f6; text-align: center; }
        .footer p { font-size: 0.875rem; color: #4b5563; }
        .footer a { font-weight: bold; color: #10b981; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="header">
            <h3>Sign In</h3>
            <p>Selamat datang! Silakan masuk ke akun BikePath Anda.</p>
        </div>
        <form action="<?= site_url('bikepath/proses_login') ?>" method="post">
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="nama@email.com" required>
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" name="login" class="btn-login">Masuk</button>
        </form>
        <div class="footer">
            <p>Belum punya akun? <a href="<?= site_url('bikepath/registrasi') ?>"></a>
        </div>
    </div>
</body>
</html>