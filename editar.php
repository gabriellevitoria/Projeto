<link rel="stylesheet" href="estilo-editar.css">
<?php  

include_once("config.php");

    /*Formulario preenchido -> seleciona todos da tabela cliente e manda parâmentro com WHERE, pedindo o  
    conteúdo de onde o Id é igual ao request. Dessa forma estamos selecionando apenas o usuário requerido */

    $sql = "SELECT * FROM CLIENTE WHERE id=".$_REQUEST["id"];
    $res =  $conn-> query($sql);
    $row = $res-> fetch_object(); //posso fazer o array de objetos e jogar diretamente na linha 
    
?> 

<div class="container">
    <div class="image">
        <img src="undraw_my_password_re_ydq7(1).svg" alt="">
    </div>
            
    <div class="formulario">
        <div class="header">
            <div class="title">
                <h1>Editar</h1> 
             </div>
        </div>
        <form action="salvar-usuario.php?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar"> 
        <input type="hidden" name="id" value="<?php print $row->id; ?>">  <!-- Também enviamos junto o id para a ação editar -->
                
        <div class="input">
                <div class="input-box">
                    <label for="firsname" >Nome</label> <br>
                    <input id="firtsname" type="text" name="nome" value="<?php print $row->nome ?>"  required>
                </div>

                <div class="input-box">
                    <label for="data_nasc">Nascimento</label>
                    <input id="data_nasc"type="date" name="data_nasc" value="<?php print $row->data_nasc ?>"  required>
                </div>

                <div class="input-box">
                    <label for="email">E-mail</label> <br>
                    <input id="email" type="text" name="email"  value="<?php print $row-> email ?>"  required>
                </div>


                <div class="input-box">
                    <label for="CPF" >CPF</label>
                    <input id="CPF"type="number" name="CPF" value="<?php print $row->CPF ?> "required>
                </div>
                
                <div class="input-box">
                    <label for="celular">Celular</label>
                    <input id="celular"type="number" name="celular" value="<?php print $row-> celular ?>"  required >
                </div>

                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input id="endereco "type="text" name="endereco" value="<?php print $row->endereco ?>"  required >  
                </div>

                <div class="input-box">
                    <label for="observacao">Observação</label>
                    <input id="observacao" type="text" name="observacao" value="<?php print $row->observacao ?>" >
                </div>

            </div>
                <button class="button" type="submit">Salvar</button>
            </div>
        </form>
    </div>
    
            

