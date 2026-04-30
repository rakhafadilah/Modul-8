<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Data - BikePath</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        
        body { 
            background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); 
            min-height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            padding: 20px;
        }

        .edit-card { 
            background: white; 
            padding: 40px; 
            border-radius: 20px; 
            width: 100%; 
            max-width: 500px; 
            border-top: 8px solid #059669; 
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.2); 
        }

        /* Mengubah Judul menjadi Hitam */
        h2 { 
            color: #000000; 
            margin-bottom: 25px; 
            text-align: center; 
            font-weight: 800;
        }

        .group { margin-bottom: 20px; }

        /* Mengubah Label (teks di atas input) menjadi Hitam */
        label { 
            display: block; 
            font-weight: bold; 
            margin-bottom: 8px; 
            color: #000000; 
        }
        
        input, textarea { 
            width: 100%; 
            padding: 12px; 
            border: 1px solid #d1d5db; /* Border dibuat sedikit lebih netral */
            border-radius: 10px; 
            background: #ffffff; 
            color: #000000; 
            transition: 0.3s;
            font-size: 1rem;
        }

        input:focus { 
            border-color: #10b981; 
            outline: none; 
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1); 
        }

        .btn-update { 
            background: #059669; 
            color: white; 
            width: 100%; 
            padding: 14px; 
            border: none; 
            border-radius: 10px; 
            font-weight: bold; 
            cursor: pointer; 
            font-size: 1rem;
            transition: 0.3s;
        }

        .btn-update:hover { background: #059669; transform: translateY(-2px); }

        /* Mengubah link kembali menjadi hitam */
        .back-link { 
            display: block; 
            text-align: center; 
            margin-top: 20px; 
            color: #000000; 
            text-decoration: none; 
            font-size: 0.9rem; 
            font-weight: 600;
        }
        
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="edit-card">
        <h2>Update Jalur Sepeda</h2>
        
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="group">
                <label>ID Jalur</label>
                <input type="number" name="id" placeholder="Masukkan ID yang ingin diubah" required>
            </div>

            <div class="group">
                <label>Nama Jalur Baru</label>
                <input type="text" name="nama_jalur" placeholder="Masukkan nama jalur baru..." required>
            </div>

            <div class="group">
                <label>Lokasi Baru</label>
                <input type="text" name="lokasi" placeholder="Masukkan lokasi baru..." required>
            </div>

            <div class="group">
                <label>Panjang Baru (km)</label>
                <input type="number" name="panjang" placeholder="Masukkan panjang baru..." required>
            </div>

            <div class="group">
                <label>Deskripsi Baru</label>
                <textarea name="deskripsi" rows="3" placeholder="Masukkan deskripsi baru..." required></textarea>
            </div>

            <div class="group">
                <label>Foto Baru (Pilih jika ingin ganti)</label>
                <input type="file" name="foto" accept="image/*">
            </div>

            <button type="submit" class="btn-update">UPDATE DATA</button>
            <a href="dashboard.php" class="back-link">← Kembali ke Dashboard</a>
        </form>
    </div>
</body>
</html>