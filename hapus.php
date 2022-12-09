<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $query = "DELETE FROM member WHERE id='$id'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "Data berhasil dihapus";
?>
    <a href="daftarMember.php">Lihat data di Tabel</a>
<?php
    }else{
        echo "Data gagal dihapus" . mysqli_error($connect);
    }
?>