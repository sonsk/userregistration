<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');

$name=$_POST['user'];
$pass=$_POST['password'];

$req = "select * from usertable where name='$name'";  /*ici la requete selectionne tout les noms de la table name*/
$result = mysqli_query($con,$req);   /* $result prend en compte tout ces noms*/

$num=mysqli_num_rows($result);  /* mysqli_num_rows va compter l'apparition de chaque nom dans la table name que $result a retourner*/
if($num == 1 ){                 /* si un nom apparait déjà une fois alors le nom d'utilisateur est déjà pris sinon l'enregistrement peut
                                  continuer*/
    echo"<h1> username already taken</h1>";
}else{
    $reg=" insert into usertable (name, password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo"<h1> Registration successful</h1>";
}
?>