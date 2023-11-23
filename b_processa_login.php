<?php
session_start();
include_once("conexao.php");

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login bem-sucedido!";
        header("location: pagina1.php");
    } else {
        echo "Credenciais inválidas.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: antiquewhite;

        }
        section{
            
            
            background-color:  #FF914A;
            margin: 15vw;
            border-radius: 10px;
            padding-left: 10vw;
            padding-right: 10vw;
            padding-bottom: 5vw;
            padding-top: 5vw;
        }
       
        button{
            text-align: center;
            margin-top: 5vw;
            height: 60px;
            width:100%;
            font-size: 4vw;
            font-weight: 700;
            border-radius: 10px;
            border: none;
            color: white;
            background-color:  #FE5957; 
        }
        h1{
            color: red;
        }
        a{
            text-decoration: none;
            color: white;
        }
        
        
    </style>
    <title>Document</title>
</head>
<body>
    <section>
        <h1>
            Senha incorreta
            
        </h1>
        
        <button>
            <a href="login.php">Tentar novamente</a>
        </button>
        <button>
            
            <a href="cadastro.php">Cadastre-se</a>
        </button>
        <button>
            
            <a href="esqueceu.php">Esqueceu a senha</a>
        </button>
       


        </section>
</body>
</html>