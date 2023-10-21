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
</style>
<body>
    <h1 id="title">
        DETAIL TACHE: 
        <?php 
            include('traitement.php');
            echo $_GET['nom'];
            echo "<br>";
            echo "Bienvenue ".$_SESSION['nom_utilisateur']." 😊";
        ?>
    </h1>
    <div style="background-color:#fff; width: 500px;margin-left:400px;">
        <h1><?php echo $_GET['nom'];?></h1>
        <h3 style="color:red;"><?php echo "Priorite: ".$_GET['priorite'];?></h3>
        <h3 style="color:green;"><?php echo "Statut: ".$_GET['statut'];?></h3>
        <p><?php echo $_GET['desc'];?></p>
        <div style="display:flex;">
            <form action="" method="post">
                <button type="submit" name="modifStatut" style="background-color:green;color:#fff;">Marquer Comme Terminer</button>
                <button type="submit" name="suppression" style="background-color:red;color:#fff; margin-left:10px;">Supprimer</button>
            </form>
        </div>
    </div>
    <a href="tache.php">Retour a la liste des taches</a>

    <?php
        $idTache=$_GET['id'];

        if(isset($_POST['suppression'])){
            $sup="DELETE FROM tache WHERE id_tache=$idTache";
            $BD->query($sup);

            echo "Suppression reussi !";
            header('location:tache.php');
        }

        if(isset($_POST['modifStatut'])){
            $modif="UPDATE tache SET statut='Terminer' WHERE id_tache=$idTache";
            $BD->query($modif);

            echo "Modification reussi !";
            header('location:tache.php');
        }
    ?>
</body>
</html>