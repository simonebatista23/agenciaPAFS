<?php
include("classe/Db.class.php");
include("classe/Usuario.php");

$db = new Db();
$db->conectar();
$db->setTabela("usuarios");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['txtemail'] ?? '';
    $senha = $_POST['txtsenha'] ?? '';
    
    if (empty($email)) {
        echo "Preencha seu email";
    } elseif (empty($senha)) {
        echo "Preencha sua senha";
    } else {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Verificar se o email já existe no banco de dados
        $campos = "email";
        $where  = "email = '$email'";
        $dadosExistentes = $db->consultar($campos, $where);
        
        if (!empty($dadosExistentes)) {
            echo "Este email já está cadastrado. Por favor, use outro email.";
        } else {
            $usuario = new Usuario(
                $cpf = $_POST['txtcpf'] ?? '',
                $nome = $_POST['txtnome'] ?? '',
                $telefone = $_POST['txttelefone'] ?? '',
                $email,
                $login = $_POST['txtlogin'] ?? '',
                $senha = md5($senha)
            );
            $usuario->gravar($db);
            header('Location: index.php');
            exit;
        }
    }
}
?>