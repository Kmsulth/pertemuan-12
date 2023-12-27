<?php
include "koneksi.php";
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$tempat = $_POST["tempat"];
$tgl_lahir = $_POST["tgl_lahir"];
$alamat = $_POST["alamat"];
$jenis_pasien = $_POST["jenis_pasien"];
$jenis_id = $_POST["jenis_id"];
$no_id = $_POST["no_id"];
$agama = $_POST["agama"];
$gol_darah = $_POST["gol_darah"];
$no_hp = $_POST["no_hp"];

$uploaddir= "folder_foto";
$tmpname = $_FILES["foto"]["tmp_name"];

$simpan = mysqli_query($con, "INSERT INTO tbl_pasien (no_rm, nama, jenis_kelamin, tempat_lahir, tgl_lahir, alamat,
jenis_pasien, jenis_id, no_id, agama, gol_darah, no_telp) 
VALUES ('', '$nama', '$jk', '$tempat', '$tgl_lahir', '$alamat', '$jenis_pasien', '$jenis_id', '$no_id', '$agama', '$gol_darah', '$no_hp')");

if ($simpan) {
    echo "Data Berhasil";
} else {
    echo "Data Gagal: " . mysqli_error($con); // Menampilkan pesan error jika penyimpanan gagal
}
?>