<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Document</title>
</head>
<body>
    <section>
        <div>
            <form action="b_processa_cadastro.php" method="post">
                <input  class="input1" type="text" name="nome" placeholder="Nome Completo:">
    
                <input class="input2" type="text" name="username" placeholder="Nome de Usuario:"> 

                <input class="input2" type="text" name="password" placeholder="Senha:"> 
    
                <input class="input3" type="text" name="telefone" placeholder="WhatsApp:">
    
                <input class="input4" type="email" name="email" placeholder="E-mail:">

                <input type="text" class="input6" name="endereco" placeholder="Endereço">

                <button type="submit">Enviar</button>
            
            </form>
        </div>
    </section>
</body>
</html>