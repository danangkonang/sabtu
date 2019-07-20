<?php 
include "config.php";
$id =  $_GET['id'];
$query = "DELETE FROM `biodata` WHERE id_biodata=$id";
mysqli_query($conn,$query);
header('location:index.php');
?>