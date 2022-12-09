<html> 
    <head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    </head> 
    <body> 
        <?php    
            include "koneksi.php"; 
            $id=$_GET['id']; 
            $query="SELECT * FROM member WHERE id='$id'"; 
            $result=mysqli_query($connect, $query); 
        ?> 
        <form action="prosesEdit.php" method="get"> 
            <table> 
                <?php  
                    while($row=mysqli_fetch_array($result)){ 
                 ?> 
                    <tr> 
                        <td> Id: </td> 
                        <td><input type="text" name="id" value="<?php echo $row['id'];?>" ></td> 
                    </tr> 
                    <tr> 
                        <td> Nama: </td> 
                        <td><input type="text" name="nama" value="<?php echo $row['nama'];?>" ></td> 
                    </tr> 
                    <tr> 
                        <td> Alamat: </td> 
                        <td><textarea name="alamat" name="alamat" rows="5" cols="20"><?php echo $row['alamat'];?></textarea></td> 
                    </tr> 

                    <tr> 
                        <td> No Telp </td> 
                        <td>: <input type="number" name="notelp" value="<?php echo $row['notelp'];?>"></td> 
                    </tr> 
                    <tr> 
                        <td> Jenis Kelamin </td> 
                        <td> 
                            <p>: 
                                <input type='radio' name='jk' value='L' />L
                                <input type='radio' name='jk' value='P' />P
                            </p> 
                        </td> 
                    </tr> 
                    <tr> 
                        <td> Agama </td> 
                        <td>: <select type='text' name='agama' id="agama" autocomplete="off"> 
                                <option value="Islam"> Islam </option> 
                                <option value="Protestan"> Protestan </option> 
                                <option value="Katolik"> Katolik </option> 
                                <option value="Hindu"> Hindu </option> 
                                <option value="Buddha"> Buddha </option> 
                                <option value="Konghucu"> Konghucu </option> 
                            </select> 
                        </td> 
                    </tr> 

                    <tr> 
                        <td><input type="submit" name="simpan" value="Simpan"></td> 
                        <td></td>
                    </tr> 
                <?php 
                    } 
                ?> 
            </table> 
        </form> 
    </body> 
</html>