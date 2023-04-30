<?php  include "connect.php" ?>
<?php
$id = $_GET['id'];
$sql = "SELECT id,nama,nim,angkatan,jenis_kelamin FROM tabel_mahasiswa WHERE id=$id ";
$result = $mysqli->query($sql);

?>
<?php  include "headers.php" ?>


<div class="container mt-3  p-5">
    <h3>Tambah data mahasiswa</h3>

    <?php foreach($result as $row):?>
    <form action="editvar.php" class="border rounded" method="post">
    <div class="field-input w-75 p-3 rounded" style="background-color: #b8b8b8;">
        
        <table class="tables">
            <tr>
                <td>Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="nama" value="<?=$row['nama']?>"></td>    
            </tr>

            <tr>
                <td>Nim</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="nim" value="<?=$row['nim']?>"></td>    
            </tr>

            <tr>
                <td>Angkatan</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="angkatan" value="<?=$row['angkatan']?>"></td>    
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="jenis_kelamin">
                    <option value="laki-laki">Laki laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                </td>    
            </tr>

            <tr>
                <td>Password</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" type="password" name="password"></td>
            </tr>
            <input type="hidden" name="id" value="<?=$row['id']?>">
        </table>

        <input type="submit" value="submit" class="mt-3 btn btn-primary">

    </div>
    
    </form>

    
    <?php endforeach;?>


</div>


<?php  include "footers.php" ?>