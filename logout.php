<?php

session_start();

if (!empty($_SESSION['login'])) {

        session_unset();

        header('Location: http://localhost:8080/authentication/index.php');

    } else {

        echo 'Ошибка сервера, вы не авторизованы!';

    }