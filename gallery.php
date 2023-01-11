<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/styles1.css">
    <title>Мой первый сайт! </title>
    <script src="/script/main.script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="/galleria/dist/galleria.min.js"></script>
    <link type="image/x-icon" href="/image/favicon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/fullscreen/galleria.classic.min.css " >
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js "></script> 
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js "></script>
        
      
</head>
<body>
    <?php
        //*Подключение шапки
        require_once("header.php");
    ?>
    <style>
        .galleria{ width: 80%; height: 450px; background-image: url(/image/bg/bg-top.png); margin-left: 10%; margin-right: 10%;}
    </style>
    <div class="galereya">
        <div class="galleria">
            <img src="/image/portfolio/img1.jpg">
            <img src="/image/portfolio/img2.jpg">
            <img src="/image/portfolio/img3.jpg">
            <img src="/image/portfolio/img4.jpg">
            <img src="/image/portfolio/img5.jpg">
            <img src="/image/portfolio/img6.jpg">
            <img src="/image/portfolio/img7.jpg">
            <img src="/image/portfolio/img8.jpg">
            <img src="/image/portfolio/img9.jpg">
        </div>
        <script>
            (function() {
                Galleria.loadTheme('/galleria/dist/themes/classic/galleria.classic.min.js');
                Galleria.run('.galleria');
            }());
        </script>
    </div>
    <footer>
        <a class="size">Связь со мной:</a> 
        <ul class="icons">
            <ol><a href="https://vk.com/alexkalinin0"><img src='/image/vk.png'width="50" height="50" ></a></ol>
            <ol><a href="https://discordapp.com/users/540090822838976513/"><img src='/image/discord-logo.png'width="50" height="50"></a></ol>
        </ul>
    </footer>
    
</body>
</html>