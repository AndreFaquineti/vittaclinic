<?php
    session_start();
    include 'config.php';
    if(isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        $consulta = $conn->prepare("SELECT * FROM administradores WHERE email = :email");
        $consulta->bindParam(':email', $email);
        $consulta->execute();
        $administrador = $consulta->fetch();
        if ($administrador) {
            if (password_verify($senha, $senha_hash)) {
                $_SESSION['email'] = $email;
                $_SESSION['usuario'] = 'ADMIN';
                echo 'Login bem sucedido';
                header('location: /vittaclinic/minhapagina.php');
                exit;
        } else {
            echo 'Verifique sua Senha';
            header("Refresh: 3; Url=/vittaclinic/login.php");
            exit;
        }
        } else {
            $consulta = $conn->prepare("SELECT * FROM medicos WHERE email = :email");
            $consulta->bindParam(':email', $email);
            $consulta->execute();
            $medico = $consulta->fetch();
            if ($medico) {
                if (password_verify($senha, $senha_hash)) {
                    $_SESSION['email'] = $email;
                    $_SESSION['usuario'] = 'MEDICO';
                    echo 'Login bem sucedido';
                    header('location: /vittaclinic/minhapagina.php');
                    exit;
                } else {
                    echo 'Verifique sua Senha';
                    header("Refresh: 3; Url=/vittaclinic/login.php");
                    exit;
                }
            } else {
                $consulta = $conn->prepare("SELECT * FROM pacientes WHERE email = :email");
                $consulta->bindParam(':email', $email);
                $consulta->execute();
                $paciente = $consulta->fetch();
                if ($paciente) {
                    if (password_verify($senha, $senha_hash)) {
                        $_SESSION['email'] = $email;
                        $_SESSION['usuario'] = 'PACIENTE';
                        echo 'Login bem sucedido';
                        header('location: /vittaclinic/minhapagina.php');
                        exit;
                    } else {
                        echo 'Verifique sua Senha';
                        header("Refresh: 3; Url=/vittaclinic/login.php");
                        exit;
                    }
                } else {
                    echo 'Verifique seu Email';
                    header("Refresh: 3; Url=/vittaclinic/login.php");
                    exit;
                } 
            }
        }
    }
?>