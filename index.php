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
// pour lire  un fichier 
$file = fopen("texte.txt", "r");
var_dump(fread($file,filesize("texte.txt")));
fclose($file);
// pour ecrire dans un fichier 
$file= fopen("texte.log", "a");
fwrite($file, date("Y-m-d H:i:s").": le script a été ouvert\r\n");
fclose($file);
// fonctions équivalentes
$content = file_get_contents("texte.log");
$content .= date("Y-m-d H:i:s").": FCP le script a été ouvert\r\n";
file_put_contents("texte.log", $content);

// pour supprimer un fichier
//unlink("text.log");

// vérifier si un fichier existe ou non
if(file_exists("texte.log")){
	echo "Le Fichier de log existe"
}

// vérifier si un repertoire var existe
if(!is_dir('var')){
	mkdir('var');
}
?>