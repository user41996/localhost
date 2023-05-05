<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new user</title>
  <link rel="stylesheet" href="/localhost/public/static/css/create_new_user.css">
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
        <h1>Добавить пользователя</h1>
      </div>

      <form action="#">
        <input type="text" placeholder="Login for new user">
        <input type="password" placeholder="Password for new user">
        <input type="text" placeholder="Role for new user">
        <button type="submit">Добавить</button>
      </form>
  </main>

  <footer></footer>

</body>
</html>