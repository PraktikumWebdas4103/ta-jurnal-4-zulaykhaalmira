<form action="proses.php" method="POST">
	Username <input type="text" name="nama[]"><br>
	Password <input type="text" name="pass[]"><br/>
	<input type="submit" name="submit" value="Login">
</form>

<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$pass = $_POST['pass'];
	}
?>