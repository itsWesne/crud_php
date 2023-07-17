<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Entrar
    $user = $_POST['username'];
    $password = $_POST['password'];

    // Validação

    if ($user == 'admin' && $password == 'admin') {
        // Acessar
        header('location:../pages/menu.php');
    } else {
        header('location:../../index.php?msg=acesso_invalido');
    }
} 
