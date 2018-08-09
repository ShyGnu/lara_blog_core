<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="/css/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="/css/assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="/css/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="/css/assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <link href="/css/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="/css/assets/plugins/calendar/dist/fullcalendar.css" rel="stylesheet" />
    <link href="/css/assets/css/style.css" rel="stylesheet">
    <link href="/css/assets/css/colors/blue.css" id="theme" rel="stylesheet">
    <style>
        table.table form
        {
            display: inline-block;
        }

        button.delete
        {
            background: transparent;
            border: none;
            color: #337ab7;
            padding: 0px;
        }
    </style>
    @yield('extension_styles')
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b>
                            <i style="font-size: 35px;" class="mdi mdi-bug dark-logo light-logo"></i>
                        </b>
                        <span>
                         <h5 style="font-size: 30px;" class="dark-logo light-logo">ITBug</h5>
                         </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Поиск"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        
                        
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Уведомления</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Запуск админки</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Имент Сегодня</h5> <span class="mail-desc">Напоминание что у вас запланировано мероприятие</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Настройки</h5> <span class="mail-desc">Вы можете изменять темплейт как хотите</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Имя пользователя</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Проверить все уведомления</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">У вас 2 новых сообщения</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img"> <img src="/img/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Имя отправителя1</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img"> <img src="/img/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Имя отправителя2</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img"> <img src="/img/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Имя отправителя3</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <a href="#">
                                                <div class="user-img"> <img src="/img/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Имя отправителя4</h5> <span class="mail-desc">Просто посмотри мой администратор!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Просмотреть всю почту</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/img/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="/img/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Виктор Киселев</h4>
                                                <p class="text-muted">varun@gmail.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Просмотреть профиль</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> Мой профиль</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Входящее</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Настройки Уч. записи.</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Выйти с учетной записи.</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile" style="background: url(/img/background/user-info.jpg) no-repeat;">
                    <div class="profile-img"> <img src="/img/new_logo.png"  alt="user" /> </div>
                    
                </div>
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">КОНТЕНТ</li>
                        
                        <li><a href="./index.html"><i class="mdi mdi-gauge"></i><span class="hide-menu">Админка</span></a></li>      
                        <li><a href="./posts/index.html"><i class="mdi mdi-file"></i><span class="hide-menu">Новости</span></a></li> 
                        <li><a href="./categories/index.html"><i class="mdi mdi-checkbox-blank-outline"></i><span class="hide-menu">Категории</span></a></li>
                        <li><a href="./tags/index.html"><i class="mdi mdi-check"></i><span class="hide-menu">Теги</span></a></li>                         

                        <li class="nav-devider"></li>
                        
                        <li class="nav-small-cap">НАСТРОЙКИ БЕКЕНДА</li>
                        
                        <li><a href="./users/index.html"><i class="mdi mdi-account-box"></i><span class="hide-menu">Пользователи</span></a></li>
                        <li><a href="./subscribes/index.html"><i class="mdi mdi-email"></i><span class="hide-menu">Подписчики</span></a></li>
                        <li><a href="./comments/index.html"><i class="mdi mdi-message-text-outline"></i><span class="hide-menu">Комментарии</span></a></li>
        
                    </ul>
                </nav>

            </div>

            <div class="sidebar-footer">
                <a href="" class="link" data-toggle="tooltip" title="Настройки"><i class="ti-settings"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <a href="" class="link" data-toggle="tooltip" title="Выйти с учетной записи"><i class="mdi mdi-power"></i></a>
            </div>
        </aside>

        <div class="page-wrapper">
           <div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Административная панель</h3>
            <h6 class="text-danger m-b-0 m-t-0 font-italic">Твое личное креативное пространство</h6>
        </div>

    </div>         
</div>
@yield('content')
            <footer class="footer">
                Разработано веб студией IT-Bug
            </footer>
        </div>
    </div>

    <script src="/js/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/js/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="/js/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/js/assets/js/jquery.slimscroll.js"></script>
    <script src="/js/assets/js/waves.js"></script>
    <script src="/js/assets/js/sidebarmenu.js"></script>
    <script src="/js/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/js/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/js/assets/js/custom.min.js"></script>
    <script src="/js/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/js/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/js/assets/plugins/moment/moment.js"></script>
    <script src='/js/assets/plugins/calendar/dist/fullcalendar.min.js'></script>
    <script src="/js/assets/plugins/calendar/dist/jquery.fullcalendar.js"></script>
    <script src="/js/assets/plugins/calendar/dist/cal-init.js"></script>
    <script src="/js/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/js/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
 @yield('extension_scripts')   
</body>

</html>
