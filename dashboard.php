<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Siswa</title>
    <style>
      body {
        font-family: Arial;
        background-color: #f4f4f9;
        margin: 0;
      }

          /* Header */
      .header {
        background-color: #673ab7;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 40px;
        color: white;
      }

      .logo {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 20px;
        font-weight: bold;
      }

      .logo img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
      }

      .nav a {
        color: white;
        text-decoration: none;
        margin-left: 25px;
        font-weight: bold;
      }

      .nav a:hover {
        text-decoration: underline;
      }

      h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
      }

      .table-container {
        width: 80%;
        margin: 0 auto;
        position: relative;
      }

      .btn-tambah {
        position: absolute;
        right: 0;
        top: -50px;
        background-color: #673ab7;
        color: white;
        border: none;
        padding: 10px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s;
      }

      .btn-tambah:hover {
        background-color: #5e35b1;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      }

      th, td {
        border: 1px solid #ddd;
        padding: 12px 15px;
        text-align: center;
      }

      th {
        background-color: #673ab7;
        color: white;
        text-transform: uppercase;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #f1f1f1;
      }

      .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        text-decoration: none;
        font-size: 13px;
      }

  
      .btn-edit {
        background-color: #4caf50;
      }

      .btn-delete {
        background-color: #f44336;
      }

      .btn-edit:hover {
        background-color: #45a049;
      }

      .btn-delete:hover {
        background-color: #d32f2f;
      }
    </style>
  </head>
  <body>
            <div class="header">
      <div class="logo">
        <img src="./asset/logo.png" alt="Logo" />
        SMKN 2 BANDUNG
      </div>
      <div class="nav">
        <a href="./index.php">Beranda</a>
        <a href="./logout.php">logout</a>
      </div>
    </div>
    <h2>Data Siswa</h2>

    <div class="table-container">
      <button class="btn-tambah" onclick="window.location.href='./crud/add.php'">+ Tambah Data</button>
<table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $result = mysqli_query($conn, "SELECT * FROM siswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nis']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jurusan']}</td>
                    <td>{$row['alamat']}</td>
                    <td>
                      <a href='./crud/edit.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
                      <a href='./crud/delete.php?id={$row['id']}' class='btn btn-delete' onclick='return confirm(\"Yakin ingin menghapus data ini?\");'>Hapus</a>
                    </td>
                  </tr>";
        }
        ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
