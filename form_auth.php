<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link type="image/x-icon" href="/image/favicon/favicon.png" rel="shortcut icon">
    <title>Мой первый сайт! </title>

</head>

<?php
    //Подключение шапки
    require_once("headerreg.php");
?>
 
<!-- Блок для вывода сообщений -->
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
 
    <div id="form_auth" class="formaa">
        <h2>Форма авторизации</h2>
        <form action="auth.php" method="post" name="form_auth">
            <table>
          
                <tbody><tr>
                    <td> Email: </td>
                    <td>
                        <input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>
          
                <tr>
                    <td> Пароль: </td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                 
                <tr>
                    <td> Введите капчу: </td>
                    <td>
                        <p>
                            <img src="captcha.php" alt="Изображение капчи" /> <br>
                            <input type="text" name="captcha" placeholder="Проверочный код">
                        </p>
                    </td>
                </tr>
 
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_auth" value="Войти">
                    </td>
                </tr>
            </tbody></table>
        </form>
    </div>
    
 
<?php
    }else{
?>
 
    <div id="authorized">
        <h2>Вы уже авторизованы</h2>
    </div>
 
<?php
    }
?>