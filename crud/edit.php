<?php
include '../koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data siswa berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
$row = mysqli_fetch_assoc($result);

// Jika form disubmit
if (isset($_POST['update'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    // Update data ke database
    $query = "UPDATE siswa SET nis='$nis', nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data berhasil diperbarui!');
                window.location.href = '../dashboard.php';
              </script>";
    } else {
        echo "<script>alert('Gagal memperbarui data.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Data Siswa</title>
    <style>
      body {
        font-family: Arial;
        background-color: #f4f4f9;
        margin: 0;
        padding: 40px;
      }

      .container {
        width: 400px;
        margin: 60px auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      h2 {
        text-align: center;
        color: #333;
        margin-bottom: 25px;
      }

      label {
        display: block;
        margin-bottom: 8px;
        color: #555;
        font-weight: bold;
      }

      input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      button {
        background-color: #673ab7;
        color: white;
        border: none;
        padding: 10px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
        width: 100%;
      }

      button:hover {
        background-color: #5e35b1;
      }

      .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #673ab7;
        text-decoration: none;
      }

      .back-link:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>Edit Data Siswa</h2>
      <form action="" method="POST">
        <label for="nis">NIS</label>
        <input type="text" id="nis" name="nis" value="<?= $row['nis']; ?>" required />

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?= $row['nama']; ?>" required />

        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" value="<?= $row['jurusan']; ?>" required />

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" value="<?= $row['alamat']; ?>" required />

        <button type="submit" name="update">Simpan Perubahan</button>
      </form>
      <a href="../index.php" class="back-link">← Kembali ke Data Siswa</a>
    </div>
  </body>
</html>
