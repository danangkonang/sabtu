<?php 
require "config.php";
$query = mysqli_query($conn, "SELECT * FROM  cities");
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

                <form action="input.php" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-grup">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            
                            <label class="form-check-label mt-3" for="tempat_lahir">tempat lahir</label>
                            <div class="form-grup">
                                <select class="form-control" name="tempat_lahir" id="tempat_lahir">
                                <?php while($data = mysqli_fetch_assoc($query)){ ?>
                                    <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="form-grup">
                                <label for="tanggal_lahir">tanggal lahir</label>
                                <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>

                            <div class="form-grup">
                                <label for="no_hp">no hp</label>
                                <input type="number" class="form-control" name="no_hp" id="no_hp">
                            </div>

                            <div class="form-grup">
                                <label for="alamat">alamat</label>
                                <textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-check-label mt-3" for="pendidikan">pendidikan</label>
                            <div class="form-grup">
                                <select class="form-control" name="pendidikan" id="pendidikan">
                                    <option value="sma">sma</option>
                                    <option value="s1">s1</option>
                                </select>
                            </div>

                            <label class="mt-3">agama</label>
                            <div class="form-check">
                                <input class="form-check-input" name="agama" type="radio" value="islam" id="islam">
                                <label class="form-check-label" for="islam">
                                    islam
                                </label>
                            </div>
                            
                            <div class="form-check">
                                <input class="form-check-input" name="agama" type="radio" value="kristen" id="kristen">
                                <label class="form-check-label" for="kristen">
                                    kristen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="agama" type="radio" value="katolik" id="katolik">
                                <label class="form-check-label" for="katolik">
                                    katolik
                                </label>
                            </div>
                            
                            <label class="mt-3">hobi</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" id="renang" value="renang">
                                <label class="form-check-label" for="renang">
                                    renang
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" id="mancing" value="mancing">
                                <label class="form-check-label" for="mancing">
                                    mancing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" id="game" value="game">
                                <label class="form-check-label" for="game">
                                    game
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" id="gibah" value="gibah">
                                <label class="form-check-label" for="gibah">
                                    gibah
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobi[]" id="progamming" value="progamming">
                                <label class="form-check-label" for="progamming">
                                    progamming
                                </label>
                            </div>
                            <input type="submit" class="btn btn-success mt-3 mb-3" value="tambah">
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