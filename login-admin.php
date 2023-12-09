<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
    $password = $_POST["password"]; 

    $query = "SELECT * FROM tabel_admin WHERE username = ?";
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("location:admin-edit.php");
            exit();
        } else {
            echo "Login Gagal. Silakan coba lagi.";
        }
    } else {
        echo "Login Gagal. Silakan coba lagi.";
    }

    mysqli_free_result($result);
    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);
}
?>


