<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMART LIBRARY</title>

    <!--Bootstrap core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!--Custom Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact-input-style.css">
    <link rel="stylesheet" href="css/hover-effect.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- Font Awesome v5.0.0 css CDN연동
         단, 아래 연동된 Font Awesome css sheet와 위 라인에 기존 font-awesome css파일(구버전)과
         겹칠 수 있으니 주의!!
     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.0/css/all.css">


  </head>
<body>
    @include('topmenu')
    @include('quickmenu')
    <div class="contents">
        @yield('content')
    </div>
    <footer>
        @include('footer')
    </footer>
</body>
</html>
