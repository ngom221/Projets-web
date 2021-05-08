<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inscriptions</title>
<style type="text/css">
<!--
.Style1 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
	font-style: italic;
	font-size: 36px;
}
-->
</style>
</head>
<?php
	include('configuration/connexion.php');
?>
<body>
<div align="center" class="Style1">
  <p>INSCRIPTIONS DU SUJET</p>
  <p></p>
</div>
<form action="inscriptions.php" method="post">
<table width="473" border="0" align="center">
  <tr>
    <td width="283">Prenom* : </td>
    <td width="172"><label>
      <input name="prenom" type="text" id="prenom" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Nom* : </td>
    <td><label>
      <input name="nom" type="text" id="nom" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Date de naissance* : </td>
    <td><label>
      <input name="datenaiss" type="date" id="datenaiss" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Lieu de naissance* : </td>
    <td><label>
      <input name="lieunaiss" type="text" id="lieunaiss" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Adresse* : </td>
    <td><label>
      <input name="adresse" type="text" id="adresse" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>E-mail : </td>
    <td><label>
      <input name="email" type="text" id="email" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>T&eacute;l&eacute;phone* : </td>
    <td><label>
      <input name="telephone" type="text" id="telephone" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Profession* : </td>
    <td><label>
      <input name="profession" type="text" id="profession" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Genre* : </td>
    <td><label>
      <select name="genre" id="genre">
        <option value="masculin">masculin</option>
        <option value="feminin">feminin</option>
      </select>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>date d'inscription* : </td>
    <td><label>
      <input type="date" name="dateinscrip" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Nationalit&eacute;* : </td>
    <td><label>
      <input type="text" name="nationalite" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Situation matrimoniale* : </td>
    <td><label>
      <select name="sitmatr" id="sitmatr">
        <option value="celibataire">celibataire</option>
        <option value="marie">mari&eacute;</option>
        <option value="divorce">divorc&eacute;</option>
        <option value="veuf(ve)">veuf(ve)</option>
      </select>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Avez-vous une maladie &agrave; signaler ? </td>
    <td><label>
      <select name="maladie" id="maladie">
        <option value="oui">oui</option>
        <option value="non">non</option>
      </select>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Si oui laquelle ? </td>
    <td><label>
      <input name="typemal" type="text" id="typemal" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Suivez-vous un traitement ? </td>
    <td><label>
      <select name="traitmt" id="traitmt">
        <option value="oui">oui</option>
        <option value="non">non</option>
      </select>
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Si oui lequel ? </td>
    <td><label>
      <input name="typetraitmt" type="text" id="typetraitmt" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td>Avez vous eu des complications suite &agrave; ce traitement ? </td>
    <td><label>
      <input name="complic" type="text" id="complic" />
      <br />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input name="VALIDER" type="submit" id="VALIDER" value="VALIDER" />
        </div>
    </label></td>
    </tr>
</table>
</form>

<?php
if(isset($_POST['VALIDER'])){

$connect=connexionbd();
if ($connect!=false){
$nm=$_POST['nom'];
$pren=$_POST['prenom'];
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
$tpemal=$_POST['typemal'];
$traitement=$_POST['traitmt'];
$tptrmen=$_POST['typetraitmt'];
$cmplik=$_POST['complic'];
$dinscrip=$_POST['dateinscrip'];
/*$connect->prepare*/
$req="INSERT INTO s_vaccine VALUES('','$nm','$pren','$daten','$lnaiss','$mail','$adress','$nat','$genr','$tel','$prof','$sitmat','$dinscrip','$ms','$tpemal','$traitement','$tptrmen','$cmplik')";
if($connect->exec($req)){
/* $last_idsujet = $connect->lastInsertId();*/
echo 'enrégistrement effectué!!!';
}else{
echo " echec d'enregistrement";
}
}else{
echo 'echec connexion';
}
}
 ?>
</body>
</html>
