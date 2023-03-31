<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>conect-admin</title>
    <style>
        .container{
            width: fit-content;
            position: relative;
            margin-block: 1rem;
            margin-top: 150px;
            display: center;
            justify-content: center;
        }
        .form-floating1 {
            display: block;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <form action="traitement.php" method="post">
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Mot de Passe</label>
            </div>
            <div class="form-floating1">
                <button class="btn btn-primary mt-3" name="connexion" >Connexion</button>
            </div>
        </form>
    </div>
    
</body>
</html>