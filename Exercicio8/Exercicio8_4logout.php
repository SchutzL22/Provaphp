<?php
if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: Exercicio8_4index.php");
?>