<h1 class="titulo">Listar Usuários</h1>;

<?php 

include_once("config.php");
$sql = "SELECT * FROM CLIENTE";

$res = $conn-> query($sql); //conexão executando query
    
$qtd = $res-> num_rows; //quantidade de resultados --> pega o número de linhas (rows) da quantidade de resultados

if($qtd > 0){ //maior que 0 encontra os resultados

    /* var funciona como arrey que recebe do resultado um object que torna todos os dados retornados 
    da query  em objetos e armazena na variável. Posso trazer cada objeto apenas imprimindo ele */
    while($row = $res-> fetch_object()){
        print $row->id;
        print $row->nome;
        print $row->data_nasc;
        print $row->email;
        print $row->CPF;
        print $row->celular;
        print $row->endereco;
        print $row->observacap;

    }
}else{
    print "<p> Nenhum resultado foi encontrado! </p>;";
}
    
?>
