<?php

    //Variaveis do banco de dados e servidor mysql
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mini-rede-social";

    //Variavel de coneção
    $connect = mysqli_connect($host, $user, $pass, $db);

    if ($connect) {} else {

        echo "Não foi possivel se conectar ao banco de dados!";
    }

    //Habilita o uso das sessions
    session_start();

?>