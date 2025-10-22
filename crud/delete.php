<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Pastikan ID valid dan ada di database
    $check = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
    if (mysqli_num_rows($check) > 0) {
        $query = mysqli_query($conn, "DELETE FROM siswa WHERE id='$id'");

        if ($query) {
            echo "<script>
                    alert('Data berhasil dihapus!');
                    window.location.href='../dashboard.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal menghapus data!');
                    window.location.href='../index.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Data tidak ditemukan!');
                window.location.href='../index.php';
              </script>";
    }
} else {
    echo "<script>
            alert('ID tidak ditemukan!');
            window.location.href='../index.php';
          </script>";
}
?>
