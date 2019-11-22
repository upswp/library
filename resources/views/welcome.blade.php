<!DOCTYPE html>
<html lang="kor">
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
<!-- NAVBAR
================================================== -->



<nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250" >
    <div class="container" >
        <!- Brand and toggle get grouped for better mobile display ->
        <div class="navbar-header page-scroll">
            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand">Cre8</a>
        </div>
        <!- Collect the nav links, forms, and other content for toggling ->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="#services">프로그램 소개</a></li>
                <li><a href="#about">이용 안내예요</a></li>
                <li><a href="#features">공지 사항</a></li>
                <li><a href="#team">도서 검색</a></li>
                <!--<li><a href="#">MYPAGE</a></li>
                <li><a href="#">LOGIN</a></li>-->

            </ul>
        </div>
        <!- /.navbar-collapse ->
    </div>
    <!- /.container-fluid ->
</nav>

<!-- quick menu 버튼 모음 -->
<div class="btn-group-vertical" data-toggle="buttons">
    <button type="button" class="btn btn-btn1 hover4">MYPAGE</button>
    <button type="button" class="btn btn-btn3 hover4"><a href="signin.blade.phㅇp">SIGN-IN</a></button>
</div>


<section class="banner-sec" id="home">
<div class="container">
<div class="jumbotron">
<h1>도서 관리 프로그램</h1>
<h2>원하는 책을 쉽게 찾아보세요.</h2>

<div class="input-group">


                <input type="text" placeholder="이곳에 입력하세요." class="form-control"><span class="input-group-btn">
                 <button type="button" class="btn btn-search">검색</button>
                </span>
</div>
</div>
</div>
</section>



<section class="four-col-services" id="services">
  <div class="container">
    <div class="row">
      <h2 class="text-center">프로그램 소개</h2>
      <h4 class="text-center">한 번쯤 도서관을 이용하다 제자리에 있지 않은 책으로 인해 이용에 불편을 느껴보지 않으셨나요?
      <h4 class="text-center">분명 도서 검색 DESK에는 현재 대출 가능 상태의 책이지만, 책이 어디 있는지 찾을 수 없어 난감한 적이 있었을 것입니다.<br>
        지금의 도서관에서는 도서의 대출 가능 여부, 책장의 위치 안내 정도의 DB만 관리할 뿐 현재의 책 상태에 대해선 알 수 없습니다.<br>
        이러한 상황에서 현재의 도서관 시스템은 도서관 사서가 수시로 책을 변경하는 수동적인 관리에만 의존하고 있습니다.<br>
        그래서 우리는 이러한 도서관의 비효율적인 관리 시스템을 보완하고자 하였습니다. </h4>



      <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block up-effect"><i class="fa fa-camera" aria-hidden="true"></i><h3>Camera sensor</h3><p>카메라센서를 이용하여 바코드를 읽어<br> 현재 도서의 위치가 올바른지 검사합니다.</p></div>

      <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block down-effect"><i class="fa fa-map-marker-alt" aria-hidden="true"></i><h3>Localization</h3><p>도서가 잘못된 위치에 비치되어 있다면 <br>현재 위치와 올바른 위치를 모두 표시합니다.</p></div>

      <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block up-effect"><i class="fa fa-microchip" aria-hidden="true"></i><h3>Raspberry</h3><p>각 책장에 micro pc를 사용하여,<br> IoT 기술을 구현하였습니다.  </p></div><br>

     <!-- <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block down-effect"><i class="fa fa-calendar-o" aria-hidden="true"></i><h3>Heading</h3><p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p></div>

      <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block up-effect"><i class="fa fa-code" aria-hidden="true"></i><h3>Heading</h3><p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p></div>

      <div class="col-lg-4 col-md-4 col-sm-6 text-center service-block down-effect"><i class="fa fa-floppy-o" aria-hidden="true"></i><h3>Heading</h3><p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p></div>
     -->


    </div>
  </div>
</section>



