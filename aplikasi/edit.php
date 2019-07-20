<?php 
    include "config.php";
    $id =  $_GET['id'];
    $sql = "SELECT * FROM `biodata` WHERE id_biodata=$id";
    $query = mysqli_query($conn,$sql);

    $data = mysqli_fetch_array($query);

    $a = explode(', ',$data['hobby']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="container mt-3 mb-3">
        <div class="card m-3">
            <div class="card-header">
                tambah data
            </div>
            <div class="card-body">
                <form action="update.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" value="<?= $data['id_biodata'] ?>" name="id">
                        
                            <div class="form-grup">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" value="<?= $data['full_name'] ?>" name="nama" id="nama">
                            </div>

                            <div class="form-grup">
                                <label for="tanggal_lahir">tanggal lahir</label>
                                <input type="text" class="form-control" value="<?= $data['date_of_birth'] ?>" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            
                            <label class="form-check-label mt-3" for="tempat_lahir">tempat lahir</label>
                            <div class="form-grup">
                                <select class="form-control" name="tempat_lahir" id="tempat_lahir">
                                    <option value="1" <?php $data['date_of_birth']=='1'?print 'selected':''; ?> >jakarta</option>
                                    <option value="2" <?php $data['date_of_birth']=='2'?print 'selected':''; ?>>bandung</option>
                                </select>
                            </div>

                            <div class="form-grup">
                                <label for="no_hp">no hp</label>
                                <input type="number" class="form-control" value="<?= $data['phone_number'] ?>" name="no_hp" id="no_hp">
                            </div>

                            <div class="form-grup">
                                <label for="alamat">alamat</label>
                                <textarea type="text" class="form-control" name="alamat" id="alamat"><?= $data['addres'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">

                            <label class="form-check-label mt-3" for="pendidikan">pendidikan</label>
                            <div class="form-grup">
                                <select class="form-control" name="pendidikan" id="pendidikan">
                                    <option value="sma" <?php $data['last_education']=='sma'?print 'selected':''; ?> >sma</option>
                                    <option value="s1" <?php $data['last_education']=='s1'?print 'selected':''; ?>>s1</option>
                                </select>
                            </div>

                            <label class="mt-3">religion</label>
                            <div class="form-check">
                                <input <?php $data['religion']=='islam'?print 'checked':''; ?> class="form-check-input" name="agama" type="radio" value="islam" id="islam">
                                <label class="form-check-label" for="islam">
                                    islam
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input <?php $data['religion']=='kristen'?print 'checked':''; ?> class="form-check-input" name="agama" type="radio" value="kristen" id="kristen">
                                <label class="form-check-label" for="kristen">
                                    kristen
                                </label>
                            </div>
                            <div class="form-check">
                                <input <?php $data['religion']=='katolik'?print 'checked':''; ?> class="form-check-input" name="agama" type="radio" value="katolik" id="katolik">
                                <label class="form-check-label" for="katolik">
                                    katolik
                                </label>
                            </div>
                            
                            <label class="mt-3">hobi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" <?php in_array('renang', $a)? print 'checked':'' ?> id="renang" value="renang">
                                <label class="form-check-label" for="renang">
                                    renang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" <?php in_array('game', $a)? print 'checked':'' ?> id="game" value="game">
                                <label class="form-check-label" for="game">
                                    game
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" <?php in_array('gibah', $a)? print 'checked':'' ?> id="gibah" value="gibah">
                                <label class="form-check-label" for="gibah">
                                    gibah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" <?php in_array('mancing', $a)? print 'checked':'' ?> id="mancing" value="mancing">
                                <label class="form-check-label" for="mancing">
                                    mancing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" <?php in_array('progamming', $a)? print 'checked':'' ?> id="progamming" value="progamming">
                                <label class="form-check-label" for="progamming">
                                    progamming
                                </label>
                            </div>
                                    
                            <input type="submit" class="btn btn-success mt-5 mb-3" value="update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#tanggal_lahir" ).datepicker({
          dateFormat: "yy-mm-dd",
        });
        
      } );
    </script>
</body>
</html>