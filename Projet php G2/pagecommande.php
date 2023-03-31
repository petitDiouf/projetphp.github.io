<?php
session_start();

if(!$_SESSION['password']){
    header('location:connexion.php');
}

require_once 'connect.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<div>
    <button class="btn btn-sm btn-danger mt-5 "><a style="color:white" href="index.php">Deconnexion</a></button>
</div>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Prenom Nom</th>
                        <th>Lieu de Livraison</th>
                        <th>Email</th>
                        <th>Commande</th>
                    </tr>
                </thead>
                <?php 
                
                
               $select = 'SELECT * FROM commande';
               $prepare = $bdd->prepare($select);
               $prepare->execute();
               $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
               foreach($result as $aff){ 
                    ?>
                    <tbody>
                        <tr>
                            <td><?=  $aff['id']?></td>
                            <td><?= $aff['prenom']?></td>
                            <td><?=  $aff['lieulivraison']?></td>
                            <td><?= $aff['email']?></td>
                            <td><?= $aff['commande']?></td>                            
                        </tr>
                    </tbody>
                    <?php
                }                
                ?>
            </table>
        </div>
    </div>
   

</body>
</html>