<?php
        $regexName='/^[a-z]{2,20}$/i';
        $idUser= $_SESSION['id_utilisateur'];
        if(isset($_POST['btnAjouter'])){
            $title= $_POST['title'];
            $priotite = $_POST['priorite'];
            $statut = $_POST['statut'];
            $date_echeance = $_POST['date_echeance'];
            $desc = $_POST['desc'];
            // $idUser= $_SESSION['id_utilisateur'];
           

            if(empty($title) || empty($priotite) || empty ($statut) || empty($date_echeance) || empty($desc)){
                echo "Veuillez renseigner tous les champs";
            }elseif (!preg_match($regexName,$title)) {
                echo "Entrer un nom de tache valide !";
            }else{
                $tache="INSERT INTO  tache(titre,priorite,statut,Description,date_echeance,id_utilisateur) VALUES ('$title','$priotite','$statut','$desc','$date_echeance',$idUser)";
                $BD->query($tache);
                echo "Enregistrement reussi !!";

            }
        }
        $recupTache="SELECT id_tache,titre,priorite,statut,Description,date_echeance FROM tache WHERE id_utilisateur=$idUser";
        $task=$BD->query($recupTache)->fetchAll();
       
        echo "<br>";
        foreach($task as $t){
            echo "<center>";
            echo "<div style='background-color:#fff; width: 600px;'>";
            echo "<h1>".$t['titre']."</h1>";
            echo "<p>".$t['Description']."</p>";
            echo "<h3 style='color:red;'>"."Priorite : ".$t['priorite']."</h3>";
            echo "<h3 style='color:green;'>"."Statut : ".$t['statut']."</h3>";
            echo "<a href='Detail.php?id=$t[id_tache]&nom=$t[titre]&priorite=$t[priorite]&statut=$t[statut]&desc=$t[Description]' type='submit' style='color:#fff;background-color:green; '>"."VOIR DETAILS"."</a>";
            echo "</div>";
            echo "</center";
        }
    ?>