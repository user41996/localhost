<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/localhost/public/static/css/login.css">
</head>
<body>
    <header>
        <div class="for-login">
            <div class="circle"></div>
            <a href="<?= app() -> route -> getUrl('/')?>" class="login">Main page</a>
        </div>
    </header>
    <form method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Password">
        <button>Login</button>
    </form>
</body>
</html>