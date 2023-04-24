<?php
// Usuários registrados
$usuariosRegistrados = array(
    array('username' => 'Samuca1', 'password' => 'paçoca123'),
);

// Função para verificar se as credenciais são válidas
function verificarCredenciais($username, $password, $usuariosRegistrados) {
    foreach ($usuariosRegistrados as $usuario) {
        if ($usuario['username'] === $username && $usuario['password'] === $password) {
            return true;
        }
    }
    return false;
}

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar as credenciais
    if (verificarCredenciais($username, $password, $usuariosRegistrados)) {
        // Credenciais corretas, agr vc será redimencionado para a página de acesso.
        header('Location: acesso.php');
        exit;
    } else {
        // Credenciais incorretas, exibir mensagem de erro
        echo 'Erro ao tentar o login na sua conta, nome de usuário ou senha incorreta.';
    }
}
?>