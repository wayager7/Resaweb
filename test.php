<?php

include "database.php";

function rechercheUser($conn,$id){
    // Exécution de la requête SQL
$sql = "SELECT * FROM wf_locataire WHERE id=$id";
$result = mysqli_query($conn, $sql);

// Traitement des résultats
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row['id'];
    }
} else {
    echo "0 results";
}
}

$conn=join_database();
$id=5;
rechercheUser($conn,$id);

function createUser($conn,$nom,$prenom){
    $sql ="INSERT INTO wf_locataire(nom_utilisateur,email) VALUES('$nom', '$prenom')";
    $result = mysqli_query($conn,$sql);
    if ($result==TRUE){
        echo 'ok';
    }
    else{
        echo 'pas bien';
    }
}

createUser($conn,"adda","moufassem");
createUser($conn,"sumbul","moamad");
createUser($conn,"aupercyl","abdoulaille");
createUser($conn,"riliw","kalawitaw");

?> 