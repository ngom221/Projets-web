<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sujet</title>
<style type="text/css">
<!--
.Style1 {
	font-size: 36px;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<?php
	include('configuration/connexion.php');
?>
<body>
<?php
$connect=connexionbd();
$recup=$_GET['idsujet'];
if ($connect!=false){
$req= 'SELECT * from s_vaccine where idsujet='.$_GET['idsujet'].'';
$rech=$connect->prepare($req);
$rech->execute();
$tab=$rech->fetch();
}
?>
<div align="center" class="Style1">MES INFORMATIONS </div>
<table width="392" border="0" align="right">
  <tr>
    <td width="165">Prenom : </td>
    <td width="217"><?php echo $tab['prenom']; ?></td>
  </tr>
  <tr>
    <td>Nom : </td>
    <td><?php echo $tab['nom']; ?></td>
  </tr>
  <tr>
    <td>Date naissance : </td>
    <td><?php echo $tab['date_naiss']; ?></td>
  </tr>
  <tr>
    <td>Lieu naissance : </td>
    <td><?php echo $tab['lieu_naiss']; ?></td>
  </tr>
  <tr>
    <td>Adresse : </td>
    <td><?php echo $tab['adress']; ?></td>
  </tr>
  <tr>
    <td>Genre : </td>
    <td><?php echo $tab['genre']; ?></td>
  </tr>
  <tr>
    <td>E-mail : </td>
    <td><?php echo $tab['email']; ?></td>
  </tr>
  <tr>
    <td>T&eacute;l&eacute;phone : </td>
    <td><?php echo $tab['telephone']; ?></td>
  </tr>
  <tr>
    <td>Nationalit&eacute; : </td>
    <td><?php echo $tab['nationalite']; ?></td>
  </tr>
  <tr>
    <td>CNI ou Passport : </td>
    <td><?php echo $tab['cni_pasport']; ?></td>
  </tr>
  <tr>
    <td>Situation matrimoniale : </td>
    <td><?php echo $tab['situation_matri']; ?></td>
  </tr>
  <tr>
    <td>maladie : </td>
    <td><?php echo $tab['maladie']; ?></td>
  </tr>
  <tr>
    <td>Type maladie : </td>
    <td><?php echo $tab['typemaladie']; ?></td>
  </tr>
  <tr>
    <td>Traitement : </td>
    <td><?php echo $tab['traitement']; ?></td>
  </tr>
  <tr>
    <td>Type traitement : </td>
    <td><?php echo $tab['typetraitement']; ?></td>
  </tr>
  <tr>
    <td>Complication : </td>
    <td><?php echo $tab['complication']; ?></td>
  </tr>
  <tr>
    <td>Date d'inscription : </td>
    <td><?php echo $tab['date_inscription']; ?></td>
  </tr>
  
</table>

<div align="right"></div>
</body>
</html>
