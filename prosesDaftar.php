<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $nama=$_GET['nama'];
    $alamat=$_GET['alamat'];
    $notelp=$_GET['notelp'];
    $jk=$_GET['jk'];
    $agama=$_GET['agama'];

    $sql="INSERT INTO member(id, nama, alamat, notelp, jk, agama)
        VALUES ('$id','$nama','$alamat','$notelp','$jk','$agama')";

    if (mysqli_query($connect, $sql)){
        header('location:daftarMember.php'); 
    }
    else{
        echo "Record gagal ditambahkan <br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>