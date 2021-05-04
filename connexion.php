
<?php
session_start();                                                 //Déclarer la session qui va permettre d'echanger sur toutes les pages
if(isset($_POST['valider'])){                                   //lorsque l'utilisateurs click sur le bouton 'submit' le code va s'éxecuter
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){         //Si la variable 'pseudo' et 'mdp' ne sont pas vide le code s'éxecute
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "admin667";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location:board.php');                                    //la session'mdp' va correspondre au mdp saisi par l'utilisateur
        }else{
            echo "mot de passe ou pseudo incorrect";
        }
    }else{                                                                           //Sinon un message d'error s'affiche
        echo "Veuillez confirmer tous les réglages..";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace de connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    <form method="Post" action="">
      <input type="text" name="pseudo" autocomplete="off">
      <br>
      <input type="password" name="mdp">
      <br><br>
      <input type="submit" name="valider">
    </form>
    
</body>
</html>