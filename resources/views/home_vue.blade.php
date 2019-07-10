<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-commerce website</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Font awesome -->
    <link href="{{asset('front/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('front/css/bootstrap.css')}}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{asset('front/css/jquery.smartmenus.bootstrap.css')}}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/jquery.simpleLens.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/nouislider.css')}}">
    <!-- Theme color -->
    <link id="switcher" href="{{asset('front/css/theme-color/dark-red-theme.css')}}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{asset('front/css/sequence-theme.modern-slide-in.css')}}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>



<h1>Home</h1>
<div id="app">

        <second-app-home> </second-app-home>



</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('front/js/bootstrap.js')}}"></script>
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="{{asset('front/js/jquery.smartmenus.js')}}"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="{{asset('front/js/jquery.smartmenus.bootstrap.js')}}"></script>
<!-- To Slider JS -->
<script src="{{asset('front/js/sequence.js')}}"></script>
<script src="{{asset('front/js/sequence-theme.modern-slide-in.js')}}"></script>
<!-- Product view slider -->
<script type="text/javascript" src="{{asset('front/js/jquery.simpleGallery.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.simpleLens.js')}}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{asset('front/js/slick.js')}}"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{asset('front/js/nouislider.js')}}"></script>
<!-- Custom js -->
<script src="{{asset('front/js/custom.js')}}"></script>
</body>
</html>
