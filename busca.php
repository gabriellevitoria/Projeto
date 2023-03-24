<link rel="stylesheet" href="estilo-busca.css">
<?php

include_once("config.php");

if(isset($_POST['pesquisar'])){
    $pesquisar = $_POST['pesquisar'];

    $sql = "SELECT * FROM CLIENTE WHERE nome LIKE '%$pesquisar%' OR email LIKE '%$pesquisar%'";
    $res = $conn->query($sql); 

    $qtd = $res->num_rows;

    if($qtd > 0){

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

        $i = 0; 
        while($row = $res->fetch_object() and $i < 10){
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

            $i++;
        }
        print "</table>";

    }else{
        print "<p> Nenhum resultado foi encontrado! </p>";
    }
}
?>