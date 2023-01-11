<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link type="image/x-icon" href="/image/favicon/favicon.png" rel="shortcut icon">
    <title>Мой первый сайт! </title>
</head>

<body>
    <?php
        //Подключение шапки
        require_once("header.php");
    ?>

    <main>
        <section>
            <div class="centr">
                <h2>Немного информации о бо мне</h2>
            </div>
            <div class="container ">
                
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="backgroundblue">Имя</td>
                            <td class="backgroundwhite">Александр</td>
                        </tr>
                        <tr>
                            <td class="backgroundblue">Эл.Почта</td>
                            <td class="backgroundwhite">razboinikalex@yandex.ru</td>
                        </tr>
                        <tr>
                            <td class="backgroundblue">Образование</td>
                            <td class="backgroundwhite">Програмист</td>
                        </tr>
                        <tr>
                            <td class="backgroundblue">Опыт</td>
                            <td class="backgroundwhite">0 лет(ещё учусь)</td>
                        </tr>
                        <tr>
                            <td class="backgroundblue">Телефон</td>
                            <td class="backgroundwhite">+7 937 886 91-27</td>
                        </tr>
                    </tbody>
                </table>
                <div style="margin-left: 5%;margin-right: 5%;display: flex;justify-content: center;">
                    <img src="/image/profilefot.jpg" alt="" style="max-width: 100%;height: auto;">
                </div>
                
            </div>
        </section>
        <section>
            <div class="centr">
                <h2>Мой опыт</h2>
            </div>
            <div class="experience">

                <div class="experience-item">
                    <div class="experience-circle">
                        <i>
                            <img src="/image/education.png" alt="">
                        </i>
                    </div>
                    <div class="experience-content experience-color-blue">
                        <h4>Основы програмирования на Java</h4>
                        <p>Написание простых програм с использованием разных функций языка.</p>    
                    </div>
                </div>
                
                <div class="experience-item">
                    <div class="experience-circle">
                        <i>
                            <img src="/image/education.png" alt="">
                        </i>  
                    </div>
                    <div class="experience-content experience-color-blue">
                        <h4>Основы програмирования на С(С++,С#)</h4>
                        <p>Написание простого кода выполняющего различные функции, от калькулятора до исследования характеристик ПК.</p>
                    </div>
                </div>
            </div>
            <div class="experience">

                <div class="experience-item">
                    <div class="experience-circle pink-color-bg">
                        <i>
                            <img src="/image/energi.png" alt="">
                        </i>
                    </div>
                    <div class="experience-content">
                        <h4>Постиг просветления в использовании 1С.</h4>
                        <p>Это было труудно, и интересно пригодится ли в будующем?</p>
                    </div>
                </div>
                    
                <div class="experience-item">
                    <div class="experience-circle pink-color-bg">
                        <i>
                            <img src="/image/ghost.png" alt="">
                        </i>
                    </div>
                    <div class="experience-content">
                        <h4>Первые опыт в написании сайта.</h4>
                        <p>Научился создавать сайты с использованием HTML, CSS, JS.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="footer">
            <a class="size">Связь со мной:</a> 
            <ul class="icons">
                <ol><a href="https://vk.com/alexkalinin0"><img src='/image/vk.png'width="50" height="50" ></a></ol>
                <ol><a href="https://discordapp.com/users/540090822838976513/"><img src='/image/discord-logo.png'width="50" height="50"></a></ol>
            </ul>
        </div>
    </main>
    
    
</body>
</html>