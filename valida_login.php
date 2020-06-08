<?php

    session_start();

    //Variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //chamada ao name relacionado ao input html
    $_POST['email'];
    $_POST['senha'];

    //Usuários do sistema, trocar pela requisição de usuários do banco de dados
    $usuarios_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    //percorrendo usuarios
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado'; 
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
    }

    

?>