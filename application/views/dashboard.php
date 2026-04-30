<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - BikePath</title>
    <style>
        :root { --primary: #2c3e50; --secondary: #34495e; --accent: #3498db; --success: #27ae60; --danger: #e74c3c; --light: #ecf0f1; }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); min-height: 100vh; padding: 40px 20px; }
        .container { max-width: 1200px; margin: 0 auto; background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
        .header { background: var(--primary); padding: 30px 40px; display: flex; justify-content: space-between; align-items: center; color: white; }
        .header h1 { font-size: 24px; font-weight: 600; letter-spacing: 1px; }
        .btn { padding: 10px 20px; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; display: inline-block; cursor: pointer; border: none; }
        .btn-add { background: var(--success); color: white; }
        .btn-add:hover { background: #219a52; transform: translateY(-2px); }
        .btn-logout { background: transparent; border: 2px solid white; color: white; }
        .btn-logout:hover { background: white; color: var(--danger); }
        .content { padding: 40px; }
        .table-container { overflow-x: auto; background: white; border-radius: 12px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        table { width: 100%; border-collapse: collapse; white-space: nowrap; }
        th, td { padding: 16px 24px; text-align: left; border-bottom: 1px solid #eee; }
        th { background: #f8f9fa; font-weight: 600; color: var(--secondary); text-transform: uppercase; font-size: 13px; letter-spacing: 0.5px; }
        tr:hover { background-color: #f8f9fa; }
        .img-thumb { width: 80px; height: 60px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .btn-view { background: var(--accent); color: white; padding: 6px 12px; font-size: 13px; }
        .btn-update { background: #f39c12; color: white; padding: 6px 12px; font-size: 13px; }
        .btn-delete { background: var(--danger); color: white; padding: 6px 12px; font-size: 13px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚲 Rekap Rute Perjalanan</h1>
            <div>
                <a href="<?= site_url('bikepath/input') ?>" class="btn btn-add">Tambah Jalur</a>
                <a href="<?= site_url('bikepath/logout') ?>" class="btn btn-logout">Logout</a>
            </div>
        </div>
        <div class="content">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama Jalur</th>
                            <th>Lokasi</th>
                            <th>Panjang</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; if(!empty($jalur)): foreach($jalur as $row): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <?php if(!empty($row['foto'])): ?>
                                    <img src="<?= base_url('uploads/'.$row['foto']) ?>" class="img-thumb" alt="foto">
                                <?php else: ?>
                                    <div class="img-thumb" style="display:flex; align-items:center; justify-content:center; font-size:10px; color:#999; background:#eee;">No Image</div>
                                <?php endif; ?>
                            </td>
                            <td><?= $row['nama_jalur'] ?></td>
                            <td><?= $row['lokasi'] ?></td>
                            <td><?= $row['panjang'] ?> km</td>
                            <td>
                               <?= !empty($row['deskripsi']) 
                                ? substr($row['deskripsi'], 0, 30).'...' 
                             : '-' ?>
                            </td>
                            <td>
                               <div style="display: flex; gap: 5px;">
                               <a href="<?= site_url('bikepath/view_data/'.$row['id']) ?>" class="btn btn-view">View</a>
                               <a href="<?= site_url('bikepath/update_data/'.$row['id']) ?>" class="btn btn-update">Edit</a>
                               <a href="<?= site_url('bikepath/delete_data/'.$row['id']) ?>" class="btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus rute ini?')">Delete</a>
                               </div>
                            </td>
                        </tr>
                        <?php endforeach; else: ?>
                        <tr>
                            <td colspan="7" style="text-align: center; padding: 40px; color: #7f8c8d;">Belum ada data di database.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>