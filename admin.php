<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            padding-top: 56px;
            padding-bottom: 60px;
        }

        .navbar {
            margin-bottom: 20px;
        }
        #content {
            padding: 20px;
            overflow-y: auto;
            max-height: 100vh;
        }
        .container {
            margin-bottom: 20px;
        }
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
        }
        h2 {
            margin-top: 20px;
            text-align: center;
        }
        .table-container {
            margin-top: 10px;
        }
        .table {
            width: 100%;
            max-width: 1500px; 
            margin: 0 auto; 
        }
        .table th, .table td {
            text-align: center;
        }
        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .table tbody tr:hover {
            background-color: #d4edda;
        }
    </style>S
</head>
<body>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Sistem Informasi Akademik</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form-input.php">Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wali.php">Wali Mahasiswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
            </li>
        </ul>
    </div>
</nav>

<h2>Data Mahasiswa</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>MENU</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'koneksi.php';
            $mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa");
            $no=1;
            foreach ($mahasiswa as $row){
                $jenis_kelamin = $row['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki Laki';
                echo "<tr>
                    <td>$no</td>
                    <td>".$row['nim']."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['jurusan']."</td>
                    <td>".$row['jenis_kelamin']."</td>
                    <td>".$row['alamat']."</td>
                    <td>
                        <a href='form-edit.php?id_mhs=$row[id_mhs]' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete.php?id_mhs=$row[id_mhs]' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                    </td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
