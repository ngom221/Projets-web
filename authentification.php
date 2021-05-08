<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>authentification</title>
<style type="text/css">
<!--
.Style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 36px;
	font-weight: bold;
	font-style: italic;
}
.Style4 {font-size: 18px; font-style: italic; font-weight: bold; }
-->
</style>
</head>
<?php
	include('configuration/connexion.php');
?>
<body>
<div align="center" class="Style1">AUTHENTIFICATION</div>
<form action="authentification.php" method="post">
<table width="336" border="0" align="center">
  <tr>
    <td width="135" height="40"><span class="Style4">Login* : </span></td>
    <td width="191"><label>
      <input type="text" name="login" />
    </label></td>
  </tr>
  <tr>
    <td height="42"><span class="Style4">Mot de passe* : </span></td>
    <td><label>
      <input type="password" name="mtpasse" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label>
      <div align="center">
        <input name="conx" type="submit" class="Style4" id="conx" value="Se connecter" />
        </div>
    </label></td>
    </tr>
</table>
</form>
<?php
if (isset($_POST['conx'])){
$log=$_POST['login'];
$mtp=$_POST['mtpasse'];
$connect=connexionbd();
if ($connect!=false){
$req="SELECT idsujet from s_vaccine where s_vaccine.login='$log' and s_vaccine.motpasse='$mtp'";
$rech=$connect->prepare($req);
$rech->execute();
if($rech->rowcount()){
$recupID=$rech->fetch();

header('location:sujet.php?idsujet='.$recupID["idsujet"].'');
} else{

echo'<font color="red"><b><center>Login ou mot de passe incorrect</center></b></font>';
  exit();
}
}
}
 ?>
</body>
</html>
