<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <nav>
            <div class="pesquisar">
                <input type="text" name="pesquisar" id="indexpesquisar" placeholder="Pesquisar">
                <label for="search"></label>
                <button type="submit" class="button"><img src="pesquisa.svg" width="20" height="20" alt=""></button>


                <ul class="navlist">
                <li><a href="index.php">Home</a></li>
                <li><a href="formulario.php?page=novo">Novo Cliente</a></li>
                <li><a href= "ordenar-usuario.php? page = listar">Listar Usuários</a></li>
                
                       
            </ul>

            </div>
                        
        </nav>
        
        <div class="Container">
            
           <?php 
                include("config.php");

                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["page"])){
                    
                    switch($_POST["page"]){
                        case "novo":
                            include("formulario.php");
                            break;
    
                        case "listar":
                            include("ordenar-usuario.php");
                            break;
    
                        case "salvar":
                            include("salvar-usuário.php");
                            break;
                        
                        case "editar";
                            include ("");
                            break;
    
                        default:
                            $mensagem = "Seja bem vindo!";
                            echo "<h1 class='mensagem'>$mensagem</h1>";
                }
                } else{
                    $mensagem = "Seja bem vindo!";
                     echo "<h1 class='mensagem'>$mensagem</h1>";
                }
            ?>
        </div> 


        <img class="boas-vindas" src="undraw_hello_re_3evm.svg" alt="imagem boas vindas">
            

    </header>

   
</body>
</html>

