<?php 

session_start();
require_once 'connect.php';

if(isset($_POST['connexion'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $select = "SELECT email, password FROM users WHERE email=?";
        $prepare = $bdd->prepare($select);
        $prepare->execute(array($email));
        $data = $prepare->fetch();
        $row = $prepare->rowCount();

        if($row = 1){
            if($data['password']===$password){
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                header('location:pagecommande.php');
            }else header('location:connexion.php');
        }else header('location:connexion.php');
    }else header('location:connexion.php');
}

?>