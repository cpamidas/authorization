<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма регистрации / Запись в файл</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css">

</head>

<body>

    <h1>ПРОЙДИТЕ АВТОРИЗАЦИЮ ИЛИ ЗАРЕГИСТРИРУЙТЕСЬ!</h1>
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

                      <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" aria-describedby="loginHelp" placeholder="Enter login" required>
                      </div>
                      <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password" name="pass" required>
                      </div>
                      <div class="form-group">
                        <label for="pass2">ReEnter your Password</label>
                        <input type="password" class="form-control" id="pass2" placeholder="Password" name="pass2" required>
                      </div>

                       <button type="submit" class="btn btn-primary">РЕГИСТРАЦИЯ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

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

                        <div class="form-group">
                            <label for="login2">Логин</label>
                            <input type="text" class="form-control" id="login2" name="login2" aria-describedby="loginHelp" placeholder="Введите логин" required>
                        </div>
                        <div class="form-group">
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

    require_once 'auth.php'

    ?>
</div>

    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>