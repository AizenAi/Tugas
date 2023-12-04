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
    <title>Sistem Informasi Akademik</title>
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
<div class="container mt-5">
    <h2>Form Input Wali</h2>
    <form method="post" action="simpan-wali.php">
        <div class="form-group">
            <label for="nim">ID Wali:</label>
            <input type="text" class="form-control" name="id" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label for="nim">Nama Wali:</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan NIM">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div>
                <input type="radio" name="jenis_kelamin" value="L"> Laki Laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </div>
        </div>
        <div class="form-group">
            <label for="jurusan">Alamat:</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<footer class="bg-dark text-white text-center py-2 fixed-bottom">
    <p>&copy; 2023 Sistem Informasi Akademik</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofjYYuL5r+erFgktRLy8zO8gkDQ6L4MVq" crossorigin="anonymous"></script>

</body>
</html>
