<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['user'];
$pass=$_POST['password'];

$req = "select * from usertable where name='$name' && password='$pass'";  /*ici la requete selectionne tout les noms de la table name et leurs mot de passe*/
$result = mysqli_query($con,$req);   /* $result prend en compte tout ces noms et leurs mot de passe*/

$num=mysqli_num_rows($result);  /* mysqli_num_rows va compter l'apparition de chaque nom dans la table name que $result a retourner*/
if($num == 1 ){                 /*si un nom apparait déjà une fois alors  vous etes connecté*/

 echo"<h1>login successfull</h1>";
}else{
    echo"<h1>sorry</h1>";
}
?>
