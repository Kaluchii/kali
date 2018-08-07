<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow" />
    <title>Страница не найдена - 404 Ошибка</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        font-family: "Arial",sans-serif;
        text-align: center;
    }

    p{
        margin: 0;
    }

    .main-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: scroll;
        box-sizing: border-box;
        height: 100%;
        padding: 40px 20px;
    }

    .center-block{}

    .error {
        text-align: center;
        font-size: 60px;
        line-height: 1;
        color: #1d8ed5;
    }

    .code {
        border-bottom: 1px solid rgba(153, 153, 153, 0.6);
        margin: 0 auto;
        max-width: 250px;
        font-size: 130px;
        line-height: 1;
        color: #1d8ed5;
    }

    .text {
        margin-top: 20px;
        margin-bottom: 35px;
        max-width: 400px;
        font-size: 20px;
        line-height: 1.5;
        text-align: center;
        color: #1d8ed5;
    }

    .home {
        font-size: 36px;
        border-bottom: 1px solid rgba(29, 142, 213, 1);
        text-decoration: none;
        color: #1d8ed5;
    }

    .home:hover {
        color: #ff9815;
        border-bottom: 1px solid #ff9815;
    }

    @media all and (max-width: 768px) {
        .error{
            font-size: 40px;
        }

        .code{
            max-width: 160px;
            font-size: 90px;
        }

        .home{
            font-size: 28px;
        }

        .text{
            font-size: 16px;
        }
    }
</style>
<body>
    <div class="main-wrapper">
        <div class="center-block">
            <p class="code">404</p>
            <p class="error">Ошибка</p>
            <p class="text">Неправильно набран адрес, или такой страницы на сайте больше не существует</p>
            <p class="home-wrap"><a href="/" class="home">На главную</a></p>
        </div>
    </div>
</body>
</html>