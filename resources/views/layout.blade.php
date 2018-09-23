<!doctype html>
<html lang="ru">
<head>
    <title>ФЕЙК АКТИВ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Material Kit CSS -->
    <link rel="stylesheet" href="/css/front/assets/css/material-kit.css">

    <link rel="stylesheet" href="/css/front/assets/css/animate.css">


</head>
<body class="index-page">

<!-- НАВИГАЦИЯ -->
<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.html">
                <img width="110" src="/img/front/logo.png" alt="ФЕЙК-АКТИВ">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        ПРО НАС
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aktivists.html">
                        ДОСЬЄ АКТИВІСТІВ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">
                        НОВИНИ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contacts.html">
                        КОНТАКТИ
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        Переклад сайту
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="#" class="dropdown-item">
                            Українська
                        </a>
                        <a href="#" class="dropdown-item">
                            Англійська
                        </a>
                    </div>
                </li>
                <form class="form-inline ml-auto">
                    <div class="form-group has-white">
                        <input style="color: #000;" type="text" class="form-control" placeholder="Пошук">
                    </div>
                    <button type="submit" class="btn btn-white btn-raised btn-fab btn-fab-mini btn-round">
                        <i class="material-icons">search</i>
                    </button>
                </form>

                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="/logout" data-original-title="Вихід">
                        <i class="material-icons">exit_to_app</i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="/admin" data-original-title="Вхід до адмін панелі">
                        <i class="material-icons">dashboard</i>
                    </a>
                </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="/login" data-original-title="Вхід до сайту">
                            <i class="material-icons">person pin</i>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="#" target="_blank" data-original-title="Підписуйся на сторінку Facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->

<!-- START TOP BG SECTION -->
@yield('headerinfo')


<!-- END TOP BG SECTION -->
@yield('content')

<footer class="footer ">
    <div style="color: #FFFFFF" class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="./index.html">
                        Про Нас
                    </a>
                </li>
                <li>
                    <a href="./aktivists.html">
                        Досьє активістів
                    </a>
                </li>
                <li>
                    <a href="./news.html">
                        Новини
                    </a>
                </li>
                <li>
                    <a href="./contacts.html">
                        Контакти
                    </a>
                </li>
            </ul>
        </nav>
        <div style="color: #FFFFFF" class="copyright pull-right">
            Всі права захищенні
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made by
            <a href="#" target="_blank">ITBug</a> studio.
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="/js/front/assets/js/core/jquery.min.js"></script>
<script src="/js/front/assets/js/core/popper.min.js"></script>
<script src="/js/front/assets/js/bootstrap-material-design.js"></script>

<script src="/js/front/assets/js/wow.js"></script>
<script>
    new WOW().init();
</script>


<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="/js/front/assets/js/plugins/nouislider.min.js"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="/js/front/assets/js/material-kit.js?v=2.0.0"></script>

</body>
</html>