<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/localhost/public/static/css/disciplines_view.css">
    <title>Discipline View</title>
</head>
<body>

    <header>
        <div class="nav-bar">
            <a href="<?= app() -> route -> getUrl('/disciplines')?>">Дисциплины</a>
            <a href="<?= app() -> route -> getUrl('/subdivisions')?>">Подразделения</a>
            <a href="<?= app() -> route -> getUrl('/logout')?>">Выход</a>
        </div>
    </header>

    <main>
        <div>
            <h1>Дисциплины</h1>
            <ul>
                <?php
                foreach ($disciplines as $discipline){
                    ?>
                    <li><?= $discipline->name_of_discipline ?></li>
                <?php
                }
                ?>
            </ul>
        </div>
    </main>

    <footer></footer>
</body>
</html>