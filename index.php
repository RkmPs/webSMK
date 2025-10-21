    <!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Manajemen Siswa</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
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
      .hero {
        display: flex;
        justify-content: center;
        align-items: center; 
        gap: 150px; 
        background-color: white;
        padding: 30px 10px;
      }

      .hero img {
        width: 500px;
        height: auto;
      }

      .hero-content {
        max-width: 600px;
        text-align: right; 
      }     

      .hero h1 {
        font-size: 28px;
        color: #333;
        margin-bottom: 10px;
      }

      .hero p {
        font-style: italic;
        color: #555;
      }

      .menu {
        display: flex;
        justify-content: center;
        gap: 40px;
        flex-wrap: wrap;
        padding: 40px 0;
      }

      .menu-item {
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
        padding: 20px;
        transition: 0.3s;
      }

      .menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      }

      .menu-item h2 {
        color: #673ab7;
        margin-bottom: 10px;
      }

      .menu-item p {
        color: #555;
        font-size: 16px;
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
        <a href="./dataSiswa.php">Data Siswa</a>
        <a href="#">Guru</a>
        <a href="#">Jurusan</a>
        <a href="./login.php">Login</a>
      </div>
    </div>

    <div class="hero">
      <img src="./asset/banner.png" alt="Siswa SMKN 2" />
      <div class="hero-content">
        <h1>Sistem Informasi Manajemen Siswa</h1>
        <p>
          “Jangan hanya bisa untuk bermimpi saja, tapi berusaha dan berdoa untuk menggapai mimpi-mimpi itu.” <br />
          — SMKN 2 Bandung
        </p>
      </div>
    </div>

    <div class="menu">
      <div class="menu-item">
        <h2>Data Siswa</h2>
        <p>Kelola data siswa seperti absensi, jurusan, dan kelas.</p>
      </div>
      <div class="menu-item">
        <h2>Data Guru</h2>
        <p>Manajemen data guru dan pengampu mata pelajaran.</p>
      </div>
      <div class="menu-item">
        <h2>Jurusan</h2>
        <p>Informasi program dan bidang keahlian di SMKN 2 Bandung.</p>
      </div>
    </div>
  </body>
</html>
