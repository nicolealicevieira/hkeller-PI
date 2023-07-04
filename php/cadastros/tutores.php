<?php
require '../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $grupo = $_POST['perm'];
            $cpf = $_POST['cpf'];
            $telefone = $_POST['telefone'];
            $dtNasc = $_POST['dt_nasc'];
            $conn = openCon();
            
            if (isset($_POST['id']) && $_POST['id']>0) {
                $id = $_POST['id'];
                $query = "UPDATE hkeller.usuario SET nome='$nome', email='$email', senha='$senha', cpf='$cpf', telefone='$telefone', dt_nasc='$dtNasc' WHERE id=$id;";
                $rs = $conn->query($query);
            } else {
                $query = "INSERT INTO hkeller.usuario (nome, email, cpf, telefone, dt_nasc, fg_permissao, senha) VALUES('$nome', '$email', '$cpf', '$telefone', '$dtNasc', $grupo, '$senha');";
                $rs = $conn->query($query);
            }
            if ($rs==true) {
                header("Location: ../../adm/tutores.php");
                die();
            }
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
?>