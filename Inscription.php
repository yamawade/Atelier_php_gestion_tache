<!DOCTYPE html>
<html>
<head>
    <title>Interface d'Inscription et d'Authentification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgray;
        }

        #title {
            background-color: #4CAF50;
            color: white;
            padding: 20px 0;
            font-size: 24px;
            margin-bottom: 10px;
            /* margin-top: 0px; */
            text-align: center;
        }

        #forms-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color:white;
            width: 50%;
            margin-left: 25%;
            padding-right: 2%;
        }

        .form {
            border-radius: 10px;
            padding: 20px;
            width: 45%;
            background-color: white;
        }

        .form-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-separator {
            border-right: 3px solid #4CAF50;
            height: 400px;
            margin-left: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            text-align: left;
        }
        #authentification-form{
            margin-top: -18%;
        }
    </style>
</head>
<body>
    <h1 id="title">Création de Compte et Connexion</h1>
    <div id="forms-container">
        <div class="form" id="inscription-form">
            <h2>Créer un Compte</h2>
            <form method="post" action="">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password">
                <label for="confirmation">Confirmation</label>
                <input type="password" id="confirmation" name="confirmation">
                <button class="form-button" type="submit" name="btnCreation">S'inscrire</button>
            </form>
        </div>

        <div class="form-separator"></div>

        <div class="form" id="authentification-form">
            <h2>Connexion</h2>
            <form method="post" action="traitement.php">
                <label for="auth-email">Email</label>
                <input type="email" id="auth-email" name="emailAuth">
                <label for="auth-password">Mot de passe</label>
                <input type="password" id="auth-password" name="passwordAuth">
                <button class="form-button" type="submit" name="btnAuthentification">S'authentifier</button>
            </form>
        </div>
    </div>



    <?php
        include('bd.php');
        global $BD;
        $regexName='/^[a-z]{2,20}$/i';
        $regexMail='/^[a-zA-Z.+_à0-9]+@[-0-9a-zA-Z.+_]+.[a-z]{2,4}/';
        //INSCRIPTION UTILISATEUR
        if(isset($_POST['btnCreation'])){
            $nom=$_POST['nom'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $passwordConf=$_POST['confirmation'];
            $verif="SELECT * FROM utilisateur WHERE email_utilisateur='$email'";
            $ver=$BD->query($verif)->fetch();
            if(empty($nom) || empty($email) || empty($password) || empty($passwordConf)){
                echo "Veuillez renseignez tous les champs !";
            }elseif(!(preg_match($regexName, $nom))){
                echo "Nom Invalide !";
            }elseif($password != $passwordConf){
                echo "Les mot de passe saisies ne sont pas pareils !";
            }elseif($ver){
                echo "Ce mail exite deja choisissez un autre";
            }elseif(!(preg_match($regexMail, $email))){
                echo "Entrer un mail valide !";
            }elseif(strlen($password)<8){
                echo "Entrer un mot de passe de 8 caracteres au moins !!";
            }else{
                $insert="INSERT INTO utilisateur(nom_utilisateur,email_utilisateur,password_utilisateur,conf_password) 
                VALUES('$nom','$email','$password','$passwordConf')";
                $BD->query($insert);

                if($insert){
                    echo "Votre Inscription a bien ete pris en compte !";
                }
            }  
        }

    ?>
</body>
</html>
