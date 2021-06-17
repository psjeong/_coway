<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<?php
/**************************************************************************
ety_theme_company테마 사용
**************************************************************************/
?>



<!--------------------------슬라이드 -------------------------->
<div class="slider">
  <?php echo latest('theme/pic_basic_owl','event',3,100); ?>
</div>

<!------------------------- NEW 제품 -------------------------->

<div class="newBox section">
	<div class="container">
    <div class="products row p-0 m-0" >
      <h2 class="font_s fw_b" data-aos="fade-up" data-aos-duration="1000">PRODUCTS</h2>
      <div class="m-3 m-lg-0 d-inlin-block">
        <ul class="row">
          <li class="mattress col-lg-3 col-md-3 text-center mr-lg-5" data-aos="fade-up" data-aos-duration="2000">
            <a class="d-inline-block shadow" href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=products&sca=%EB%A7%A4%ED%8A%B8%EB%A6%AC%EC%8A%A4">
              <span class="imgBox">
                <img src="/img/mattress.jpg" alt="매트리스 바로가기">
              </span>
              <div class="txtBox text-left">
                <p class="fw_b">MATTRESS</p>
                <span>
                  에르고노믹스 7존 폼 탑퍼로
                  <br>
                   더 섬세하고 탄탄하게
                 </span>
              </div>
            </a>
          </li>
          <li class="allInOne pt-5 pt-lg-0 text-center col-lg-3 mr-lg-5 ml-lg-5" data-aos="fade-up" data-aos-duration="3000">
            <a class="d-inline-block shadow"  href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=products&sca=%EC%9D%BC%EC%B2%B4%ED%98%95">
              <span class="imgBox">
                <img src="/img/allInOne.jpg" alt="일체형 바로가기">
              </span>
              <div class="txtBox text-left">
                <p class="fw_b">ALL IN ONE</p>
                <span>
                  고무나무 원목으로 흔들림 없이
                  <br>
                   안정적인 지지력
                 </span>
              </div>
            </a>
          </li>
          <li class="frame pt-5 pt-lg-0 text-center col-lg-3 ml-lg-5" data-aos="fade-up" data-aos-duration="2000">
            <a class="d-inline-block shadow"  href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=products&sca=%ED%94%84%EB%A0%88%EC%9E%84">
            <span class="imgBox">
              <img src="/img/frame.jpg" alt="프레임 바로가기">
            </span>
            <div class="txtBox text-left">
              <p class="fw_b">FRAME</p>
              <span>
                수면 습관부터 라이프 스타일,
                <br>
                침실 인테리어까지
              </span>
            </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
	</div>
</div>


<!-------------------------- 유튜브영상 -------------------------->
<div class="container section">
  <div id="vd_d" class="backBg">
	  <div class="row justify-content-between">
      <div id="youtube" class="col-lg-6 mt-lg-0 pl-lg-2">
        <div>
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7tzxVWWOsN8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
      </div>
  		<div class="care mt-5 mt-lg-0  ml-lg-5 ml-4 pl-lg-4" data-aos="fade-up" data-aos-duration="1000">
  		  <h2 class="fw_b">SERVICE</h2>
        <p class="heading fw_b">코웨이 슬립케어 매트리스 케어서비스</p>
        <P class="txt">
            코웨이 매트리스 케어서비스는 위생 관리 전문가<br>
            '홈케어닥터'가 오염도 측정부터 UV살균까지 전문 장비를 활용해 <br>
            매트리스를 깐깐하게 관리해 드리는 서비스입니다.
        </p>
        <a href="//sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=service">자세히보기  <i class="xi-long-arrow-right"></i></a>
  		</div>
	  </div>
	</div>
</div>


