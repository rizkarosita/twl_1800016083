<html>
<style>
table, th, td {
	border: 1px solid black;
}
</style>
<body>
	<table style="width:100%">
		<tr>
			<td>NIM</td>
			<td><?php echo $_POST["nim"]; ?></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><?php echo $_POST["nama"]; ?></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td><?php echo $_POST["kelamin"]; ?></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><?php echo $_POST["alamat"]; ?></td>
		</tr>
		<tr>
			<td>PROGRAM STUDI</td>
			<td><?php echo $_POST["prodi"]; ?></td>
		</tr>
		<tr>
			<td>BAHASA PEMROGRAMAN YANG DIKUASAI</td>
			<td><?php if(isset($_POST['cek'])){
				$cek=$_POST['cek'];
				echo"";
				for($i=0; $i<count($cek);$i++){
					echo $cek[$i]."<br>";
				}
			} ?></td>
		</tr>
	</table>
</body>
</html>