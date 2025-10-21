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
        padding: 40px;
      }

      h2 {
        text-align: center;
        color: #333;
        margin-bottom: 30px;
      }

      table {
        width: 80%;
        margin: 0 auto;
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
        text-transform: uppercase; ;
      }

      tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tr:hover {
        background-color: #f1f1f1;
      }
    </style>
  </head>
  <body>
    <h2>Data Siswa</h2>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Alamat</th>
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
                        </tr>";
            }
            ?>
        </tbody>
    </table>
  </body>
</html>
