<?php
$bdd = new PDO('mysql:host=localhost;dbname=waldi.fiaga_db;charset=utf8', 'root', '');
if(isset($_POST['envoi'])){
    if(!empty($_POST['nom_utilisateur']) AND !empty($_POST['email']) AND !empty($_POST['mot_de_passe'])){
        $nom_utilisateur = htmlspecialchars($_POST['nom_utilisateur']);
        $email = htmlspecialchars($_POST['email']);
        // sha1 = mdp caché dans la bdd
        $mot_de_passe = sha1($_POST['mot_de_passe']);
        $insertUser = $bdd->prepare('INSERT INTO wf_locataire(nom_utilisateur, email, mot_de_passe) VALUES(?, ?, ?)');
        $insertUser->execute(array($nom_utilisateur, $email, $mot_de_passe));
    } else {
        echo "Veuillez compléter tous les champs.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="">
        <h2 class="text-center">Inscription</h2>
        <label for="nom_utilisateur">Nom d'utilisateur :</label> <br>
        <input type="text" name="nom_utilisateur" autocomplete="off">
        <br/>
        <label for="email">Adresse email :</label> <br>
        <input type="email" name="email" autocomplete="off">
        <br/>
        <label for="mot_de_passe">Mot de passe :</label> <br>
        <input type="password" name="mot_de_passe" autocomplete="off">
        <br/><br/>
        <input type="submit" name="envoi">
    </form>
</body>
</html>
