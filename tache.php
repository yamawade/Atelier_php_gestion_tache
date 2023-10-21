<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        background-color: lightgray;
    }
    #title {
        background-color: #4CAF50;
        color: white;
        padding: 20px 0;
        font-size: 24px;
        margin-bottom: 10px;
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        text-align: left;
        margin-left:50px;
    }

    input {
        width: 500px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left:50px;
    }
    .form-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left:50px;
    }
    select{
        width: 500px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left:50px;
    }
    textarea{
        width: 500px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-left:50px;
    }
    .formulaire{
        background-color: #fff;
        width: 600px;
        margin-left:400px;
    }
    #tache{
        margin-left:100px;
    }
</style>
<body>
    <h1 id="title">
        GESTION DES TACHES   
        <?php 
            include('traitement.php');
            echo "<br>";
            echo "Bienvenue ".$_SESSION['nom_utilisateur']." 😊";
        ?>
    </h1>
    <form action="" method="post" class="formulaire">
        <h1 id="tache">Ajouter Une Nouvelle tache</h1>
        <Label>Title</Label>
        <input type="text" name="title" id="">
        <label for="">Priorité</label>
        <select name="priorite" id="">
            <option value="">..........Choisissez une priorite.........</option>
            <option value="Haute">Haute</option>
            <option value="Moyenne">Moyenne</option>
            <option value="Basse">Basse</option>
        </select>
        <label for="">Statut</label>
        <select name="statut" id="">
            <option value="">..........Choisissez un statut.........</option>
            <option value="En attente">En attente</option>
            <option value="En cours">En cours</option>
            <option value="Terminer">Terminer</option>
        </select>
        <label for="">Date Echeance</label>
        <input type="date" name="date_echeance" id="">
        <label for="">Description</label>
        <textarea name="desc" id="" cols="30" rows="10"></textarea>
        <button class="form-button" type="submit" name="btnAjouter">Ajouter</button>
    </form>
    
    <?php
        include('TraitementTache.php');
    ?>

   
</body>
</html>
