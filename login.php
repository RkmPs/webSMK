<?php
    session_start();
    include "koneksi.php";

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $cek = mysqli_num_rows($query);

        if ($cek > 0) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
        } else {
            $error = "Username atau password salah!";
        }
    }
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Sistem Informasi Manajemen Siswa</title>
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #673ab7;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .login-card {
        background-color: #fff;
        padding: 40px 50px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        width: 350px;
        text-align: center;
      }

      .login-card h2 {
        margin-bottom: 25px;
        color: #333;
      }

      .form-group {
        margin-bottom: 20px;
        text-align: left;
      }

      .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #444;
      }

      .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
      }

      .btn {
        background-color: #673ab7;
        color: white;
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;
        transition: background 0.3s;
      }

      .btn:hover {
        background-color: #5a2ea0;
      }

      .footer-text {
        margin-top: 15px;
        font-size: 13px;
        color: #666;
      }

      .error {
        color: red;
        font-size: 14px;
        margin-bottom: 15px;
      }
    </style>
  </head>
  <body>
    <div class="login-card">
      <h2>Login Admin</h2>

      <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required />
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />
            </div>

            <button type="submit" class="btn" name="login">Masuk</button>
        </form>


      <div class="footer-text">© SMKN 2 Bandung</div>
    </div>
  </body>
</html>
