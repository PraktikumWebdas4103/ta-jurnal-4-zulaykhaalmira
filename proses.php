<form action="" method="POST" enctype="multipart/form-data">
	Gambar :<input type="file" name="gambar"><br>
	Hobi :<input type="checkbox" name="hobi[]" value="Otomotif">Otomotif
	<input type="checkbox" name="hobi[]" value="Olahraga">Olahraga
	<input type="checkbox" name="hobi[]" value="Seni">Seni<br>
	Genre Film :<input type="checkbox" name="film[]" value="Horror">Horror
	<input type="checkbox" name="film[]" value="Action">Action
	<input type="checkbox" name="film[]" value="Anime">Anime
	<input type="checkbox" name="film[]" value="Thrilller">Thrilller
	<input type="checkbox" name="film[]" value="Animasi">Animasi<br>
	Tempat Tujuan Travelling :<input type="checkbox" name="wisata[]" value="Bali">Bali
	<input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat
	<input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan
	<input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung
	<input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo<br>
	<input type="submit" name="submit" value="Kirim">
</form>

<?php
	if (isset($_POST['submit'])) {
		$gambar = $_FILES['gambar']['name'];
		$hobi = $_POST['hobi'];
		$film = $_POST['film'];
		$wisata = $_POST['wisata'];

		echo "<img src='$gambar'><br>";
		foreach ($hobi as $hobi) {
			echo "Hobi: $hobi<br>";
		}
		foreach ($film as $film) {
			echo "Film : $film<br>";
		}
		foreach ($wisata as $wisata) {
			echo "Tempat tujuan wisata travelling : $wisata<br>";
		}
	}
?>