<link rel="stylesheet" href="estilo-ordenar.css">
<h1 class="titulo">Listar Usuários</h1>

<?php 

include_once("config.php");
$sql = "SELECT * FROM CLIENTE";

$res = $conn-> query($sql); //conexão executando query
    
$qtd = $res-> num_rows; //quantidade de resultados --> pega o número de linhas (rows) da quantidade de resultados

if($qtd > 0){ //maior que 0 encontra os resultados

    print "<table class='table'>";
    print "<tr>";
    
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>E-mail</th>";
    print "<th>CPF</th>";
    print "<th>Celular</th>";
    print "<th>Endereço</th>";
    print "<th>Observação</th>";
    print "<th> Ações </th>";

    print "</tr>";
    
    /* var funciona como arrey que recebe do resultado um object que torna todos os dados retornados 
    da query  em objetos e armazena na variável. Posso trazer cada objeto apenas imprimindo ele */
    while($row = $res-> fetch_object()){
      
        print "<tr>";

        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->data_nasc."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->CPF."</td>";
        print "<td>".$row->celular."</td>";
        print "<td>".$row->endereco."</td>";
        print "<td>".$row->observacao."</td>";
        print "<td>
                <button onclick=\"location.href='editar.php?page=editar&id= ".$row->id."';\"
                 class ='button-editar'> Editar </button>


                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){
                    location.href='salvar-usuario.php?page=salvar&acao=excluir&id=".$row->id."';
                    }else{false;}
                \" 
                class ='button-excluir'> Excluir </button>

                </td>";

        print "</tr>";
    }
    print "</table";

}else{
    print "<p> Nenhum resultado foi encontrado! </p>;";
}
    
?>
