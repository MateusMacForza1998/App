
<!DOCTYPE html>
<html lang="PT-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<title>Tela de Login</title>
</head>
<body>
    <img src="imagem/logo.png" alt="">
    <h1>
        MARMITA <br> DA CASA
    </h1>
    <section>
        
        <div class="login">
            <form method="post" action="b_processa_login.php">
                <div class="imp">
                    <input type="text" placeholder="Nome:" name="username" required>
                </div>

                <div class="imp">
                    <input type="password" placeholder="Senha:" name="password" required>
                </div>        
              <button type="submit" >Entrar</button>
            </form>
            <br>
            <a class="link" style="text-transform: uppercase; color:#FF914A; font-weight:900;" href="esqueceu.php">Esqueceu a Senha</a><br>
           <br><a class="link" style="text-transform: uppercase; color:#FF914A; font-weight:900;" href="cadastro.php">Cadastre-se</a>
          </div>
    </section>
  
</body>
</html>