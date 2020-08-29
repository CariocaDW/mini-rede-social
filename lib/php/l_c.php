<?php

include("db.php");

//Indentifica a ação requerida pelo formulario
if (isset($_GET['c'])) {

    //Faz a verificação do login
    if ($_GET['c'] == 1) {

        //variaveis dadas pelo usuario
        $mail = $_POST['mail'];
        $pass= sha1(md5(sha1($_POST['pass'])));

        //variaveis da requisição do banco de dados
        $sql = mysqli_query($connect,"SELECT * FROM users WHERE email = '$mail' AND passwd = '$pass'");
        $rows = mysqli_num_rows($sql);

        //login realizado com sucesso
        if ($rows > 0) {

            while ($user = mysqli_fetch_array($sql)) {

                $id = $user['id'];
                $name = $user['name'];
                $_SESSION['uid'] = $id;
                $_SESSION['name'] = $name;
                header("Location: https://localhost/mini-rede-social/index.php?e=2");

            }

        //login não realizado
        } else {

            header("Location: https://localhost/mini-rede-social/index.php?e=1");

        }
    
    //Faz a verificação do cadastro
    } else if ($_GET['c'] == 2) {

        //dados dados pelo usuario
        $mail = $_POST['mail'];
        $pass= sha1(md5(sha1($_POST['pass'])));
        $name = $_POST['name'];
        $gender = $_POST['gender'];

        //variaveis da requisição com banco de dados
        $sql = mysqli_query($connect,"SELECT * FROM users WHERE email = '$mail'");
        $rows = mysqli_num_rows($sql);

        //cadastro não realizado
        if ($rows > 0) {

            header("Location: https://localhost/mini-rede-social/index2.php?e=1");
        
        //cadastro realizado com sucesso
        } else {

            $connect -> query("INSERT INTO users (name,email,passwd,gender) VALUES ('$name','$mail','$pass','$gender')");

            header("Location: https://localhost/mini-rede-social/index.php?e=3");

        }
    
    //Se a $_GET['c'] não for nenhuma valida
    } else {

        header("Location: https://localhost/mini-rede-social");

    }

//Se não houver a $_GET['c']
} else {

    header("Location: https://localhost/mini-rede-social");

}

?>