<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
    
<div class="header-down">
    <h1 class=info>Интернет-магазин книг "На полке"</h1>
    <p class=info2>Наполке.ru – официальный книжный магазин крупнейшей в России издательской группы Эксмо-АСТ.</p>
    <p class=info2>В нашем каталоге представлено свыше 60 000 товаров издательств «Эксмо», «АСТ», «Манн, Иванов и Фербер», издательских брендов «БОМБОРА», «Corpus», «Mainstream», «Редакция Елены Шубиной», «Вилли-Винки», «Fanzon», «Комильфо», «Канц-Эксмо» и др.</p>
    <p class=info2>Наполке.ru одним из первых получает книжные новинки ведущих российских издательств и предлагает их покупателям по лучшей цене. На книги, которые только планируются к выходу, доступен предзаказ.</p>
    <p class=info2>В нашем ассортименте вы найдёте художественную и бизнес-литературу, товары для хобби и творчества, детские книги, учебники, научно-популярную литературу, офисные и канцелярские принадлежности, издания с автографами известных писателей и другую продукцию.</h1>
    <p><img class="books" src="books.jpg" height=350px></p>
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