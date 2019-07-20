<?php 
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM biodata JOIN cities ON cities.id = biodata.place_of_birtd_id ORDER BY id_biodata ASC");
// var_dump($query);
// die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <div class="container-fluid mt-3">
        <!--div class="card"-->
        <a href="tambah.php" class="btn btn-success mb-3 mt-2" role="button">tambah</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">tgl lahir</th>
                        <th scope="col">tmp lahir</th>
                        <th scope="col">no hp</th>
                        <th scope="col">jenis kelamin</th>
                        <th scope="col">alamat</th>
                        <th scope="col">agama</th>
                        <th scope="col">hobi</th>
                        <th scope="col">aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    
                    while($data = mysqli_fetch_assoc($query)){ ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $data['full_name'] ?></td>
                        <td><?php echo $data['date_of_birth'] ?></td>
                        <td><?php echo $data['name'] ?></td>
                        <td><?php echo $data['phone_number'] ?></td>
                        <td><?php echo $data['addres'] ?></td>
                        <td><?php echo $data['last_education'] ?></td>
                        <td><?php echo $data['religion'] ?></td>
                        <td><?php echo $data['hobby'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id_biodata'] ?>" class="btn btn-warning" role="button">edit</a>
                            <a href="hapus.php?id=<?php echo $data['id_biodata'] ?>" class="btn btn-danger" role="button">hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        <!--/div-->
    </div>
</body>
</html>