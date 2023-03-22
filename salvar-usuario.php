<?php 
    switch($_REQUEST ["acao"]){ //recebe ações enviadas
        case "cadastrar":

            //recepção dos dados com variáveis 

            $nome = $_POST ["nome"];
            $data_nasc = $_POST ["data_nasc"];
            $CPF = $_POST ["CPF"];
            $celular = $_POST ["celular"];
            $email = $_POST ["email"];
            $endereco = $_POST ["endereco"];
            $observacao = $_POST ["observacao"];

            //criando sql -> insere dentro da tabela cliente os seguintes campos e preenche os valores 

            $sql = "INSERT INTO CLIENTE ( nome, data_nasc, CPF, celular, email, endereco, observacao ) VALUES('{$nome}' ,'{$data_nasc}', '{$CPF}', '{$celular}', '{$email}', '{$endereco}', '{$observacao}')";
            
            //variavel de resultado que passa pela conexão (config.php)
            $res = $conn -> query($sql);

            break;

        case "editar":

            break;

        case "exluir":

            break;
    }

?>