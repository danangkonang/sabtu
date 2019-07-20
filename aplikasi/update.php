<?php 
require "config.php";
//if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $pendidikan = $_POST['pendidikan'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $hobi = implode(", ",$_POST['hobi']);
    
    $sql = "UPDATE `biodata` SET `full_name` = '$nama', `date_of_birth` = '$tanggal_lahir', `place_of_birtd_id` = '$tempat_lahir', `phone_number` = '$no_hp', `last_education` = '$pendidikan', `addres` = '$alamat', `religion` = '$agama', `hobby` = '$hobi' WHERE `id_biodata` = $id";
    
    $update = mysqli_query($conn, $sql);
    if($update){
        header('location:index.php');
    }else {
        echo mysqli_error($conn);
    
    }
    
//}
?>