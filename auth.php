<?php

if (!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['pass2'])) {

    $login = $_POST['login'];
    $pass = md5($_POST['pass']);
    $pass2 = md5($_POST['pass2']);

    if  ($pass == $pass2) {

        $fileStream = fopen('registrationdb.txt', 'a');
        fwrite($fileStream, $login . ';');
        fwrite($fileStream, $pass . PHP_EOL);
        fclose($fileStream);

        echo 'Вы успешно зарегистрированы! Теперь вы можете авторизироваться!';

    } else {

        echo 'Пароли не совпадают, заполните форму повторно!';

    }

} /* else {

    echo 'Вы заполнили не все поля!';
}*/

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

                if ($enteredLogin == 'midas') {

                    echo '<div class="bingo"><img src="img/midas.jpg" alt="midas" class="width"></div>';

                } else {

                    echo '<div class="bingo"><img src="img/4.jpg" alt="midas" class="width"></div>';

                }

                echo "Здравствуйте, <strong style='color:red;'>$enteredLogin</strong>, рады вас видеть!" . "<hr>";

            } else {

                echo "Вы ввели не правильный пароль! Проверьте правильность ввода!";

            }
        }
    }

    // если логин не найден, 1 раз вне цикла выводим сообщение
    if($ifLoginExists == false) {

        echo "Пользователь $enteredLogin не зарегистрирован! Пройдите процесс регистрации!";

    }
}

/* - - - - - AUTH - - - - - */

