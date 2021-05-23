<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>


    <footer class="ft_bg">
  		<div id="ft_d" class=" footer">
        <div class="ft_txt">
          <div class="container">
            <ul class=" ft_info">
              <li>회사소개</li>
              <li>이용약관</li>
              <li><span class="fw_b">개인정보처리방침</span></li>
            </ul>
            <div id="tnb-left">
              <div class="sns_icon">
                <a href="//www.youtube.com/user/cowaystory" target="_blank"><i class="xi-youtube-play xi-2x"></i></a>
              </div>
              <div class="sns_icon">
                <a href="//www.instagram.com/coway.kr/"><i class="xi-instagram xi-2x"></i></a>
              </div>
              <div class="sns_icon">
                <a href="//ko-kr.facebook.com/usacoway/" target="_blank"><i class="xi-facebook xi-2x"></i></a>
              </div>
            </div>
          </div><!-- /.container -->
        </div>
        <div class="container ft_under">
    				<div class="text-left d-lg-flex ft_I  justify-content-between">
    					<h2>
                <a href="#">
                  <img src="/img/bottom_logo.png" alt="코웨이 하단 로고">
                </a>
              </h2>
              <div class="ft_T ml-0 ml-lg-5">
                <p>
                  이 페이지는 포토폴리오제작으로 '코웨이'와는 관련 없음을 알립니다.
                </p>
      					<p>
      						 본사 : 서울특별시 구로구 디지털로26길 38(구로동) G-Tower 코웨이 15층~20층 <br />
      						 사업장 주소 : 충남 공주시 유구읍 유구마곡사로 136-23<br />
      						 <a href="//sj926thwjdk.cafe24.com">대표이사 : 박소정</a><br />
      					</p>
              </div>
              <div class="d-block text-center mb-3">
                <div class="call">
                  <dl class="text-right">
                    <dt>고객콜센터</dt>
                    <dd class="num fw_b">1588-5200</dd>
                    <dd class="time">
                        평일 AM 9:00 ~ PM 6:00 <br>
                        토요일 AM 9:00 ~ PM 2:00 <br>
                        공휴일/일요일 AM 9:00 ~ PM 4:00 <br>
                    </dd>
                  </dl>
                </div>
              </div>
    				</div>
        </div><!-- /.container-->
        <div class="col-md-12 mt-5 text-center copy">
    				Copyright &copy; <a href="//sj926thwjdk.cafe24.com" target="_blank"><span>NCS 과정 | 박소정의 포토폴리오</span></a>
    		</div>
  		</div><!--/.footer-->
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
  <script type="text/javascript" src="/vendor/aos/aos.js?ver=2.3.1"></script>
	<script type="text/javascript" src="<?php echo G5_THEME_URL?>/js/custom.js"></script>


	<script>
		jQuery('.parallax-window').parallax({imageSrc: '/img/coway_app.jpg'});
	</script>
	<script>
		$(document).ready(function () {
			'use strict';
			jQuery('.countdown').final_countdown({
				'start': 1362139200,
				'end': 1388461320,
				'now': 1387461319
			});
		});
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
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
