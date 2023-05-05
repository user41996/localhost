<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page(guest)</title>
    <link rel="stylesheet" href="/localhost/public/static/css/style.css">
</head>
<body>
    <header>
        <div class="for-login">
            <div class="circle"></div>
            <a href="<?= app() -> route -> getUrl('/login')?>" class="login">Login</a>
        </div>
    </header>

    <main>
        <div>
            <h1>О нас</h1>
            <p>
                Сайт рыбатекст поможет дизайнеру, верстальщику,
                вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке,
                а начинающему оратору отточить навык публичных выступлений в домашних условиях.
                При создании генератора мы использовали небезизвестный универсальный код речей.
                Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.
                По своей сути рыбатекст является альтернативой традиционному lorem ipsum,
                который вызывает у некторых людей недоумение при попытках прочитать рыбу текст.
                В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.
            </p>
        </div>
    </main>

    <footer></footer>
</body>
</html>