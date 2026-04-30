<?php

// Pastikan variabel $conn tersedia dari class Koneksi
if (!isset($conn)) {
    $conn = $database->conn;
}

// Proses Penghapusan jika form disubmit
if(isset($_POST['konfirmasi_hapus'])){
    $id = $_POST['id'];

    $stmt = $conn->prepare("DELETE FROM jalur_sepeda WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if($stmt->execute()){
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Data - BikePath</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        
        body { 
            background: linear-gradient(135deg, #10b981 0%, #3b82f6 100%); 
            height: 100vh; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
        }

        .delete-box { 
            background: white; 
            padding: 40px; 
            border-radius: 20px; 
            text-align: center; 
            box-shadow: 0 20px 25px -5px rgba(0,0,0,0.2); 
            max-width: 400px; 
            width: 90%;
        }

        .icon-warn { font-size: 60px; margin-bottom: 20px; display: block; }
        h2 { color: #991b1b; margin-bottom: 10px; }
        p { color: #6b7280; margin-bottom: 20px; line-height: 1.5; }
        
        /* Style untuk input ID agar tetap rapi dalam desain */
        .input-group { margin-bottom: 25px; }
        .input-group label { display: block; margin-bottom: 8px; font-weight: bold; color: #4b5563; }
        .input-id { 
            width: 100%; 
            padding: 12px; 
            border: 2px solid #fee2e2; 
            border-radius: 10px; 
            text-align: center; 
            font-size: 1.1rem;
            color: #b91c1c;
            outline: none;
        }
        .input-id:focus { border-color: #ef4444; }

        .btn-confirm { 
            background: #ef4444; 
            color: white; 
            padding: 12px 30px; 
            border-radius: 10px; 
            border: none; 
            font-weight: bold; 
            cursor: pointer; 
            margin: 5px; 
            transition: 0.3s;
            width: 100%;
        }

        .btn-confirm:hover { background: #dc2626; transform: scale(1.02); }

        .btn-cancel { 
            background: #f3f4f6; 
            color: #374151; 
            padding: 12px 30px; 
            border-radius: 10px; 
            text-decoration: none; 
            display: inline-block; 
            font-weight: bold; 
            margin-top: 10px; 
            transition: 0.3s;
            width: 100%;
        }
        
        .btn-cancel:hover { background: #e5e7eb; }
    </style>
</head>
<body>
    <div class="delete-box">
        <span class="icon-warn">⚠️</span>
        <h2>Hapus Data Jalur</h2>
        <p>Tindakan ini permanen. Silakan masukkan ID rute yang ingin Anda hapus dari database.</p>

        <form action="" method="POST">
            <div class="input-group">
                <label>ID Jalur Sepeda</label>
                <input type="number" name="id" class="input-id" placeholder="Contoh: 12" required>
            </div>
            
            <button type="submit" name="konfirmasi_hapus" class="btn-confirm">YA, HAPUS PERMANEN</button>
            <a href="dashboard.php" class="btn-cancel">BATAL / KEMBALI</a>
        </form>
    </div>
</body>
</html>