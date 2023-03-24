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
<div class="container">
     <div class="image">
        <img src="undraw_my_password_re_ydq7(1).svg" alt="">
    </div>
            
    <div class="formulario">
        <div class="header">
            <div class="title">
                <h1>Novo Cadastro</h1> 
             </div>
        </div>
        <form action="salvar-usuario.php?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar"> <!--ação  cadastrar enviada de forma oculta para o switch -->
                    
            <div class="input">
                <div class="input-box">
                    <label for="firtsname">Nome</label> <br>
                    <input id="firtsname" type="text" name="nome" placeholder="Digite o nome do cliente"  required oninput="this.value = this.value.replace(/[^a-zA-Z0-9 \-_]/g, '')">
                </div>
                
                <div class="input-box">
                    <label for="data_nasc">Nascimento</label>
                    <input id="data_nasc"type="date" name="data_nasc" required>
                </div>
                
                <div class="input-box">
                    <label for="email">E-mail</label> <br>
                    <input id="email" type="text" name="email" placeholder="Digite o email do cliente"  required>
                </div>


                <div class="input-box">
                    <label for="CPF" >CPF</label>
                    <input id="CPF"type="number" name="CPF" placeholder="Digite o CPF do cliente" require  onblur="validarCPF(this.value)">
                </div>

                <div class="input-box">
                    <label for="celular">Celular</label>
                    <input id="celular"type="number" name="celular" placeholder="Digite o celular do cliente" required >
                </div>

                <div class="input-box">
                    <label for="endereco">Endereço</label>
                    <input id="endereco "type="text" name="endereco" placeholder="Digite o endereço do cliente"  required >  
                </div>

                <div class="input-box">
                    <label for="observacao">Observação</label>
                    <input id="observacao" type="text" name="observacao" placeholder="Observação" >
                </div>

            </div>
                <button class="button" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>

<script src="script.js"></script>

</body>
</html>