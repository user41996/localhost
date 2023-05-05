<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subdivision View</title>
    <link rel="stylesheet" href="/localhost/public/static/css/subdivision_view.css">
</head>
<body>

<header>
    <div class="nav-bar">
        <a href="<?= app() -> route -> getUrl('/admindisciplineview')?>">Дисциплины</a>
        <a href="<?= app() -> route -> getUrl('/adminsubdivisionview') ?>">Подраздления</a>
        <a href="<?= app() -> route -> getUrl('/adddiscipline') ?>">Добавить дисциплину</a>
        <a href="<?= app() -> route -> getUrl('/addsubdivision') ?>">Добавить подразделение</a>
        <a href="<?= app() -> route -> getUrl('/adduser') ?>">Добавить пользователя</a>
        <a href="<?= app() -> route -> getUrl('/addemployee') ?>">Добавить сотрудника</a>
        <a href="<?= app() -> route -> getUrl('/logout') ?>">Выход</a>
    </div>
</header>

<main>
    <div>
        <h1>Подразделения</h1>
        <ul>
            <li>Подразделение 1</li>
            <li>Подразделение 2</li>
            <li>Подразделение 3</li>
            <li>Подразделение 4</li>
        </ul>
    </div>
</main>

<footer></footer>
</body>
</html>