<?php
include_once("tampil.php");
include_once('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>
    <div class="span9" id="content">
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form action="proses.php" method="POST">
                            <fieldset>
                                <legend>FORM DATA MAHASISWA</legend>
                                <div class="control-group">
                                    <label for="npm">NPM</label>
                                    <div class="controls">
                                        <input type="text" name="npm" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="npm">NAMA</label>
                                    <div class="controls">
                                        <input type="text" name="input1" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="npm">PRODI</label>
                                    <div class="controls">
                                        <input type="text" name="input2" value="">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="npm">JENIS KELAMIN</label>
                                    <div class="controls">
                                        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki
                                        <input type="radio" name="jk" value="Perempuan"> Perempuan
                                    </div>
                                </div>
                                <div class="form_action">
                                    <button type="submit" class="btn btn-success" name="proses">Kirim</button>
                                    <button type="reset" class="btn">Cancel</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Tabel Mahasiswa</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NPM</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Prodi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['nama_mhs']; ?></td>
                                        <td><?php echo $data['prodi_mhs']; ?></td>
                                        <td><?php echo $data['jnskelamin_mhs']; ?></td>
                                        <td><a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                                            | <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>