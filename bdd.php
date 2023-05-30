<?php
// Connexion bdd (que je dois rappeller)
// $conn = mysqli_connect("localhost", "root", "", "waldi.fiaga_db");
?>

<?php
// try{
//     $bdd = new PDO('mysql:host=localhost;dbname=waldi.fiaga_db;charset=utf8','root','');
// }catch(Exception $e){
//     die('Erreur'.$e->getMessage());
// }
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waldi.fiaga_db";

// Établir une connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier si la connexion a réussi
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}
?>