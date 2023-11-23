<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username' , FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password' , FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone' , FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);


$result_comite = "INSERT INTO usuarios (nome, username, password, telefone, email) VALUES ('$nome', '$username', '$password', '$telefone', '$email')";
$resultado_comite = mysqli_query($conn, $result_comite);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:antiquewhite ;

        }
        section{
            
            
            background-color:  #FF914A;
            margin: 15vw;
            border-radius: 10px;
            padding-left: 5vw;
            padding-right: 5vw;
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
            background-color: #FE5957;
        }
        h1{
            color: antiquewhite;
            text-align: center;
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
            Cadastrado com sucesso!
            
        </h1>
        <button>
            
            <a href="login.php">Login</a>
        </button>
       


        </section>
</body>
</html>