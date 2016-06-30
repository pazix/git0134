<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>
		
	</div>
</body>
</html>
<?php 

$file = fopen("texte.txt", "r");
var_dump(fread($file,filesize("texte.txt")));
fclose($file);
$file= fopen("texte.log", "w+");
fwrite($file, "Mon contenu");
fclose($file);

?>