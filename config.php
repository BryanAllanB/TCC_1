<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "TCC";

    try {
        $pdo = new PDO("mysql:host={$servidor};dbname={$banco};charset=utf8;",$usuario,$senha);
    } catch (Exception $e) {
        echo "<p>Erro a tentar conectar</p>";
        echo $e->getMessage();
    }