<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta id="token" content="{{ csrf_token() }}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{ $title }} - DentSmart</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css" />

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper { height:100%; }
    </style>
    <![endif]-->

</head>

<body id="dent_smart" class="auth-background">

<!-- BEGIN Wrapper -->
<div id="wrapper">

    <div id="content">
        <div class="fluid-container">
            @yield('content')
        </div>
    </div>

    <script src="/js/app.js"></script>
</div>
<!-- END Wrapper -->

</body>

</html>