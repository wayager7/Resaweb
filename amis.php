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

// Exécuter une requête SQL SELECT sur la table "wf_amis"
$sql = "SELECT * FROM wf_amis";
$result = mysqli_query($conn, $sql);

// Vérifier si la requête a retourné des résultats
if (mysqli_num_rows($result) > 0) {
    // Boucler à travers les résultats et afficher les données
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID : " . $row["id"] . " - Nom : " . $row["prenom_ami"] . " - classe : " . $row["classe_ami"] . "<img src='" . $row["image_ami"] . "'><br>";
    }
} else {
    echo "Aucun résultat trouvé";
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
