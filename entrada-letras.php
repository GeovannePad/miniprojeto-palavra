<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
        session_start();
        if (!isset($_SESSION["palavra_original"])) {
            header("Location: entrada-palavra.php?alert=thief");
        }
        if((isset($_GET["alert"])) && ($_GET["alert"] == "nofound")){ ?>
            <div class="alert alert-danger" role="alert">
                <p>A letra <?= $_SESSION["letra"] ?> não foi encontrada na palavra!!</p>
            </div>
    <?php
        } else if ((isset($_GET["alert"])) && ($_GET["alert"] == "alreadyexist")){ ?>
            <div class="alert alert-info" role="alert">
                <p>Você ja digitou a letra <?= $_SESSION["letra"] ?>, por favor digite uma letra diferente</p>
            </div>
    <?php
        } else if ((isset($_GET["alert"])) && ($_GET["alert"] == "onlyoneletter")){ ?>
            <div class="alert alert-info" role="alert">
               <p>Você só pode digitar uma letra por vez</p>
            </div>
    <?php
        } else if ((isset($_GET["alert"])) && ($_GET["alert"] == "nothing")){ ?>
            <div class="alert alert-info" role="alert">
               <p>Digite uma letra</p>
            </div>
    <?php
        }
        if ((isset($_GET["alert"])) && ($_GET["alert"] == "worddone")){ ?>
            <div class="alert alert-success" role="alert">
                <p>Parabéns, você conseguiu completar a palavra. Que era, <span class="text-capitalize"> <?= $_SESSION["palavra_original"] ?></span></p>
            </div>
    <?php
        } else { ?>
            <p class="text-center font-weight-bold">Agora, você precisa descobrir as letras para poder formar a palavra final: <?= $_SESSION["palavra_x"]?></p>
            <p class="text-center font-weight-bold">Lembre-se que toda palavra começa com uma letra maiúscula</p>
    <?php    
        }
?>
    <?php
        if ((isset($_GET["alert"])) && ($_GET["alert"] == "worddone")) { 
            session_destroy(); ?>
            <form action="entrada-palavra.php" method="post">    
                 <input class="col-12" type="submit" value="Resetar">
            </form>
    <?php   
        } else { ?>
            <form action="revelarpalavra.php" method="post">    
                <input class="col-2 offset-5 " type="text" name="letra">
                <input class="col-2 offset-5" type="submit" value="Continuar">
            </form>
    <?php
        }
?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>