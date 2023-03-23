<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo-formulario.css">
    <title>Novo Cadastro</title>
</head>
<body>
    
    <h1 class= titulo>Novo Cadastro</h1> <br>

         <form action="salvar-usuario.php?page=salvar" method="POST">
            <input type="hidden" name="acao" value="cadastrar"> <!--ação  cadastrar enviada de forma oculta para o switch -->
            
            
            <fieldset class="group">

                <div class="campo-esquerdo">

                    <div class="camp">
                        <label >Nome</label>
                        <input type="varchar" name="nome" class="input-form" required>
                    </div>

                    <div class="camp">
                        <label>Nascimento</label>
                        <input  type="date" name="data_nasc" class="input-form" width="100px" required>
                    </div>

                    <div class="camp">
                        <label>E-mail</label>
                        <input type="text" name="email" class="input-form"  required >  
                    </div>
                    
                    <div class="camp">
                        <label >CPF</label>
                        <input type="number" name="CPF" class="input-form" require>
                    </div>
                </div>

                <div class="campo-direito">
                    
                    <div class="camp">
                        <label>Celular</label>
                        <input type="number" name="celular" class="input-form" required >
                    </div>
    
    
                    <div class="camp">
                        <label>Endereço</label>
                        <input  type="text" name="endereco" class="input-form"  required >
                    </div>
    
                    <div class="camp">
                        <label>Observação</label>
                        <input  type="text" name="observacap" class="input-form" >
                        
                    </div>

                </div>   
            
    
            </fieldset>

            <button class="button_forms" type="submit">Cadastrar</button>

        </form>

</body>
</html>