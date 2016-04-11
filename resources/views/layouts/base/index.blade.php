<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta id="token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dent Smart</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body id="dent_smart">

<!-- BEGIN Wrapper -->
<div id="wrapper">

    <div id="header">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/dashboard"><span class="glyphicon glyphicon-tag"></span>&nbsp;Dent Smart</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <!-- BEGIN Movies -->
                        <li>
                            <a href="/dashboard/patients"><span class="glyphicon glyphicon-user"></span>&nbsp;Pacienţi</a>
                        </li>
                        <!-- END Movies -->
                        <!-- BEGIN Halls -->
                        <li>
                            <a href="/dashboard/appointments"><span class="glyphicon glyphicon-calendar"></span>&nbsp;Programări</a>
                        </li>
                        <!-- END Halls -->

                        <li>
                            <a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Intervenţii</a>
                        </li>

                        <!-- BEGIN Statistics -->
                        <li>
                            <a href="/dashboard/statistics"><span class="glyphicon glyphicon-stats"></span>&nbsp;Statistici</a>
                        </li>
                        <!-- END Statistics -->
                    </ul>

                    <!-- BEGIN Right content -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span class="glyphicon glyphicon-user"></span>&nbsp;{{ $user->first_name . ' ' . $user->last_name }}
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <!-- BEGIN Settings -->
                                <li>
                                    <a href="/dashboard/account-settings"><span class="glyphicon glyphicon-cog"></span>&nbsp;Setarile contului</a>
                                </li>
                                <!-- END Settings -->
                                <li class="divider"></li>
                                <!-- BEGIN Log out -->
                                <li>
                                    <a href="/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Deconectare</a>
                                </li>
                                <!-- END Log out -->
                            </ul>
                        </li>
                    </ul>
                    <!-- END Right content -->

                </div>
            </div>
        </nav>
    </div>

    <div id="content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <div id="footer">
        footer
    </div>

    <script src="/js/app.js"></script>

</div>
<!-- END Wrapper -->

</body>

</html>