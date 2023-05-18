<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<!--//if ($_COOKIE['name'] == ''):-->
<!--//-->
<body>
<!--<form action="auth.php" method="post">-->
<!--  Введите имя:  <input type="text" name="username"> <br>-->
<!--  Введите почту:  <input type="text" name="email"><br>-->
<!--  Введите пароль:  <input type="password" name="pass"><br>-->
<!--    <input type="submit" value="Регистрация">-->
<!--</form>-->
<!--//endif;-->

<section class="forms-section">
    <h1 class="section-title">Авторизация</h1>
    <div class="forms">
        <div class="form-wrapper is-active">
            <button type="button" class="switcher switcher-login">
                Вход
                <span class="underline"></span>
            </button>
            <form class="form form-login" action="entry.php" method="post">
                <fieldset>
                    <legend>Введите пароль и логин</legend>
                    <div class="input-block">
                        <label for="login-email">E-mail</label>
                        <input id="login-email" type="email" required name="email">
                    </div>
                    <div class="input-block">
                        <label for="login-password">Пароль</label>
                        <input id="login-password" type="password" required name="pass">
                    </div>
                </fieldset>
                <button type="submit" class="btn-login">Войти</button>
            </form>
        </div>
        <div class="form-wrapper">
            <button type="button" class="switcher switcher-signup">
               Регистрация
                <span class="underline"></span>
            </button>
            <form class="form form-signup" action="auth.php" method="post">
                <fieldset>
                    <legend>Введите пароль, логин, e-mail</legend>
                    <div class="input-block">
                        <label for="signup-email">Имя</label>
                        <input id="signup-email" type="text" required name="username">
                    </div>
                    <div class="input-block">
                        <label for="signup-password">E-mail</label>
                        <input id="signup-password" type="text" required name="email">
                    </div>
                    <div class="input-block">
                        <label for="signup-password-confirm">Пароль</label>
                        <input id="signup-password-confirm" type="password" required name="pass">
                    </div>
                </fieldset>
                <button type="submit" class="btn-signup">Продолжить</button>
            </form>
        </div>
    </div>
</section>
<script src="./js.js"></script>
</body>
</html>