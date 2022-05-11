<?php
    require 'classes/model.php';
    require 'classes/dados.php';

    session_start();
    global $config;
    global $db;

    define("BASE_URL", "http://localhost/phpzp/desafio_momentum");

    $config['charset'] = 'utf8';
    $config['dbname']  = 'momentum';
	$config['host']    = 'localhost';
	$config['dbuser']  = 'root';
	$config['dbpass']  = '';

    try {

        $db = new PDO("mysql:dbname=".$config['dbname'].";charset=".$config['charset'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {

        echo 'Erro: '.$e->getMessage();
        exit;

    }

?>