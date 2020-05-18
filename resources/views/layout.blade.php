<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Volkhov:400italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">

        <header>
            <div class="header-nav">
                <div class="header-nav-logo">
                    <a href="#">
                        <img src="/images/header_logo.png" alt="The logo" srcset="">
                    <span class="logо">МЦ Д-р Диневи</span>
                    </a>
                </div>
            
                <div class="header-nav-menu">
                    <ul>
                        <li><a class = "nav_menu_items" href=""></a>НАЧАЛО</li>
                        <li><a class = "nav_menu_items" href=""></a>ЗА НАС</li>
                        <li><a class = "nav_menu_items" href=""></a>СПЕЦИАЛИСТИ</li>
                        <li><a class = "nav_menu_items" href=""></a>УСЛУГИ</li>
                        <li><a class = "nav_menu_items" href=""></a>КОНТАКТИ</li>
                    </ul>
                </div>

            </div> 
          
        </header>

        @yield('content')


    </div>
</body>
</html>