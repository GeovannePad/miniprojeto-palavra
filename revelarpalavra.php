<?php
    session_start();
    require_once ("functions.php");
    $letra = $_POST["letra"];
    $_SESSION["letra"] = $letra;
    primeiroVerificar($letra);
    if ($_SESSION["palavra_x"] == $_SESSION["palavra_auxiliar"]){
        header("Location: entrada-letras.php?alert=worddone");
    }
    
    