<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
    if (isset($_GET["alert"]) && $_GET["alert"] == "onlyone") { ?>
        <div class="alert alert-info" role="alert">
            <p>Você só pode digitar uma palavra por vez!!</p>
        </div>
<?php
    } else if (isset($_GET["alert"]) && $_GET["alert"] == "nothing") { ?>
        <div class="alert alert-info" role="alert">
            <p>Digite uma palavra</p>
        </div>
<?php
    } else if (isset($_GET["alert"]) && $_GET["alert"] == "thief") { ?>
        <div class="alert alert-info" role="alert">
            <p>Digite a palavra antes de entrar</p>
        </div>
<?php
    }
?>
    <div class="container">
    <form action="tratarpalavra.php" method="post">
        <label for="palavra">Digite uma palavra</label>
        <input type="text" name="palavra">
        <input type="submit" value="GO">
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </div>
</body>
</html>