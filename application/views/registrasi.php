<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - BikePath</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; }
        body { background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .register-container { background-color: #ffffff; padding: 2.5rem; border-radius: 1.5rem; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2); width: 100%; max-width: 420px; }
        .header { margin-bottom: 2rem; text-align: center; }
        .header h3 { font-size: 1.75rem; color: #1f2937; margin-bottom: 0.5rem; }
        .header p { color: #6b7280; font-size: 0.9rem; line-height: 1.5; }
        .form-group { margin-bottom: 1.25rem; }
        .form-group label { display: block; margin-bottom: 0.5rem; font-size: 0.875rem; font-weight: 600; color: #374151; }
        .form-group input { width: 100%; padding: 0.75rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; outline: none; transition: all 0.2s; }
        .form-group input:focus { border-color: #10b981; box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1); }
        .btn-register { width: 100%; padding: 0.875rem; background-color: #10b981; color: white; border: none; border-radius: 0.5rem; font-weight: 600; font-size: 1rem; cursor: pointer; transition: background-color 0.2s; margin-top: 0.5rem; }
        .btn-register:hover { background-color: #059669; }
        .footer { margin-top: 1.5rem; text-align: center; font-size: 0.875rem; color: #4b5563; }
        .footer a { color: #10b981; text-decoration: none; font-weight: 700; }
        .footer a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="header">
            <h3>Daftar Akun</h3>
            <p>Bergabunglah dengan BikePath untuk menjelajahi rute bersepeda terbaik.</p>
        </div>
        <form action="<?= site_url('auth/register_aksi') ?>" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Contoh: goweser_sejati" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="nama@email.com" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" required>
            </div>
            <button type="submit" name="signup" class="btn-register">Daftar Sekarang</button>
        </form>
        <div class="footer">
            <p>Sudah punya akun? <a href="<?= site_url('auth') ?>">Login di sini</a></p>
        </div>
    </div>
</body>
</html>