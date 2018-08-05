<?php
    function converterPalavra($palavra_original){
        $alfabeto = array ("A","a","B","b","C","c","D","d","E","e","F","f","G","g","H","h","I","i","J","j","K","k","L","l","M","m","N","n","O","o","P","p","Q","q","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z","á","à","ã","â","Á","À","Ã","Â","é","è","ê","É","È","Ê","í","ì","î","Í","Ì","Î","ó","ò","õ","ô","Ó","Ò","Õ","Ô","ú","ù","û","Ú","Ù","Û","ç","Ç");
        $palavra_x = str_replace($alfabeto, "X", $palavra_original);
        return $palavra_x;
    }
    function revelarLetra($letra){
        for ($i=0; $i < strlen($_SESSION["palavra_original"]); $i++) { 
            if ($_SESSION["palavra_original"][$i] == $letra) {
                if ($_SESSION["palavra_original"][0] == $letra) {
                    $_SESSION["palavra_x"][0] = strtoupper($letra);
                } else {
                    $_SESSION["palavra_x"][$i] = $letra;
                }
            }
        }
    }
    function verificarPalavras($palavra_original){
        $words = str_word_count($palavra_original, 0, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ");
        if ($words == 1) {
            $_SESSION["palavra_original"] = $palavra_original;
            $_SESSION["palavra_x"] = converterPalavra($palavra_original);
            header("Location: entrada-letras.php");
        } else {
            header("Location: entrada-palavra.php?alert=onlyone");
        }
    }
    function primeiroVerificar($letra){
        if ($letra != "") {
            segundoVerificar($letra);
        } else {
            header("Location: entrada-letras.php?alert=nothing");
        }
    }
    function segundoVerificar($letra){
        if (strlen($letra) > 1){
            header("Location: entrada-letras.php?alert=onlyoneletter");
        } else {
            terceiroVerificar($letra);
        }
    }
    function terceiroVerificar($letra){  
        $pos = strripos( $_SESSION["palavra_x"], $letra);
        if ($pos !== false) {
            header("Location: entrada-letras.php?alert=alreadyexist");
        } else {
            quartoVerificar($letra);
        }
    }
    function quartoVerificar($letra){
        if(strpos($_SESSION["palavra_original"], $letra) !== false){
            revelarLetra($letra);
            header("Location: entrada-letras.php");
        } else {
            header("Location: entrada-letras.php?alert=nofound");
        }  
    }