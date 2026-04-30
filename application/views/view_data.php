<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Rute - <?php echo htmlspecialchars($data['nama_jalur']); ?></title>
    <style>
        :root {
            --primary: #2c3e50;
            --accent: #3498db;
            --success: #27ae60;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        
        body { 
            background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); 
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container { 
            max-width: 800px; 
            width: 100%;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        }

        .image-container {
            width: 100%;
            height: 400px;
            background: #eee;
            border-radius: 12px;
            margin-bottom: 25px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .no-photo {
            color: #999;
            font-style: italic;
        }

        h1 { color: var(--primary); margin-bottom: 5px; }
        
        .badge-info {
            display: inline-block;
            background: #e1f5fe;
            color: var(--accent);
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }

        .stats {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            padding: 15px;
            background: #f8fafc;
            border-radius: 10px;
        }

        .stat-item b { color: var(--primary); }

        .description {
            line-height: 1.8;
            color: #475569;
            font-size: 1.1rem;
        }

        .footer {
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            padding: 10px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-back {
            background: #64748b;
            color: white;
        }

        .btn-back:hover { background: #475569; }

        .btn-edit {
            background: #f59e0b;
            color: white;
        }

        .btn-edit:hover { background: #d97706; }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="image-container">
            <?php if(!empty($data['foto'])): ?>
                <img src="uploads/<?php echo htmlspecialchars($data['foto']); ?>" alt="Foto Rute">
            <?php else: ?>
                <span class="no-photo">Tidak ada foto yang diunggah</span>
            <?php endif; ?>
        </div>

        <h1><?php echo htmlspecialchars($data['jalur_sepedar']); ?></h1>
        <div class="badge-info">Lokasi: <?php echo htmlspecialchars($data['lokasi']); ?></div>

        <div class="stats">
            <div class="stat-item">
                <b>Panjang Rute:</b> <?php echo htmlspecialchars($data['panjang']); ?> km
            </div>
            <div class="stat-item">
                <b>ID Jalur:</b> #<?php echo $data['id']; ?>
            </div>
        </div>

        <div class="description">
            <p><?php echo nl2br(htmlspecialchars($data['deskripsi'])); ?></p>
        </div>

        <div class="footer">
            <a href="dashboard.php" class="btn btn-back">← Kembali ke Dashboard</a>
            <a href="update_data.php?id=<?php echo $data['id']; ?>" class="btn btn-edit">Edit Rute</a>
        </div>
    </div>
</div>

</body>
</html>