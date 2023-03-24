<link rel="stylesheet" href="estilo-ordenar.css">
<form method="POST" action="busca.php">
    <div class="box-search">
        <input type="search"  class="pesquisar-form "name="pesquisar" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" type="submit" class="button-pesquisa">
            <img src="pesquisa.svg" width="20" height="20" alt="">
        </button>
    </div>
</form>


<?php 

include_once("config.php");
$sql = "SELECT * FROM CLIENTE";

$res = $conn-> query($sql); 
//conexão executando query

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
    $i = 0; 
    while($row = $res-> fetch_object()and $i < 10){
        $data_formatada = date('d/m/Y', strtotime($row->data_nasc));

        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$data_formatada."</td>";
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

