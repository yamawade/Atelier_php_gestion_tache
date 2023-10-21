<?php
session_start();
include('bd.php');
global $BD;   
if(isset($_POST['btnAuthentification'])){
    $emailConnect=$_POST['emailAuth'];
    $passwordConnect=$_POST['passwordAuth'];

    if(empty($emailConnect) || empty($passwordConnect)){
        echo "Veuillez renseignez tous les champs";
    }else{
        $connect="SELECT * FROM utilisateur WHERE email_utilisateur='$emailConnect'AND password_utilisateur='$passwordConnect'";
        $save=$BD->query($connect)->fetch();

        if($save){
            $con="SELECT id_utilisateur,nom_utilisateur FROM utilisateur WHERE email_utilisateur='$emailConnect'AND password_utilisateur='$passwordConnect'";
            $test=$BD->query($con)->fetch();

            echo "Connexion reussi !😊 Bienvenue ".$test['nom_utilisateur'];
            $_SESSION['email']=$test['email'];
            $_SESSION['password']=$test['password'];
            $_SESSION['nom_utilisateur']=$test['nom_utilisateur'];
            $_SESSION['id_utilisateur']= $test['id_utilisateur'];
            header('location:tache.php');
        }else{
            echo "email et/ou mot de passe incorrect !😮";
        }
    }
}

?>