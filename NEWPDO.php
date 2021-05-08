<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
</head>

<body>
<?php
try{
if connexionbdd = new PDO("mysql:host=localhost;dbname=sofia","root","");
}
catch(Execption $exc){
    echo $exc->getTraceAsString();
    exit();
  }

if ( isset($_POST['VALIDER'])){
$nm=$_POST['nom'];
$pren=$_POST['prenom'];
$nm=$_POST['nom'];
$daten=$_POST['datenaiss'];
$lnaiss=$_POST['lieunaiss'];
$mail=$_POST['email'];
$adress=$_POST['adresse'];
$nat=$_POST['nationalite'];
$tel=$_POST['telephone'];
$prof=$_POST['profession'];
$genr=$_POST['genre'];
$sitmat=$_POST['sitmatr'];
$ms=$_POST['maladie'];
$tpemal=$_POST['typemaladie'];
$taitement=$_POST['traitmt'];
$tptrmen=$_POST['typetraitmt'];
$cmplik=$_POST['complic'];
$dinscrip=$_POST['dateinscrip'];

$req=$connect->prepare("INSERT INTO s_vaccin VALUES(:nom,:prenom,:date_naiss,:lieu_naiss,:email,:adress,:nationalite,:genre,:telephone,:profession,:situation_matri,:date_inscription,:maladie,:typemaladie,:traitement,:typetraitement,:complication)");
if($req->exec(array('nom'=>$nm,'prenom'=>$pren,'date_naiss'=>$daten,'lieu_naiss'=>$lnaiss,'email'=>$mail,'adress'=>$adress,'nationalite'=>$nat,'genre'=>$genr,'telephone'=>$tel,'profession'=>$prof,'situation_matri'=>$sitmat,'date_inscription'=>$dinscrip,'maladie'=>$ms,'typemaladie'=>$tpemal,'traitement'=>$traitement,'typetraitement'=>$tpetrmen,'complication'=>$complik))){
echo 'enr�gistrement effectu�!!!';
}else{
echo " echec d'enr�gistrement";
}
}
}
 ?>
</body>
</html>















</body>
</html>
