<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BikePath</title>
    <style>
        /* Reset Dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            /* Background disamakan dengan desain input data */
            background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Menggunakan 100vh agar pas di layar */
        }

        /* Container Kartu Login */
        .login-card {
            background-color: #ffffff;
            padding: 2.5rem; /* Sedikit lebih luas */
            border-radius: 1.5rem; /* Lebih membulat agar modern */
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.2); /* Shadow lebih dalam agar menonjol */
            width: 100%;
            max-width: 400px;
        }

        .header {
            margin-bottom: 1.5rem;
            text-align: center; /* Judul dibuat ke tengah */
        }

        .header h3 {
            font-size: 1.75rem;
            font-weight: bold;
            color: #1f2937;
        }

        .header p {
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 0.5rem;
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        label {
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
        }

        input {
            width: 100%;
            border: 2px solid #e5e7eb; /* Border sedikit lebih tebal */
            border-radius: 0.75rem;
            padding: 0.75rem;
            font-size: 1rem;
            transition: all 0.3s;
            outline: none;
        }

        input:focus {
            border-color: #10b981; /* Focus warna hijau agar senada background */
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        /* Tombol */
        button {
            background-color: #10b981; /* Tombol warna hijau agar senada */
            color: #ffffff;
            font-weight: bold;
            padding: 0.875rem;
            border: none;
            border-radius: 0.75rem;
            margin-top: 0.5rem;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
        }

        button:hover {
            background-color: #059669; /* Hijau lebih gelap saat hover */
            transform: translateY(-2px);
        }

        button:active {
            transform: scale(0.98);
        }

        /* Footer */
        .footer {
            margin-top: 1.5rem;
            padding-top: 1.25rem;
            border-top: 1px solid #f3f4f6;
            text-align: center;
        }

        .footer p {
            font-size: 0.875rem;
            color: #4b5563;
        }

        .footer a {
            font-weight: bold;
            color: #10b981; /* Link warna hijau */
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-card">

        <div class="header">
            <h3>Sign In</h3>
            <p>Selamat datang! Silakan masuk ke akun BikePath Anda.</p>
        </div>

        <form action="login_proses.php" method="post">
            
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="nama@email.com" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>

            <button type="submit" name="login">Masuk ke BikePath</button>
        </form>

        <div class="footer">
            <p>Belum punya akun? 
                <a href="registrasi.php">Daftar di sini</a>
            </p>
        </div>
    </div>
</body>
</html>