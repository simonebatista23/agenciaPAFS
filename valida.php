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
        $cpf = $_POST['txtcpf'] ?? '';
        $nome = $_POST['txtnome'] ?? '';
        $telefone = $_POST['txttelefone'] ?? '';
        $login = $_POST['txtlogin'] ?? '';
        $hashedSenha = md5($senha);
        
        $usuario = new Usuario($cpf, $nome, $telefone, $email, $login, $hashedSenha);
        
        $campos = "cpf, email, senha";
        $where  = "email = '$email'" ;
        $dados  = $usuario->consultar($db, $campos, $where);
        
        if (!empty($dados)) {
            // Verificar se a senha também coincide
            $usuarioDb = $dados[0];
            if ($usuarioDb['senha'] === $hashedSenha) {
                header('Location: painel.php?email=' . urlencode($email));
                exit;
            } else {
                header('Location: erro.php');
                exit;
            }
        } else {
            header('Location: erro.php');
            exit;
        }
    }
}

function mostrarDados($dados) {
    if (!empty($dados)) {
        foreach ($dados as $usuario) {
            echo "<hr>";
            echo "Cpf: " . htmlspecialchars($usuario["cpf"], ENT_QUOTES, 'UTF-8') . "<br>" .
                 "Email: " . htmlspecialchars($usuario["email"], ENT_QUOTES, 'UTF-8') . "<br><br>";
        }
    }
}
?>
