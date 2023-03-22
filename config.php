<?php 
    define('HOST' , 'localhost');
    define('USER' , 'root');
    define('PASS' , '');
    define('BASE' , 'CRUD');

    $conn = new mysqli(HOST, USER, PASS, BASE);


    if ($conn->connect_error) {
        echo "Falha na conexão com o banco de dados: "  ;
    } else{
        echo "ok TA FUNCIONANDO AQUI NO CONFIG.PHP!" ;
    }

?>

  