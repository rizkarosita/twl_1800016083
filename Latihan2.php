<html>
<body>

	<form action="halo.php" method="post">

	NIM:   <input type="text" name="nim"><br><br>
	Nama:  <input type="text" name="nama"><br><br>
	Jenis Kelamin: <br><br>
	<input type=RADIO name="kelamin" value="L"> Laki-laki
	<input type=RADIO name="kelamin" value="P"> Perempuan <br><br>
	Alamat:  <input type="text" name="alamat"><br><br>
	Program Studi : 
	<SELECT NAME="prodi" ><br>
		<OPTION VALUE="Sistem Informasi"> SISTEM INFORMASI 
		<OPTION VALUE="Fisika"> FISIKA
		<OPTION VALUE="Biologi"> BIOLOGI
		<OPTION VALUE="Matematika"> MATEMATIKA <br><br>
	</select><br><br>
	<br><br><br>
	Bahasa Pemrograman yang dikuasai: <br>
	<input type=checkbox name="cek[]" value="PASCAL/DELPHI"> PASCAL/DELPHI <br>
	<input type=checkbox name="cek[]" value="C/C++"> C/C++ <br>
	<input type=checkbox name="cek[]" value="VISUAL BASIC"> Visual Basic <br>
	<p>
		<input type="submit" name="sumbmit" class="btn btn-info" value="Submit"/></p><br>
		</form>
</body>
</html>	