<section class="about-sec" id="about">
<div class="container">
<div class="row">
<div class="col-md-7 col-sm-12 main-text"><h2>이용안내</h2><p class="lead">[ 개관 안내 ]</p>
<p>학기 중 : 평일 - 09:00 ~ 22:00  토요일 - 09:00 ~ 13:00</p>
<p>방학 중 : 평일 - 09:00 ~ 17:00  토요일 - 09:00 ~ 13:00</p>
<p>휴관일  : 일요일, 국경일, 개교기념일 특별한 경우 중앙도서관장이 휴관일을 정할 수 있습니다.</p>
</div>
<div class="col-md-5 col-sm-12 points">
<div class="row">
<div class="col-sm-6 col-xs-6 point-content text-center"><img src="img/icon-about-01.png"><p>뭘 쓰지</p></div>
<div class="col-sm-6 col-xs-6 point-content text-center"><img src="img/icon-about-02.png"><p>뭘 쓰지</p></div>
<div class="col-sm-6  col-xs-6 point-content text-center"><img src="img/icon-about-03.png"><p>뭘 쓰지</p></div>
<div class="col-sm-6 col-xs-6 point-content text-center"><img src="img/icon-about-04.png"><p>뭘 쓰지</p></div>
</div>
</div>

</div>
</div>
</section>

<section class="feature-section" id="features">
<div class="container">
<h2 class="text-center">공지 사항</h2>
<p class="text-center sub-text">우리 도서관의 다양한 정보를 알아보세요.</p>
<div class="row">
<div class="col-md-6 img-sec left-effect"><img class="img-responsive" src="img/info-bg-01.jpg"></div>
<div class="col-md-6 right-effect"><div class="content-box"><h3>공지 사항</h3><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
<a href="#">Know More<i class="fa fa-angle-right"></i></a></div></div>
</div>

<div class="row">
<div class="col-md-6 col-md-push-6 img-sec left-effect"><img class="img-responsive" src="img/info-bg-03.jpg"></div>
<div class="col-md-6 col-md-pull-6 right-effect"><div class="content-box"><h3>신착도서 안내</h3><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
<a href="#">Know More<i class="fa fa-angle-right"></i></a></div></div>
</div>

<div class="row">
<div class="col-md-6 img-sec left-effect"><img class="img-responsive" src="img/info-bg-02.jpg"></div>
<div class="col-md-6 right-effect"><div class="content-box"><h3>추천도서 안내</h3><p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum</p>
<a href="#">Know More<i class="fa fa-angle-right"></i></a></div></div>
</div>
</div>
</section>

<!--<section class="team-sec" id="team">
  <div class="container">
    <div class="row">
      <h2 class="text-center">Our Team<br><small>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat</small></h2>

      <div class="col-lg-3 col-md-6 col-sm-6 text-center member-block"> <img class="up-effect" src="img/team-member-01.jpg">
        <h3 class="up-effect">Harry Potter</h3>
        <div class="contact-con down-effect"><i class="fa fa-phone fa-2x"></i><i class="fa fa-envelope-o fa-2x"></i><i class="fa fa-heart-o fa-2x"></i></div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center member-block"> <img class="up-effect" src="img/team-member-02.jpg">
        <h3 class="up-effect">Ron Weasly</h3>
        <div class="contact-con down-effect"><i class="fa fa-phone fa-2x"></i><i class="fa fa-envelope-o fa-2x"></i><i class="fa fa-heart-o fa-2x"></i></div>
              </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center member-block"> <img class="up-effect" src="img/team-member-03.jpg">
        <h3 class="up-effect">Harmion Granger</h3>
                <div class="contact-con down-effect"><i class="fa fa-phone fa-2x"></i><i class="fa fa-envelope-o fa-2x"></i><i class="fa fa-heart-o fa-2x"></i></div>

      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 text-center member-block"> <img class="up-effect" src="img/team-member-04.jpg">
        <h3 class="up-effect">Longbottom</h3>
                <div class="contact-con down-effect"><i class="fa fa-phone fa-2x"></i><i class="fa fa-envelope-o fa-2x"></i><i class="fa fa-heart-o fa-2x"></i></div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="testimonial-sec" id="testimonials">
