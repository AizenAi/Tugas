<?php
include 'koneksi.php';
$id = $_GET['id'];
$mahasiswa = mysqli_query($koneksi, "select * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('PPLG','TJKT','TE','TKRO','DPIB');

function active_radio_button($value,$input){
    $result = $value==$input?'checked':'';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Form Edit</title>
</head>
<body>
<div class="container mt-5">
    <h2>Form Input Mahasiswa</h2>
    <form method="post" action="update.php">
        <input type="hidden" value="<?php echo $row['id_mhs'];?>"name="id_mhs">
        <div class="form-group">
            <label for="nim">NIM Mahasiswa:</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan NIM" value="<?php echo $row['nim'];?>"name="nim">
        </div>
        <div class="form-group">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" class="form-control" id="nim" placeholder="Masukkan Nama" value="<?php echo $row['nama'];?>"name="nama">
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <div>
                <input type="radio" name="jenis_kelamin" value="L"> Laki Laki <?php echo active_radio_button("L",$row['jenis_kelamin'])?>Laki Laki
                <input type="radio" name="jenis_kelamin" value="P"> Perempuan <?php echo active_radio_button("p",$row['jenis_kelamin'])?>Perempuan
            </div>
        </div>
        <div class="form-group">
            <label for="jurusan">Jurusan: <?php echo $row['jurusan'];?></label>
            <select name="jurusan">
                <?php 
                foreach ($jurusan as $j){
                    echo "<option value='$j'";
                    echo $row['jurusan']==$j?'selected="selected"':'';
                    echo ">$j</option>";
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="jurusan">Alamat:</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" value="<?php echo $row['alamat'];?>"type="text"name="alamat">>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="tabel.php">Kembali</a>
    </form>
</div>
    
</body>
</html>
