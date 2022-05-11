<?php

    require 'config.php';

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        $d = new dados();
        $d->gravanome($nome);

        header('Location: '.BASE_URL.'/relogio.php');
    } else {
        header('Location: index.php');
    }

?>