<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stacksheet" href="css/style.css">
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
    max-height: 100vh
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
    </style>
    <title>Tabel</title>
</head>
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
                <a class="nav-link" href="index.php">Admin</a>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofjYYuL5r+erFgktRLy8zO8gkDQ6L4MVq" crossorigin="anonymous"></script>

</body>
</html>