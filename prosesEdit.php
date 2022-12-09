<?php 
    include "koneksi.php"; 
 
    $id=$_GET['id']; 
    $nama=$_GET['nama']; 
    $alamat=$_GET['alamat']; 
    $notelp=$_GET['notelp'];
    $jk=$_GET['jk'];
    $agama=$_GET['agama'];
 
    $query= "UPDATE member SET nama='$nama', alamat='$alamat', notelp='$notelp', jk='$jk', agama='$agama' WHERE id='$id'"; 
    $result=mysqli_query($connect, $query); 
 
    if($result) { 
        echo "Berhasil update data ke database "; 
?> 
        <a href="daftarMember.php">Lihat data di Tabel</a> 
<?php 
    }else{ 
        echo "Gagal update data" . mysqli_error($connect); 
    } 
?>