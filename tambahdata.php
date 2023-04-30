<?php  include "headers.php" ?>


<div class="container mt-3  p-5">
    <h3>Tambah data mahasiswa</h3>


    <form action="getvar.php" class="border rounded" method="post">
    <div class="field-input w-75 p-3 rounded" style="background-color: #b8b8b8;">
        <table class="tables">
            <tr>
                <td>Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="nama"></td>    
            </tr>

            <tr>
                <td>Nim</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="nim"></td>    
            </tr>

            <tr>
                <td>Angkatan</td>
                <td>&nbsp;:&nbsp;</td>
                <td><input class="form-control" id="nama" type="text" name="angkatan"></td>    
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

        </table>

        <input type="submit" value="submit" class="mt-3 btn btn-primary">

    </div>
    
    </form>


</div>


<?php  include "footers.php" ?>