<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM mahasiswa WHERE id=$id") or die(mysqli_error($db));

if($query){
    echo "<script>
    alert('Data berhasil dihapus');
    window.location.assign(form3.php);
    </script>";
}else{
    echo "<script>
    alert('Data gagal dihapus');
    window.location.assign(form3.php);
    </script>";
}


header("Location: form3.php");
?>
