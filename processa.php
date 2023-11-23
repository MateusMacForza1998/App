<?php
session_start();
include_once("conectar.php");

$nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
$cidades = filter_input(INPUT_POST, 'cidades' , FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone' , FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);


$result_comite = "INSERT INTO leads_tea (nome, cidades, telefone, email) VALUES ('$nome', '$cidades', '$telefone', '$email')";
$resultado_comite = mysqli_query($conn, $result_comite);

//retornar a LP
?>
<?php
//retornar a LP

if(mysqli_insert_id($conn)){
    $_session['msg'] = "Sucesso";
    header("location:http://autismoconsciente.com.br/dia_mundial_conscientizacao_autismo/cartilha.php");
}else{
    header("location:http://autismoconsciente.com.br/dia_mundial_conscientizacao_autismo/cartilha.php");
}
?>