<div class="container">
<div class="row">
<div class="col-md-12 text-center"><h2>Client Testimonials</h2></div>
<div class="col-md-10 col-md-offset-1">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators --
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides --
  <div class="carousel-inner" role="listbox">
    <div class="item active">

      <div class="profile-circle text-center"><img src="img/client-01.jpg"></div>
              <blockquote>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</em></p>
                <footer>Someone famous in Source Title</footer>
              </blockquote>

    </div>
    <div class="item">
      <div class="profile-circle text-center"><img src="img/client-02.jpg"></div>
              <blockquote>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</em></p>
                <footer>Someone famous in Source Title</footer>
              </blockquote>

    </div>
    <div class="item">
      <div class="profile-circle text-center"><img src="img/client-03.jpg"></div>
              <blockquote>
                <p><em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus."</em></p>
                <footer>Someone famous in Source Title</footer>
              </blockquote>

    </div>
  </div>

</div>
</div>
</div>

</div>

</section> -->

<div class="f-small-block">
<div class="container">
<div class="row small-inner text-center">
<h3>2019 Capstone Project</h3>
<p>한남대학교 컴퓨터통신무인기술학과 소속 <br>구성 인원 : 손범준 김현우 설선화 박상우<br> 담당 교수님: 이재광 교수님</p>
<!--<a href="#" class="btn btn-danger btn-capsul">Subscribe Now</a>-->
  <a href="http://www.hannam.ac.kr/main/" style="padding-right: 50px;"><img src="/img/hannam.png" width="180" height="50"></a>
  <a href="https://hanul.hannam.ac.kr/" style="padding-right: 50px;"><img src="/img/hannam_lib.png" width="250" height="50"></a>
</div>
</div>
</div>


<!-- <section class="content contact-sec" id="contact">
				<div class="container">
                <div class="row">
                <div class="col-lg-12 text-center"><h2>Contact Us</h2></div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Name</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Phone</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <span class="t-area input-hoshi">
                <textarea class="input_field input_field-hoshi" rows="1"></textarea>
						<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                <a href="#" class="btn btn-submit btn-capsul">Submit</a>
                </div>

                </div>
                </div>

</section> -->
<footer>
<div class="container">
<div class="row">
<!--<p class="text-center">Shared by <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">BootstrapThemes</a>
</p>
</div>
</div>
</footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/oppear_1.1.2.min.js"></script>
    <script>

	$(window).scroll(function () {
		var sticky = $('.navbar-brand'),
		    scroll = $(window).scrollTop();

			if (scroll >= 250) sticky.addClass('dark');
			else sticky.removeClass('dark');

	});

	$('.service-box').Oppear({
		delay : 500,
		});
	$('.main-text').Oppear({
		direction:'right',
	});
	$('.points').Oppear({
		direction:'left',
	});
	$('.up-effect').Oppear({
		direction:'up',
	});
	$('.down-effect').Oppear({
		direction:'down',
	});
	$('.left-effect').Oppear({
		direction:'right',
	});
	$('.right-effect').Oppear({
		direction:'left',
	});



    </script>
    <script>
	$('a[href^="#"]').on('click', function(event) {

        var target = $( $(this).attr('href') );

        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 1000);
        }

    });

    $(document).ready(function() {
        /* quick menu 이동 애니메이션 */
        var quickBox = $('.btn-group-vertical'); //퀵메뉴 코딩한 div의 클래스 네임 - 자신의 이름에 맞게 수정하세요
        var quick_top = 200; // 기준이 되는 높이 값입니다. 수정해서 테스트 해보시면 감이 오실꺼에요.
        quickBox.css('top', $(window).height() );

        quickBox.animate( { "top": $(document).scrollTop() + quick_top +"px" },  500 ); //숫자값을 변경하시면 속도변화
        $(window).scroll(function(){
            quickBox.stop();
            quickBox.animate( { "top": $(document).scrollTop() + quick_top + "px" }, 500 ); //숫자값을 변경하시면 속도변화
        });





    });
    </script>
  </body>
</html>
