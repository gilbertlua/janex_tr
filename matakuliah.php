<?php include "connect.php"?>

<?php


$sql = "SELECT id,matakuliah,kode,hari,dari,sampai FROM tabel_matakuliah";
$result = $mysqli->query($sql);


?>
<?php include "headers.php"?>


<div class="container mt-5 border w-50 rounded p-3">
	<h4 class="text-center">Tambah Matakuliah</h4>
	<hr>
	<a href="#data_matakuliah" class="text-decoration-none text-success">lihat data</a>
	<form method="post" action="matkulvar.php">
		<table>
			<tr>
				<td>Matakuliah</td>
				<td>&nbsp;:&nbsp;</td>
				<td><input class="form-control" type="text" name="matakuliah"></td>
			</tr>

			<tr>
				<td>Kode</td>
				<td>&nbsp;:&nbsp;</td>
				<td><input class="form-control" type="text" name="kode" ></td>
			</tr>
			<tr>
				<td>Jadwal</td>
				<td>&nbsp;:&nbsp;</td>
				<td>
					<div style="display: flex;">
						<input class="form-control"type="" placeholder="Hari"   name="hari">
						<input class="form-control"type=""  placeholder="Dari"   name="dari">
						<input class="form-control"type="" placeholder="Sampai" name="sampai">
					</div>
				</td>
			</tr>						
		</table>
		<input class="btn btn-success mt-2" type="submit" name="submit">
	</form>	
</div>

<div class="container mt-5" id="data_matakuliah" style="min-height: 95vh;">
	<table class="table w-75" style="margin-left:auto;margin-right:auto;">
    <thead class="bg-dark rounded text-light">
        <th>#</th>
        <th>Matakuliah</th>
        <th>Kode</th>
        <th>Jadwal Kuliah</th>
        <th>Action</th>
    </thead>

    <tbody>
    		<?php $i =1; ?>
   			<?php foreach ($result as $row) :?>
   				<tr>
   					<th><?= $i++?></th>
   					<td><?= $row['matakuliah'];?></td>
   					<td><?= $row['kode'];?></td>
   					<td><?= $row['hari'];?> / <?= $row['dari'];?> - <?= $row['sampai'];?>   </td>
   					<td> 
		                <a href="" class="btn btn-danger">Hapus</a>
		            </td>
   				</tr>
   			<?php endforeach; ?>
    </tbody>
</table>
</div>


<?php include "footers.php"?>