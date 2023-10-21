<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="card-header text-center text-white col-md-8 offset-2" style="background-color:green; height:50px;">
        CREATION COMPTE
    </div>
    
        <!-- INSCRIPTION -->
        <div class="card  offset-4">
            <form action="" method="post">
                <div class="card-body">
                    <label for="">Nom Utilisateur</label>
                    <input type="text" name="nom" class="form-control">
                    <label for="">Addresse Mail</label>
                    <input type="text" name="email" class="form-control">
                    <label for="">Mot De Passe</label>
                    <input type="text" name="mdp" class="form-control">
                    <label for="">Confirmation Mot De Passe</label>
                    <input type="text" name="Confmdp" class="form-control">
                    <button name="btnCreation" type="submit" class="btn mt-2  text-white" style="background-color:green;">Enregistrer</button>
                </div>
            </form>
        </div>
        
        
        <!-- Connexion -->
        
        <div class="card col-md-6 offset-2">
            <form action="" method="post">
                <div class="card-body">
                    <label for="">Nom Utilisateur</label>
                    <input type="text" name="nom" class="form-control">
                    <label for="">Mot De Passe</label>
                    <input type="text" name="mdp" class="form-control">
                    <button name="btnConnexion" type="submit" class="btn mt-2 text-white" style="background-color:green;">Connexio</button>
                </div>
            </form>
        </div>
        
   
    
</body>
</html>