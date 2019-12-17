<?php
    session_start();

    //variavel de autenticação
    $usuario_autenticar = false;
    $usuarios_id = null;
    $usuarios_perfil_id = null;

    $perfiis = array(1 => 'Administrador', 2 => 'Usuário');
    //Usuários do sistema
    $usuarios_app = array(
        array('id' => 1, 'email' => 'adm@helpdesk.com', 'senha' => 'Santoanjo@2019', 'perfil_id' => 1),
        array('id' => 2,'email' => 'eduardo@helpdesk.com', 'senha' => 'batmanqueri', 'perfil_id' => 1),
        array('id' => 3,'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
        array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    );
 /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';
*/

    foreach($usuarios_app as $user){
       /* echo 'Usuário app: ' . $user['email'] . '/' . $user['senha'];
        echo '<br />';
        echo 'Usuário form: ' . $_POST['email'] . '/' . $_POST['senha'];*/

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticar = true;
            $usuarios_id = $user['id'];
            $usuarios_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_autenticar){
        echo 'usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuarios_id;
        $_SESSION['perfil_id'] = $usuarios_perfil_id;
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }


    /*
    print_r($_GET);

    echo '</br>';

    echo $_GET['email'];
    echo '</br>';
    echo $_GET['senha'];
    */
    /*
    print_r($_POST);

    echo '</br>';

    echo $_POST['email'];
    echo '</br>';
    echo $_POST['senha'];*/
?>