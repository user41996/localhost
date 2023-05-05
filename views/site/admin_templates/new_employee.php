<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new employee</title>
    <link rel="stylesheet" href="/localhost/public/static/css/new_employee.css">
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
        <h1>Добавить сотрудника</h1>
    </div>

    <form action="#">
        <input type="text" placeholder="Surname">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Patronymic">
        <input type="text" placeholder="Gender">
        <input type="date" placeholder="Birthday date">
        <input type="text" placeholder="Adreess">
        <input type="text" placeholder="Job title">
        <input type="text" placeholder="Subdivision">
        <input type="text" placeholder="Discipline">
        <button type="submit">Добавить</button>
    </form>
</main>

<footer></footer>

</body>
</html>