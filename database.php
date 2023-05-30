<?php 

function join_database(){
    $dbpath="localhost";
    $db_login="root"; 
    $db_password=""; 
    $db_name="waldi.fiaga_db";
    $Database = mysqli_connect($dbpath,$db_login,$db_password, $db_name);
    if ($Database -> connect_errno) {
    echo "Failed to connect to MySQL: " . $Database -> connect_error;
    exit();
    }
    return $Database;
}
join_database();

function close_conexion($conn){
// Fermeture de la connexion
mysqli_close($conn);
}

?>