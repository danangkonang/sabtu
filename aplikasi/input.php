<?php 
require "config.php";

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$pendidikan = $_POST['pendidikan'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$hobi = implode(", ",$_POST['hobi']);

$sql = "INSERT INTO `biodata` (`id_biodata`, `full_name`, `date_of_birth`, `place_of_birtd_id`, `phone_number`, `addres`, `last_education`, `religion`, `hobby`) VALUES 
(NULL,'$nama','$tanggal_lahir','$tempat_lahir','$no_hp','$alamat','$pendidikan','$agama','$hobi')";

$input = mysqli_query($conn, $sql);
if($input)
{
    header('location:index.php');
}
else 
{
    echo mysqli_error($conn);
    //echo "gagal";
}
