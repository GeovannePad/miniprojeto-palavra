<?php

    session_start();
    require_once("functions.php");
    
    $palavra_original = $_POST["palavra"];
    $palavra_original = strtolower($palavra_original);
    $_SESSION["palavra_auxiliar"] = ucfirst($palavra_original);
    if ($palavra_original == "") {
        header("Location: entrada-palavra.php?alert=nothing");
    } else {
        verificarPalavras($palavra_original);
    }
    

    