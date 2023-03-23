<?php 
    define('HOST' , 'localhost');
    define('USER' , 'root');
    define('PASS' , '');
    define('BASE' , 'CRUD');

    $conn = new mysqli(HOST, USER, PASS, BASE);

/* ------ Teste para ver se a conexão estava funcionando ------
    if ($conn->connect_error) {
        echo "Falha na conexão com o banco de dados: "  ;
    } else{
        echo "ok" ;
    } */

?>

  