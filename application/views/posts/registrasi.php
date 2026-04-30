<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - BikePath</title>
    <style>
        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            /* Background gradasi disamakan dengan desain BikePath lainnya */
            background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container Utama */
        .register-container {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
        }

        .header {
            margin-bottom: 2rem;
            text-align: center;
        }

        .header h3 {
            font-size: 1.75rem;
            font-weight: 700;
            color: #111827;
        }

        .header p {
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 0.5rem;
        }

        /* Form & Input */
        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.5rem;
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        input:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        /* Tombol Submit */
        .btn-register {
            width: 100%;
            background-color: #10b981; /* Hijau BikePath */
            color: #ffffff;
            font-size: 1rem;
            font-weight: 700;
            padding: 0.875rem;
            border: none;
            border-radius: 0.875rem;
            cursor: pointer;
            margin-top: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .btn-register:hover {
            background-color: #059669;
            transform: translateY(-2px);
        }

        .btn-register:active {
            transform: scale(0.97);
        }

        /* Footer */
        .footer {
            margin-top: 2rem;
            padding-top: 1.25rem;
            border-top: 1px solid #f3f4f6;
            text-align: center;
            font-size: 0.875rem;
            color: #4b5563;
        }

        .footer a {
            color: #10b981;
            text-decoration: none;
            font-weight: 700;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        
        <div class="header">
            <h3>Daftar Akun</h3>
            <p>Bergabunglah dengan BikePath untuk menjelajahi rute bersepeda terbaik.</p>
        </div>

        <form action="register_process.php" method="post">

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

            <button type="submit" name="signup" class="btn-register">
                Daftar Sekarang
            </button>
        </form>

        <div class="footer">
            <p>Sudah punya akun? 
                <a href="login.php">Masuk di sini</a>
            </p>
        </div>
    </div>
</body>
</html>