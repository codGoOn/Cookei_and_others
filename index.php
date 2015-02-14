<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Тестирование куки</h2>
        <h3>Теперь заполните небольшую форму</h3>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <p>Ваше имя <br /><input name="name" type="text" value="имя" autocomplete="off"></p>
            <p>Ваш логин <br /><input name="login" type="text" value="логин" autocomplete="off"></p>
            <p>Ваш пароль <br /><input name="pass" type="password" value="пароль" autocomplete="off"></p>
            <p>Ваши пожелания <br /><textarea rows="5" cols="20" name="message" autocomplete="off"></textarea></p>
            <p><input name="submit" type="submit" value="Отправить"</p>
        </form>
        
        <h3>Ваши введенные данные</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    //Принимаем данные из формы
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $login = strip_tags(htmlspecialchars($_POST['login']));
    $pas = strip_tags(htmlspecialchars($_POST['pass']));
    $message = strip_tags(htmlspecialchars($_POST['message']));
    
    //Отсылаем куки с числом и датой последнего посещения
    $count = 0;
    if(isset($count)){
        $count = $_COOKIE['Counter'];}
    $count++;
    if(isset($_COOKIE['Visitor']))
        $lastVisit = date('d-m-y H:i:s', $_COOKIE['Visitor']);
    
    if(date('d-m-y') != date('d-m-y', $_COOKIE['Visitor'])){
    setcookie('Counter', $count, time()*60*60*24);
    setcookie('Visitor', time(), time()*60*60*24);
    }
   
        //КУКИСЫ
        if($count == 1) {
            echo "Здравствуйте!";
        }else {
        echo "<p>Вы зашли к нам {$count} раз!</p>";
        echo "<p>В последний раз вы были у нас - {$lastVisit}</p>";
        }
            //ВЫВОД ТАБЛИЦЫ
             echo "<ul>";
                 echo "<li>Ваше имя: {$name}</li>";
                 var_dump($name);
                 echo "<li>Ваш логин: {$login}</li>";
                 echo "<li>Ваш пароль: {$pas} </li>";
                 echo "<li>Ваши пожелания: {$message} </li>";
             echo "</ul>";
             
             header("Location:" . $_SERVER['PHP_SELF']);
             exit();
}
        ?>
    </body>
</html> 