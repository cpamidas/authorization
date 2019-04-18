<?php

session_start();

if (!empty($_SESSION['login'])) {

        session_unset();

        header('Location: index.php');

    } else {

        echo 'Ошибка сервера, вы не авторизованы!';

    }