<!----------------------------- 이벤트 폼태그 & sns 영역 ----------------------->
<div class="evt_form">
  <div id="applay" class="ap_d event_info row m-0" >
    <div class="left col-lg-7 pt-5 p-0"  data-aos="fade-up" data-aos-duration="1000">
      <div class="account">
        <div class="way">
          <div class="how p-lg-5">
            <h3 class="fw_b pb-5">EVENT 참여방법</h3>
            <div class="ap_how pt-3">
              <div class="step step1 col-4">
                <p>STEP 01</p>
                <span>
                  코웨이 슬립케어 매트리스 <br>
                  <strong>무상케어서비스 신청</strong>하기
                </span>
                <img src="/img/applay_btn.png" alt="신청하기이미지"  class="step1Img">
              </div>
              <div class="step step2 col-4">
                <p>STEP 02</p>
                <span>
                  케어서비스 체험하며 <br>
                  <strong>후기 인증샷</strong>찍기
                </span>
                <img src="/img/img.png" alt="이미지" class="step2Img">
              </div>
              <div class="step step3 col-4">
                <p>STEP 03</p>
                <span>
                  <strong>필수 해시태그</strong>와 함께 <br>
                  <strong>개인 SNS에 후기</strong>남기고 <br>
                  <strong>이벤트 응모</strong>하기
                </span>
                <img src="/img/txt.png" alt="이미지" class="step3Img">
              </div>
            </div>
          </div>
          <div class="a_btn">
            <a href="#evtPopup" class="open">신청하기</a>
          </div>
        </div>
      </div>
    </div>
    <div class="right col-lg-3 p-0"  data-aos="fade-up" data-aos-duration="2000">
      <div class="sns_r section">
        <p class="fw_b">@coway_review</p>
        <div class="container">
          <!-- 사진 최신글  -->
          <?php
          $options = array();
          $options['thumb_w'] = 15;
          $options['thumb_h'] = 15;
          $options['line']    = 1;
          $options['design'] = 1;
          $options['items'] = 5;
          $options['margin'] = 20;
          echo latest('pic_owl.carousel', 'review', 7, 23, '', $options);
          ?>
          <!--  사진 최신글 끝 -->
        </div>
      </div>
      <script>
        $(".sns ul").owlCarousel({
              loop:true,
              margin:20,//이미지 사이의 간격
              autoplay: true,
              dots:false,
              nav:false,
              responsive:{
                0:{
                  items:3 // 모바일
                },

                600:{
                  items:3 // 브라우저 600px 이하
                },

                1000:{
                  items:3 // 브라우저 100px 이하
                }

              }
        });
      </script>
    </div>
  </div>
</div>


<!---------------------------- 이벤트 폼태그 팝업 ------------------------------->
<div id="evtPopup" class="popup">
  <h2 class="fw_b">1회 무료 체험 신청</h2>
  <div class="con">
    <table class="apy_free">
      <caption class="sound_only">
        <details >
          <summary>무료 체험 신청</summary>
          <div>이름, 전화번호, 주소, 연락 희망 시간대, 케어서비스 요청일</div>
        </details>
      </caption>
      <colgroup>
        <col style="width:150px">
        <col style="width:390px">
      </colgroup>
      <tbody>
        <tr>
          <th><label for="userName">이름</label></th>
          <td><input type="text" id="userName" placeholder="이름을 입력해주세요."></td>
        </tr>
        <tr>
          <th><label for="phonNum">전화번호</label></th>
          <td><input type="tel" id="phonNum" placeholder=" - 없이 번호를 입력해주세요."></td>
        </tr>
        <tr>
          <th><label for="address" class="ad">주소</label></th>
          <td>
            <input class="ads" type="text" >
            <button type="button" name="postBtn">우편번호찾기</button><br>
            <input type="text"><br>
            <input type="text" id="address" placeholder="상세 주소 입력">
          </td>
        </tr>
        <tr>
          <th><label for="timeSet">연락 희망 시간대</label></th>
          <td>
            <select class="time" id="timeSet" name="">
              <option value="">선택</option>
              <option value="">09시-10시</option>
              <option value="">10시-11시</option>
              <option value="">11시-12시</option>
              <option value="">12시-13시</option>
              <option value="">13시-14시</option>
              <option value="">14시-15시</option>
              <option value="">15시-16시</option>
              <option value="">16시-17시</option>
            </select>
          </td>
        </tr>
        <tr>
          <th class="callDay"><label for="careSvc">케어서비스 요청일</label></th>
          <td><input type="text" id="careSvc" placeholder="6자리 입력 예)201231"></td>
        </tr>
      </tbody>
    </table>
    <div class="agree">
      <label for="agrCheck"><em>[필수]</em>정보수집 동의</label>
      <input type="checkbox" id="agrCheck" name="" value="">
      <p class="ag_txt">
        <span>
          - 위 개인정보는 서비스 제공을 위한 필수정보로 상담 및 서비스 제공을 위한<br>
            목적으로만 수집/이용되며 3개월간 보관됩니다.
        </span>
        <span>
            - 위 개인정보 수집에 동의하지 않을 경우 서비스 이용은 제한되며 해당 서비스는 <br>
              홈케어닥터 등 위임계약자에게 위탁하여 수행합니다.
        </span>
      </p>
    </div>
  </div>
  <div class="apyBtn">
    <button type="submit" name="button">신청하기</button>
  </div>
  <a href="#onclick" class="close"><i class="xi-close-thin xi-2x "></i></a>
