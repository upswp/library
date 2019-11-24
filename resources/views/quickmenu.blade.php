<div id="quickmenu">
<div class="btn-group-vertical" data-toggle="buttons">
    <button type="button" class="btn btn-btn1 hover4">MYPAGE</button>
    <button type="button" class="btn btn-btn3 hover4"><a href="/signin">SIGN-IN</a></button>

</div>
</div>
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
