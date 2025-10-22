<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Siswa</title>
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
      <h2>Tambah Data Siswa</h2>
      <form action="" method="POST">
        <label for="nis">NIS</label>
        <input type="text" id="nis" name="nis" required />

        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required />

        <label for="jurusan">Jurusan</label>
        <input type="text" id="jurusan" name="jurusan" required />

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" required />

        <button type="submit" name="submit">Simpan</button>
      </form>
      <a href="../index.php" class="back-link">← Kembali ke Data Siswa</a>
    </div>

    <?php
    include '../koneksi.php';

    if (isset($_POST['submit'])) {
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO siswa (nis, nama, jurusan, alamat) VALUES ('$nis', '$nama', '$jurusan', '$alamat')";
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = '../dashboard.php';
                  </script>";
        } else {
            echo "<script>alert('Gagal menambahkan data.');</script>";
        }
    }
    ?>
  </body>
</html>
