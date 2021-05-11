<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


	<?php

		// left_menu.php 에서 추가된 모든 게시판+페이지를 추가해주셔야 합니다.

		if($bo_table == 'notice' ||
		$bo_table == 'free' ||
		$bo_table == 'free_responsive' ||
		$bo_table == 'free_scroll' ||
		$pagename == "product-2.php" ||
		$pagename == "pages-1.php" ||
		$pagename == "pages-2.php"
		){
	?>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->

	<?php }?>



    <footer class="ft_bg">
  		<div id="ft_d" class="container footer">
        <div class="ft_txt">
          <ul class="ft_info">
            <li>회사소개</li>
            <li>이용약관</li>
            <li><span>개인정보처리방침</span></li>
          </ul>
          <div id="tnb-left">
            <!-- social -->
            <div class="sns_icon">
            <a href="#" target="_blank"><i class="xi-youtube-play xi-2x"></i></a>
            </div>
            <div class="sns_icon">
            <a href="#"><i class="xi-instagram xi-2x"></i></a>
            </div>
            <div class="sns_icon">
            <a href="#" target="_blank"><i class="xi-facebook xi-2x"></i></a>
            </div>
          </div>
        </div>
  			<div class="row">
  				<div class="col-md-12 text-left ft_I">
  					<h2>
              <a href="#">
                <img src="/img/bottom_logo.png" alt="코웨이 하단 로고">
              </a>
            </h2><!-- image or text  -->
            <div class="ft_T">
              <p>
                이 페이지는 포토폴리오제작으로 '코웨이'와는 관련 없음을 알립니다.
              </p>
    					<p>
    						 본사 : 서울특별시 구로구 디지털로26길 38(구로동) G-Tower 코웨이 15층~20층 <br />
    						 사업장 주소 : 충남 공주시 유구읍 유구마곡사로 136-23<br />
    						 <a href="http://sj926thwjdk.dothome.co.kr" class="color-white">대표이사 : 박소정</a><br />
    					</p>
            </div>
            <div class="call">
              <dl class="">
                <dt>고객콜센터</dt>
                <dd class="num">1588-5200</dd>
                <dd class="time">평일 AM 9:00 ~ PM 6:00 <br>
                    토요일 AM 9:00 ~ PM 2:00 <br>
                    공휴일/일요일 AM 9:00 ~ PM 4:00 <br>
                </dd>
              </dl>
            </div>

  				</div>
  			</div>
        <div class="col-md-12 text-center copy">
    				Copyright 21_0423 &copy; <a href="http://ety.kr" target="_blank"><span class="color-white">sj926thwjdk</span></a>
    		</div>
  		</div><!--/container-->
      <div id="ft_m" class=" footer">
        <div class="ft_txt container">
          <ul class="ft_info">
            <li>회사소개</li>
            <li>이용약관</li>
            <li><span>개인정보처리방침</span></li>
          </ul>
        </div>
          <div class="line"></div>
        <div class="ft_txt container">
          <div id="tnb-left">
            <!-- social -->
            <div class="sns_icon">
            <a href="#" target="_blank"><i class="xi-youtube-play xi-2x"></i></a>
            </div>
            <div class="sns_icon">
            <a href="#"><i class="xi-instagram xi-2x"></i></a>
            </div>
            <div class="sns_icon">
            <a href="#" target="_blank"><i class="xi-facebook xi-2x"></i></a>
            </div>
          </div>

  			<div class="row">
  				<div class="col-md-12 text-left ft_I">
  					<h2>
              <a href="#">
                <img src="/img/bottom_logo.png" alt="코웨이 하단 로고">
              </a>
            </h2><!-- image or text  -->
            <div class="ft_T">
              <p>
                이 페이지는 포토폴리오제작으로 '코웨이'와는 관련 없음을 알립니다.
              </p>
    					<p>
    						 본사 : 서울특별시 구로구 디지털로26길 38(구로동) G-Tower 코웨이 15층~20층 <br />
    						 사업장 주소 : 충남 공주시 유구읍 유구마곡사로 136-23<br />
    						 <a href="http://sj926thwjdk.dothome.co.kr" class="color-white">대표이사 : 박소정</a><br />
    					</p>
            </div>
            <div class="call">
              <dl class="">
                <dt>고객콜센터</dt>
                <dd class="num">1588-5200</dd>
                <dd class="time">평일 AM 9:00 ~ PM 6:00 <br>
                    토요일 AM 9:00 ~ PM 2:00 <br>
                    공휴일/일요일 AM 9:00 ~ PM 4:00 <br>
                </dd>
              </dl>
            </div>

  				</div>
  			</div>
        <div class="col-md-12 text-center copy">
    				Copyright 21_0423 &copy; <a href="http://ety.kr" target="_blank"><span class="color-white">sj926thwjdk</span></a>
    		</div>
  		</div><!--/container-->


    </footer>


    <!-- Bootstrap core JavaScript -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	var jQuery = $.noConflict(true);
	</script>
    <script src="<?php echo G5_THEME_URL?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo G5_THEME_URL?>/assets/parallax/js/parallax.min.js"></script>

	<!-- countdown -->
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/kinetic.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/assets/countdown/js/jquery.final-countdown.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/bootstrap-dropdownhover.js"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>
	<script>
		$('.carousel').carousel({ interval: 1000 });
	</script>
	<script>
		// parallax-window 이미지를 수정해주세요.
		jQuery('.parallax-window').parallax({imageSrc: 'https://via.placeholder.com/1920x1080'});
	</script>
	<script>
		$(document).ready(function () {
			//owl
			// jQuery(".owl-carousel").owlCarousel({
			// 	loop:true,
			// 	margin:0,//이미지 사이의 간격
			// 	nav:true,
      //   autoplay:true,
			// 	responsive:{
			// 		0:{
			// 			items:1 // 모바일
			// 		},
			// 		600:{
			// 			items:1 // 브라우저 600px 이하
			// 		},
			// 		1000:{
			// 			items:1 // 브라우저 100px 이하
			// 		}
			// 	}
			// });

			// countdown
			'use strict';
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319
			});
		});
	</script>

<script>

</script>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
