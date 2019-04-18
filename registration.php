<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">

</head>

<body>

<h1>РЕГИСТРАЦИЯ | ВВЕДИТЕ ВАШИ ДАННЫЕ!</h1>
<hr>

<div class="bingo">
    <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">РЕГИСТРАЦИЯ</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">РЕГИСТРАЦИЯ:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">

                        <div class="form-group" style="text-align: left !important;">
                            <label for="login">Логин</label>
                            <input type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" placeholder="Введите логин" required>
                        </div>
                        <div class="form-group" style="text-align: left !important;">
                            <label for="pass">Пароль</label>
                            <input type="password" class="form-control" id="pass" placeholder="Введите пароль" name="pass" required>
                        </div>
                        <div class="form-group" style="text-align: left !important;">
                            <label for="pass2">Проверка пароля</label>
                            <input type="password" class="form-control" id="pass2" placeholder="Повторно введите пароль" name="pass2" required>
                        </div>

                        <button type="submit" class="btn btn-primary">РЕГИСТРАЦИЯ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="bingo">
<?php

        /* - - - - - REGISTRATION - - - - - */

        if (!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {

        $login = $_POST['login'];
        $pass = md5($_POST['pass']);
        $pass2 = md5($_POST['pass2']);

            if  ($pass == $pass2) {

                $fileStream = fopen('registrationdb.txt', 'a');
                fwrite($fileStream, $login . ';');
                fwrite($fileStream, $pass . PHP_EOL);
                fclose($fileStream);

                echo 'Вы успешно зарегистрированы! Теперь вы можете <a href="auth.php" class="link">авторизироваться</a>!';

            } else {

                echo 'Пароли не совпадают, заполните форму повторно!';

            }

        } /* else {

        echo 'Вы заполнили не все поля!';
        }*/

        /* - - - - - REGISTRATION - - - - - */
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

