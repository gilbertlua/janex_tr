<?php include "connect.php"?>

<?php

$sql = "SELECT id,nama,nim,angkatan,jenis_kelamin FROM tabel_mahasiswa";
$result = $mysqli->query($sql);


?>
<?php include "headers.php"?>

<div class="container mt-5">


<table class="table w-75" style="margin-left:auto;margin-right:auto;">
    <thead class="bg-secondary rounded text-light">
        <th>#</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Angkatan</th>
        <th>Janis Kelamin</th>
        <th>Password</th>
        <th>action</th>
    </thead>

    <tbody>
        <?php $i=1;foreach($result as $row):?>
        <tr>
            <th><?= $i++;?></th>
            <td><?= $row["nama"]?></td>
            <td><?= $row["nim"]?></td>
            <td><?= $row["angkatan"]?></td>
            <td><?= $row["jenis_kelamin"]?></td>
            <td>****</td>
            <td> 
                <a href="edit.php?id=<?=$row["id"]?>" class="btn btn-success">Edit</a>
                <a href="delete.php?id=<?=$row["id"]?>" class="btn btn-danger">Hapus</a>
            </td>

        </tr>
        <?php endforeach;?>
    </tbody>
</table>


</div>


<?php include "footers.php"?>