<?php
    session_start();
    $connect = mysqli_connect('188.68.222.195', 'lawliet', '19283746ads', 'accaunts');



    $name = $_POST['name'];
    $date = $_POST['date'];
    $about = $_POST['about'];

        if (mysqli_query($connect, "INSERT INTO `accaunts`.`Kurses` (`name`, `date`, `about`) VALUES ('$name', '$date', '$about')")) {
            $_SESSION['message'] = 'Курс добавлен';
            header('Location: index.html');
        }
    ?>