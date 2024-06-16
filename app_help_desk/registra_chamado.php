<?php
    $_POST;
    session_start();
    //trabalhando na montagem do texto
   
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);
    //montando o arquivo
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    //abrindo e montando o arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
    fwrite($arquivo, $texto);

    fclose($arquivo);
    echo $texto;
    header("Location:abrir_chamado.php");
?>