</div>
<div class="dim"></div><!-- 팝업 뒤 전테 배경 -->


<!----------------------------- 고객 지원 --------------------------------------->
<div id="cus_d" class="customer section">
  <div  class=" container">
    <div data-aos="fade-up" data-aos-duration="3000">
      <h2 class="center-heading fw_b">CUSTOMER SUPPORT</h2>
      <p class="cenTxt">코웨이와 함께하는 고객님께 언제나 최상의 서비스를 제공하겠습니다.</p>
    </div>
    <div class="m-5 m-lg-0 d-inlin-block">
      <ul class="support row">
        <li class="col-lg-2 mr-lg-5 m-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
          <a href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=as">
            <img src="/img/icon1.png" alt="AS신청">
            <span><a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=as">A/S 신청</a></span>
          </a>
        </li>
        <li class="col-lg-2 mx-lg-5 m-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
          <a href="//sj926thwjdk.cafe24.com/coway/bbs/qalist.php">
            <img src="/img/icon2.png" alt="1:1 문의">
            <span><a href="http://sj926thwjdk.cafe24.com/coway/bbs/qalist.php">1:1 문의</a></span>
          </a>
        </li>
        <li class="col-lg-2 mx-lg-5 m-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
          <a href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=payment_change">
            <img src="/img/icon3.png" alt="납부 방법 변경">
            <span><a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=payment_change">납부 방법 변경</a></span>
          </a>
        </li>
        <li class="col-lg-2 ml-lg-5 mt-5 ml-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
          <a href="//sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=notice">
            <img src="/img/icon4.png" alt="구매 방법">
            <span><a href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=notice">구매 방법</a></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div><!-- /customer -->


<!----------------------------- app 출시 --------------------------------------->
<div id="appStore" class="parallax-window section mt-5 " data-parallax="scroll">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center p-center para-text">
        <p>코웨이 APP 출시</p>
				<h2 class='text-light fw_b'>원하는 시간으로 예약도 <span class="fw_b">간편</span>하게</h2>
				<button type="button" class="btn btn-outline-light google" onclick='window.open("about:blank").location.href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Apr0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-kr-1003227-med-hasem-py-Evergreen-Apr0121-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700058447516882_creativeid_477192617510_device_c&gclid=EAIaIQobChMI3cr5nue38AIVz1VgCh1h-wDUEAAYASAAEgIOKfD_BwE&gclsrc=aw.ds"'><i class="xi-google-play xi-2x"></i><span>Google Play</span></button>
        <button type="button" class="btn btn-outline-light" onclick='window.open("about:blank").location.href="https://www.apple.com/kr/app-store/"'><i class="xi-apple xi-2x"></i><span>Apple Store</span></button>
			</div>
		</div>
	</div>
</div><!-- /parallax -->


<!------------------------------- 퀙메뉴 --------------------------------------->
<aside id="quick">
  <div class="q_btn">
    <div class="pluxBox">
      <button class="inquiry">
        <a href="//open.kakao.com/o/sHSbYT6c" target="_blank"><span class="xi-kakaotalk xi-2x"></span></a>
      </button>
      <button class="inquiry">
        <a href="tel:010-4727-0363" target="_blank"><span class="xi-call"></span></a>
      </button>
    </div>
    <button type="button" name="button" id="quickPlusBtn"><i class="xi-plus-thin"></i></button>
    <button><a onclick="$('html,body').animate({scrollTop:0},'slow')" class="move"  href="#sliderBanner">Top</a></button>
  </div>
</aside>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
