<?php
include("db.php");

$uid = $_SESSION['uid'];

$idade = $_POST['idade'];
$interesses = $_POST['interesse'];
$pais = $_POST['pais'];
$cidade = $_POST['cidade'];

$connect -> query("UPDATE users SET idade = '$idade',interesse = '$interesses',pais = '$pais',cidade='$cidade' WHERE id LIKE '$uid'");
header("Location: https://localhost/mini-rede-social/acc.php");

?>