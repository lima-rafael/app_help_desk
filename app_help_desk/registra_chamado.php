<?php
    session_start();

    //motagem do arquivo
    $titulo = str_replace('#', ' - ', $_POST['titulo']);
    $categoria = str_replace('#', ' - ', $_POST['categoria']);
    $descricao = str_replace('#', ' - ', $_POST['descricao']);

    //implode('#', $_POST);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');

    fwrite($arquivo, $texto);

    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php');
?>