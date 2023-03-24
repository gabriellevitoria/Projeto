<?php
include_once("config.php");

try {
    switch ($_REQUEST["acao"]) { //recebe ações enviadas
        case "cadastrar":

            //recepção dos dados com variáveis  
            $nome = $_POST["nome"];
            $data_nasc = $_POST["data_nasc"];
            $CPF = $_POST["CPF"];
            $celular = $_POST["celular"];
            $email = $_POST["email"];
            $endereco = $_POST["endereco"];
            $observacao = $_POST["observacao"];

            // echo $nome, $data_nasc, $CPF, $celular, $email, $endereco, $observacao;

            //criando sql -> insere dentro da tabela cliente os seguintes campos e preenche os valores 

            $sql = "INSERT INTO CLIENTE  
                ( 
                    nome, 
                    data_nasc, 
                    CPF, 
                    celular, 
                    email, 
                    endereco, 
                    observacao 
                ) 
                VALUES
                (
                    '$nome' ,
                    '$data_nasc', 
                    '$CPF', 
                    '$celular', 
                    '$email', 
                    '$endereco', 
                    '$observacao'
                )";
            //variavel de resultado que passa pela conexão (config.php)

            if ($conn->query($sql)) {
                print "<script>alert('Dados inseridos com sucesso!');</script>";
                print "<script>location.href = 'index.php';</script>";
                
            } else {
                print "<script>alert('Não foi possível adicionar as informações');</script>";
                print "<script>location.href = 'index.php';</script>";
            }



            // Fecha a conexão com o banco de dados
            $conn->close();

            break;

        case "editar":

            $nome = $_POST["nome"];
            $data_nasc = $_POST["data_nasc"];
            $CPF = $_POST["CPF"];
            $celular = $_POST["celular"];
            $email = $_POST["email"];
            $endereco = $_POST["endereco"];
            $observacao = $_POST["observacao"];

            $sql = "UPDATE CLIENTE SET
                        nome = '{$nome}',
                        data_nasc = '{$data_nasc}',
                        CPF = '{$CPF}',
                        celular = '{$celular}',
                        email = '{$email}',
                        endereco = '{$endereco}',
                        observacao = '{$observacao}'
                    WHERE 
                        id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if ($conn->query($sql)) {
                print "<script>alert('Dados editados com sucesso!');</script>";
                print "<script>location.href = 'ordenar-usuario.php';</script>";
                
            } else {
                print "<script>alert('Não foi possível editar as informações');</script>";
                print "<script>location.href = 'index.php';</script>";
            }

            break;

        case "excluir":
            $sql = "DELETE FROM CLIENTE WHERE id=".$_REQUEST ["id"]; 

            $res = $conn->query($sql);

            if ($res) {
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href = 'ordenar-usuario.php';</script>";
                
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href = 'index.php';</script>";
            }


            break;
    }
} catch (\Throwable $t) {
    print_r($t);
    exit;
}
