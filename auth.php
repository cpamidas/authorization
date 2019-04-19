<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">

</head>

<body>

<h1>АВТОРИЗАЦИЯ | ВВЕДИТЕ ВАШИ ДАННЫЕ</h1>
<hr>

<div class="bingo">
    <button class="btn btn-success" data-toggle="modal" data-target="#authorization">АВТОРИЗАЦИЯ</button>

    <div class="modal fade" id="authorization" tabindex="-1" role="dialog" aria-labelledby="authorizationLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="authorizationLabel">Введите данные для авторизации:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">

                        <div class="form-group" style="text-align: left !important;">
                            <label for="login2">Логин</label>
                            <input type="text" class="form-control" id="login2" name="login2" aria-describedby="loginHelp" placeholder="Введите логин" required>
                        </div>
                        <div class="form-group" style="text-align: left !important;">
                            <label for="pass_2">Пароль</label>
                            <input type="password" class="form-control" id="pass_2" placeholder="Введите пароль" name="pass_2" required>
                        </div>

                        <button type="submit" class="btn btn-primary">АВТОРИЗИРОВАТЬСЯ</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="bingo">

<?php
/* - - - - COOKIES - - - - */

// потом допишу

function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$secret_word = generateRandomString();

/* - - - - COOKIES - - - - */

/* - - - - - AUTH - - - - - */

if (!empty($_REQUEST['login2']) && !empty($_REQUEST['pass_2'])) {

    $enteredLogin = trim($_REQUEST['login2']);
    $enteredPassword = trim($_REQUEST['pass_2']);
    $enteredPasswordMd5 = md5($enteredPassword);

    $regArr = file('registrationdb.txt',FILE_SKIP_EMPTY_LINES);

    $ifLoginExists = false; // будет заменяться на true, если логин существует

    // как тут можно было иначе поправить? выводило notice: offset 6...
    for ($i = 0; $i <= count($regArr)-1; $i++) {

        $dbLoginArr = explode(';' , $regArr[$i]);
        $registrationLogin = trim($dbLoginArr[0]);
        $registrationPassword = trim($dbLoginArr[1]);

        // проверка на существование логина
        if ($enteredLogin == $registrationLogin) {

            $ifLoginExists = true;

            // проверка на совпадение пароля
            if($enteredPasswordMd5 == $registrationPassword) {

                session_start();

                $_SESSION['login'] = $enteredLogin;

                header('Location: index.php');

            } else {

                echo "Вы ввели не правильный пароль! Проверьте правильность ввода!";

            }
        }
    }

    // если логин не найден, 1 раз вне цикла выводим сообщение
    if($ifLoginExists == false) {

        echo "Пользователь <strong style='color:red;'>$enteredLogin</strong> не зарегистрирован! Пройдите <a href='registration.php' class='link'>процесс регистрации!</a>";

    }
}
/* - - - - - AUTH - - - - - */
?>

</div>

<script type="application/javascript">

    window.onload

</script>

<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>