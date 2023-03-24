<link rel="stylesheet" href="estilo-editar.css">
<h1>Editar Usuário</h1>
<?php  

include_once("config.php");

    /*Formulario preenchido -> seleciona todos da tabela cliente e manda parâmentro com WHERE, pedindo o  
    conteúdo de onde o Id é igual ao request. Dessa forma estamos selecionando apenas o usuário requerido */

    $sql = "SELECT * FROM CLIENTE WHERE id=".$_REQUEST["id"];
    $res =  $conn-> query($sql);
    $row = $res-> fetch_object(); //posso fazer o array de objetos e jogar diretamente na linha 
    
?> 
<form action="salvar-usuario.php?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar"> 
    <input type="hidden" name="id" value="<?php print $row->id; ?>">  <!-- Também enviamos junto o id para a ação editar -->
    
         <fieldset class="group">

            <div class="campo-esquerdo">

                <div class="camp">
                  <label >Nome</label>
                  <input type="varchar" name="nome" value="<?php print $row->nome ?>" class="input-form" required>
                </div>

                <div class="camp">
                    <label>Nascimento</label>
                    <input  type="date" name="data_nasc" value="<?php print $row->data_nasc ?>" class="input-form" width="100px" required>
                </div>

                <div class="camp">
                    <label>E-mail</label>
                    <input type="text" name="email" value="<?php print $row-> email ?>" class="input-form"  required >  
                </div>
                    
                <div class="camp">
                    <label >CPF</label>
                    <input type="number" name="CPF" value="<?php print $row->CPF ?>" class="input-form" require>
                </div>

            </div>

            <div class="campo-direito">
                    
                <div class="camp">
                    <label>Celular</label>
                    <input type="number" name="celular" value="<?php print $row-> celular ?>" class="input-form" required >
                </div>
    
                <div class="camp">
                    <label>Endereço</label>
                    <input  type="text" name="endereco" value="<?php print $row->endereco ?>" class="input-form"  required >
                </div>
    
                <div class="camp">
                    <label>Observação</label>
                    <input  type="text" name="observacap" value="<?php print $row->observacao ?>" class="input-form" >
                        
                </div>

</div>   
            
    
        </fieldset>
        <button class="button_forms" type="submit">Salvar</button>

</form>
