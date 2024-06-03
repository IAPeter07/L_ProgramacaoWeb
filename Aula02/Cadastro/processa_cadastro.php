<?php
//Este script processa as entradas de um formulario e exibe a mensagem personalizada

//Coletando dados do Formulario
$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Anonimo';
$email = $_POST['email'] ?? 'Não Informado'; 
$idade = $_POST['idade'] ?? 'Não Informado'; 

//Armazenando dados em uma array associado
$usuario = [
    'nome' => $nome,
    'email' => $email,
    'idade' => $idade
];

//Função para saudação
function saudacao($nome)
{
    return "Ola $nome, seja bem-vindo";
}

//Exibindo mesnagem de boas-vindas
echo saudacao($usuario['nome']) . "<br><br>";
echo "Aqui estão os detalhes do seu cadastro:<br>";
echo "Nome: " . $usuario['nome'] . "<br>";
echo "Email: " . $usuario['email'] . "<br>";
echo "Idade: " . $usuario['idade'] . "<br>";
?>
