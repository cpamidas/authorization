<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">

</head>

<body>

    <h1>Добро пожаловать на <?= $_SERVER['SERVER_NAME']; ?>!</h1>
    <hr>

    <div class="bingo">
    <?php session_start(); ?>

    <?php

    if (!empty($_SESSION['login'])) {

        if ($_SESSION['login'] == 'midas') {

            echo '<div class="bingo"><img src="img/midas.jpg" alt="midas" class="width"></div>';

        } else {

            echo '<div class="bingo"><img src="img/4.jpg" alt="midas" class="width"></div>';

        }

        echo "Здравствуйте, <strong style='color:red;'>" . $_SESSION['login'] . "</strong>, рады вас видеть!" . "<hr>";
        echo '<a href="logout.php"><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">ВЫЙТИ</button></a>';

    } else {

        echo '<a href="registration.php"><button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">РЕГИСТРАЦИЯ</button></a>';
        echo '<a href="auth.php"><button class="btn btn-success" data-toggle="modal" data-target="#authorization">АВТОРИЗАЦИЯ</button></a>';

    }

    ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>