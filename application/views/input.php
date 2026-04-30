<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data - BikePath</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; }
        .form-card { background: white; padding: 40px; border-radius: 20px; width: 100%; max-width: 500px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.2); }
        h2 { color: #1e293b; margin-bottom: 25px; text-align: center; font-weight: 700; }
        .group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 8px; color: #475569; font-weight: 600; font-size: 0.9rem; }
        input[type="text"], input[type="number"], textarea { width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 10px; outline: none; transition: border-color 0.3s ease; }
        input[type="text"]:focus, input[type="number"]:focus, textarea:focus { border-color: #3b82f6; }
        input[type="file"] { width: 100%; padding: 10px; background: #f8fafc; border: 2px dashed #cbd5e1; border-radius: 10px; cursor: pointer; }
        .btn-submit { width: 100%; padding: 14px; background: #10b981; color: white; border: none; border-radius: 10px; font-weight: bold; font-size: 1rem; cursor: pointer; transition: background 0.3s ease; margin-top: 10px; }
        .btn-submit:hover { background: #059669; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #64748b; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>Tambah Jalur Baru</h2>
        <form action="<?= site_url('jalur/simpan') ?>" method="POST" enctype="multipart/form-data">
            <div class="group">
                <label>Nama Jalur</label>
                <input type="text" name="nama_jalur" placeholder="Masukkan nama jalur..." required>
            </div>
            <div class="group">
                <label>Lokasi</label>
                <input type="text" name="lokasi" placeholder="Masukkan lokasi..." required>
            </div>
            <div class="group">
                <label>Panjang (km)</label>
                <input type="number" name="panjang" placeholder="Masukkan panjang jalur..." required>
            </div>
            <div class="group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="3" placeholder="Ceritakan medannya..." required></textarea>
            </div>
            <div class="group">
                <label>Foto Rute</label>
                <input type="file" name="foto">
            </div>
            <button type="submit" class="btn-submit">SIMPAN DATA</button>
            <a href="<?= site_url('jalur') ?>" class="back-link">← Kembali ke Dashboard</a>
        </form>
    </div>
</body>
</html>