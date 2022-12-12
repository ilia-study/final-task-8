<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="add_course.css">
    <title>Document</title>
</head>
<body class="login_body">
    <form class="login_form" action="add_c.php" method="post">
        <label>Название курса</label>
        <input type="text" class="login_input" name="name" placeholder="Введите название курса">

        <label>дата курса</label>
        <input type="date"  class="login_input" name="date">

        <label>Описание курса</label>
        <input type="text"  class="login_input" name="about">
        
        <button type="submit" class="login_button">Добавить</button>
        <a class="reg_button" href="index.html">Вернуться</a>
        <?php
        if($_SESSION['message'] ?? null){
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>