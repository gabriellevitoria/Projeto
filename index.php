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
                <input type="text" name="pesquisar" id="idpesquisar" placeholder="Pesquisar">
                <label for="search"></label>
                <button type="submit" class="button"><img src="pesquisa.svg" width="20" height="20" alt=""></button>
            </div>
            

            <ul class="navlist">
                <li><a href="index.php">Home</a></li>
                <li><a href="formulario.php?page=novo">Novo Cliente</a></li>
                <li><a href= "ordenar-usuario.php? page = listar">Listar Usuários</a></li>
                
                       
            </ul>

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
    
                        default:
                        print "Seja bem vindo!";
                }
                } else{
                    print "Seja bem vindo";
                }
            ?>
        </div> 
             

        <section>

            <table id="clients">
                <tr>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
                    <th>Celular</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                    <th>Observação</th>
                </tr>

                <tr>
                    <td>Gabrielle</td>
                    <td>29/10/2002</td>
                    <td>455.639.108.30</td>
                    <td>(17) 99603-9238</td>
                    <td>gabrielle.912@gmail.com</td>
                    <td>Major Antenor Ramos, 165, Bálsamo-SP</td>
                    <td></td>
                </tr>

            </table>
            




            


        </section>

    </header>

   
</body>
</html>++

