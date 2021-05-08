<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
function connexionbd(){
$serveur='127.0.0.1';
$utilisateur='root';
$motdepasse='';
$connect= new PDO("mysql:host=".$serveur.";dbname=sofia",$utilisateur,$motdepasse);
if($connect){
	return $connect;
}else{
	return false;
}
}
 ?>
</body>
</html>
