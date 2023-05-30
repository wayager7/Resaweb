<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "waldi.fiaga_db";

// // Établir une connexion à la base de données
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Vérifier si la connexion a réussi
// if (!$conn) {
//     die("La connexion à la base de données a échoué : " . mysqli_connect_error());
// }

// // // Exécuter une requête SQL SELECT sur la table "wf_amis"
// // $sql = "SELECT * FROM wf_amis";
// // $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" href="acc.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Kdam+Thmor+Pro&family=Poppins:wght@300&family=Rubik+Pixels&family=Ubuntu:wght@500&display=swap" rel="stylesheet">   
</head>
<body>
    <header>
        <nav class="nvbr">
            <a href="" class="elemnav" id="oui">accueil</a>
            <a href="amis.php"class="elemnav" id="non">mes amis</a>
            <a href="contactes.html" class="elemnav" id="non">contactes</a>
            <a href="a_propos.html" class="elemnav" id="non">à propos</a>
        </nav>
    </header>
    <main>
        <div class="search">
            <form action="">
                <input type="text" name="recherche" autocomplete="on">
                <select name="choix">
                    <option value="option1">tous</option>
                    <option value="option2">x</option>
                    <option value="option3">y</option>
                    <option value="option4">z</option>
                </select>
            </form>
        </div>
        <div class="elem">
            <h2>meilleurs propositions du moment</h2>
            <a href='amis.php'>voir les amis ?</a>
            <div class="amis">
                <div class="info">
                    <?php 
                    // connection bdd
                    require_once 'bdd.php';

                    // Récupérer les données en fonction de l'ID
                    $id1 = 1; // ID à récupérer
                    $id2 = 2; // ID à récupérer
                    $sql = "SELECT * FROM wf_amis WHERE id = $id1 OR id = $id2";
                    $result = mysqli_query($conn, $sql);

                    // Vérifier si la requête a retourné des résultats
                    if (mysqli_num_rows($result) > 0) {
                        // Afficher les données
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='ami' id='".$row["prenom_ami"]."'> <h3>Nom : " . $row["prenom_ami"] . "</h3>";
                            echo "<h3>classe : " . $row["classe_ami"] . "</h3>";
                            echo "<div><p>". $row["description_ami"] ."<P></div></div>";
                            // echo "<img src='".$row["image_ami"] ."' alt='' class='amiphoto'></div>";
                            echo '<style>
                                #'.$row["prenom_ami"] .'{
                                    background-image: url(' . $row["image_ami"] . '); 
                                    background-position: center; 
                                    background-size: cover; 
                                    background-repeat: no-repeat; 
                                }
                                </style>';
                        }
                    } else {
                        echo "erreur avec l'ID $id1 et $id2";
                    }
                    ?>
                </div>
                <div class="info"> 
                    <?php 
                    // connection bdd
                    // require_once 'bdd.php';
                    
                    // Récupérer les données en fonction de l'ID
                    $id1 = 5; // ID à récupérer
                    $id2 = 15; // ID à récupérer
                    $sql = "SELECT * FROM wf_amis WHERE id = $id1 OR id = $id2";
                    $result = mysqli_query($conn, $sql);

                    // Vérifier si la requête a retourné des résultats
                    if (mysqli_num_rows($result) > 0) {
                        // Afficher les données
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='ami' id='".$row["prenom_ami"]."'> <h3>Nom : " . $row["prenom_ami"] . "</h3>";
                            echo "<h3>classe : " . $row["classe_ami"] . "</h3></div>";
                            // echo "<img src='".$row["image_ami"] ."' alt='' class='amiphoto'></div>";
                            echo '<style>
                                #'.$row["prenom_ami"] .'{
                                    background-image: url(' . $row["image_ami"] . '); 
                                    background-position: center; 
                                    background-size: cover; 
                                    background-repeat: no-repeat;  
                                }
                                </style>';
                        }
                    } else {
                        echo "Aucun résultat trouvé pour l'ID $id1 et $id2";
                    }
                    // Fermer la connexion à la base de données
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
<?php

?>