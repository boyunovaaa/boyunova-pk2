<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_style.css">
    <?php require "title.php"; ?>
</head>

<body>
<div class="header">
    <div class="container">
        <div class="header-line">
            <img class="logo" src="logo.jpg" height="90px">
            
                <!-- a class="nav-item" href="index.php">Главная</a -->
                <a class="nav-item" href="<?php	

                    $name='Главная'; 
                    $link='index.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>

                <a class="nav-item" href="<?php	

                $name='Магазин'; 
                $link='magazin.php';	
                $current_page=true;	

                echo $link;	

                ?>"><?php	

                if( $current_page )	
                    echo $name;

                ?></a>

                
                <a class="nav-item" href="<?php	

                $name='Адреса магазинов'; 
                $link='address.php';	
                $current_page=true;	

                echo $link;	

                ?>"><?php	

                if( $current_page )	
                    echo $name;

                ?></a>
                <a class="nav-item" href="#contact">Контакты</a>
                <a class="bin" href="@">Корзина</a>
                <!-- a class="autorization" href="autorization.php">Авторизация</a -->

                <a class="autorization" href="<?php	

                    $name='Войти'; 
                    $link='autorization.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>

           
        </div>
    </div>    
</div>

  <div class="body2">
    <div class="container2">
        <div class="content2">
                <?php 

                    echo '<p> Здравствуйте, '.$_POST['fio'].'</p>'; //выводим ФИО
                    if ($_POST['category'] == '1'){ //проверяем тип обращения
                        echo '<p>Спасибо за ваше предложение:</p>';
                        echo '<textarea>'.$_POST['text'].'</textarea>' . '<br>';//вывод текста сообщения
                    }
                    if ($_POST['category'] == '2'){
                        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                        echo '<textarea>'.$_POST['text'].'</textarea>' . '<br>';
                    }

                    if (isset($_POST['file']) & $_POST['file'] != ''){ 
                        echo 'Вы приложили следующий файл: '.$_POST['file'];
                    }
                    
                    echo '<br>' . '<a class="btn" href="feedback.php?fio='.$_POST['fio'].'&email='.$_POST['email'].'&source='.$_POST['source'].'">Заполнить снова</a>';

                ?>
            </div>
        </div>
    </div>

    <div class="footer">
    <div class="header-line">
        <p class="foot" id = "email">Почта: bukvoezhka@gmail.com</p>
        <p class="foot" id = "contact">Телефон: 89778060923</p>

        <a class="nav" href="<?php	

                    $name='Обратная связь'; 
                    $link='feedback.php';	
                    $current_page=true;	

                    echo $link;	

                ?>"><?php	

                    if( $current_page )	
                        echo $name;
            
                ?></a>


        <!-- a class="nav" href="feedback.php">Обратная связь</a -->
        <p class="foot" id = "date"><?php require "date.php"; ?></p>
    </div>   
</div>
</body>  
</html>