<!DOCTYPE html>
<html>
	<head>
		<title>Soft Skills</title> 
		<meta charset="utf-8">
		<link rel="apple-touch-icon" sizes="57x57" href="ss.ico/apple-icon-57x57.png" type="image/png">
		<link rel="apple-touch-icon" sizes="60x60" href="ss.ico/apple-icon-60x60.png" type="image/png">
		<link rel="apple-touch-icon" sizes="72x72" href="ss.ico/apple-icon-72x72.png" type="image/png">
		<link rel="apple-touch-icon" sizes="76x76" href="ss.ico/apple-icon-76x76.png" type="image/png">
		<link rel="apple-touch-icon" sizes="114x114" href="ss.ico/apple-icon-114x114.png" type="image/png">
		<link rel="apple-touch-icon" sizes="120x120" href="ss.ico/apple-icon-120x120.png" type="image/png">
		<link rel="apple-touch-icon" sizes="144x144" href="ss.ico/apple-icon-144x144.png" type="image/png">
		<link rel="apple-touch-icon" sizes="152x152" href="ss.ico/apple-icon-152x152.png" type="image/png">
		<link rel="apple-touch-icon" sizes="180x180" href="ss.ico/apple-icon-180x180.png" type="image/png">
		<link rel="icon" type="image/png" sizes="192x192"  href="ss.ico/android-icon-192x192.png" type="image/png">
		<link rel="icon" type="image/png" sizes="32x32" href="ss.ico/favicon-32x32.png" type="image/png">
		<link rel="icon" type="image/png" sizes="96x96" href="ss.ico/favicon-96x96.png" type="image/png">
		<link rel="icon" type="image/png" sizes="16x16" href="ss.ico/favicon-16x16.png" type="image/png">
		<link rel="manifest" href="ss.ico/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="ms-icon-144x144.png" type="image/png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" type="text/css" href="style.css"> <!--CSS подключение-->

	</head>
	<body>
		
		<header>
			<!--LOGO -->
			<div>
				<a href="">YOUR SOFT SKILLS</a>
			</div>




			
			<ul>
				<!--NAVIGATION -->
				<li><a href="index.html" class="now">Что такое Soft Skills</a></li>
				<li><a href="pages/rasp.html">ТОП 10 soft skills</a></li>
				<li><a href="pages/prepods.html">Что дают гибкие навыки</a></li>
				<li><a href="pages/group.html">Регистрация</a></li>
				<li><a href="pages/register.html">Регистрация отсутсвующих</a></li>
				<li><a href="ots.html">Анкета</a></li>
				<li><a href="kurs.php">Курсы</a></li>
				<li><a href="add_kurs.php">Добавить курс</a></li>
				
			</ul>
		</header>
		
        <?php
            $conn = mysqli_connect('188.68.222.195', 'lawliet', '19283746ads', 'accaunts');
            $res = mysqli_query($conn, "SELECT * FROM `Kurses`");
            echo '<div class="tovars">';
            echo '<div class="row">';
            $rows_count=0;
            
            while($resul = mysqli_fetch_assoc($res)){
                
                echo '<div class="tovar">';
                echo '<h1>'.$resul['name'].'</h1>';
                echo '<h2>'.$resul['about'].'</h2>';
                echo '<h1 class="date">'.$resul['date'].'</h1>';

                echo '<button type="button" class="btn_cart" data-id="'.($resul['id'] ?? null).'">Записаться</button>';
                
                echo '</div>';
                $rows_count+=1;
                if($rows_count==6){
                    echo '</div>';
                    echo '<div class="row">';
                    $rows_count=0;
                }
            }
            echo '</div>';
        ?>

		
		<footer>
			
			<p class="footerp"> Низамова Л.И. для ЛР1</p>
		</footer>
	</body>
</html>