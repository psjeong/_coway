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

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa


팁영상 요청 주소 : softzonecokr@naver.com
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 배상책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임을 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/
?>




<!-------------------------- 슬라이드 -------------------------->
<header style="height:0; overflow:hidden">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('https://via.placeholder.com/1920x620')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ko1">에티테마 커뮤니티</h3>
		  <p class="ko1 f20">에티테마에 오시면 커뮤니티형, 비즈니스형 두가지 모두 다운로드 하실 수 있습니다.</p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x620')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ko1">반응형 비즈니스 테마</h3>
		  <p class="ko1 f20">CMS 인 그누보드 5.4 와 연동되어 사용가능한 테마 입니다.</p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://via.placeholder.com/1920x620')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ko1">테마몰오픈</h3>
		  <p class="ko1 f20">테마몰을 오픈하였습니다.</p>
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->


<?php echo latest('theme/pic_basic_owl','event',3,100); ?>
<script type="text/javascript">
	$(document).ready(function(){
		/* 슬라이더 - 3칼럼노출 */
		var slider_column = $('#sliderBanner').owlCarousel({
			items:1,
      loop:true,
      mouseDrag:false,
      nav:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      center: false,
      margin: 10,
		});

	});
</script>

<!-------------------------- 아이콘박스 -------------------------->
<!-- <div class="callbox" style="margin-top:0px;">
	<div class="container">
	<h3 class="text-left ko1">에티비즈니스 무료테마</h3>
	  <div class="row">
		<div class="col-md-8">
		  <p class="ko_17">
		  우측 다운로드 버튼을 클릭하시면 해당 다운로드페이지로 이동 됩니다.
		  </p>
		</div>
		<div class="col-md-4">
		  <a class="btn btn-lg btn-secondary btn-block ko" href="http://ety.kr/board/theme_update" target="_blank">다운로드</a>
		</div>
	  </div>
	</div>
</div> -->
<!-------------------------------- NEW 제품 -------------------------------->
<div class="container">
	<div class="newBox animated fadeInUp">
    <!-- 데스크탑 ver -->
    <div id="new_d">
      <div class="pdLeft">
        <div class="pdTxt">
      		<h2>NEW</h2>
      		<span>
            세 가지 기능성 스마트 커버 중<br>
            나에게 필요한 커버로 딱 맞춰 선택하세요.
          </span>
      		<p class="sub-text margin-bottom-80 ko f19 new_d">
      		밀림 걱정 없이, 지퍼로 간편하게 씌우고 벗길 수 있는 스마트 커버는<br>
          각 기능별 맞춤의 <strong>더블케어 커버</strong> , <strong>워셔블케어 커버</strong> , <strong>쿨링케어 커버 중 선택</strong><br>
          가능하며, 지금 사용하고 있는 커버를 다른 커버로도 교체할 수 있습니다.
      		</p>

          <a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=gallery&sca=%EB%A7%A4%ED%8A%B8%EB%A6%AC%EC%8A%A4">제품 보러 가기  <i class="xi-long-arrow-right"></i></a>
        </div><!-- .pdTxt End -->

        <div class="addPd">
          <div class="pdItem">
            <div class="smallImg">
              <a href="#"><img src="/img/care1.jpg"  alt="더블케어"></a>
            </div>
            <div class="smallBG bg1">
              <p>더블케어</p>
            </div>
          </div><!-- .pdItem End -->
          <div class="pdItem">
            <div class="smallImg ">
              <a href="#"><img src="/img/care2.jpg"  alt="워셔블케어"></a>
            </div>
            <div class="smallBG bg2">
              <p>워셔블케어</p>
            </div>
          </div><!-- .pdItem End -->
          <div class="pdItem">
            <div class="smallImg">
              <a href="#"><img src="/img/care3.jpg"  alt="쿨링케어"></a>
            </div>
            <div class="smallBG bg3">
              <p>쿨링케어</p>
            </div>
          </div><!-- .pdItem End -->
        </div>
      </div><!-- .pdLeft End -->
      <div class="bigImg pdRight">
          <a href="#"><img src="/img/pd.png" alt="기본 상품 이미지"></a>
      </div><!-- .bigImg End -->
    </div>
    <!-- 모바일 ver -->
    <div id="new_m">
        <div class="pdTxt">
      		<h2>NEW</h2>
      		<span>
            세 가지 기능성 스마트 커버 중<br>
            나에게 필요한 커버로 딱 맞춰 선택하세요.
          </span>
      		<p>#더블케어커버 #워셔블케어커버 #쿨링케어커버</p>
        </div><!-- .pdTxt End -->
        <div class="bigImg pdRight">
            <a href="#"><img src="/img/pd.png" alt="기본 상품 이미지"></a>
        </div><!-- .bigImg End -->
        <div class="addPd">
            <div class="smallImg">
              <a href="#"><img src="/img/care1.jpg"  alt="더블케어"></a>
              <span>더블케어</span>
            </div>
            <div class="smallImg ">
              <a href="#"><img src="/img/care2.jpg"  alt="워셔블케어"></a>
              <span>워셔블케어</span>
            </div>
            <div class="smallImg">
              <a href="#"><img src="/img/care3.jpg"  alt="쿨링케어"></a>
              <span>쿨링케어</span>
            </div>
        </div>
        <a class="pdGo" href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=gallery&sca=%EB%A7%A4%ED%8A%B8%EB%A6%AC%EC%8A%A4">제품 보러 가기</a>
      </div><!-- 모바일  -->

	</div>
</div>
  <!-------------------------- 유튜브영상 -------------------------->
 <!-- 데스크탑 -->
  <div id="vd_d" class="backBg" style="background:#c3c3c3; margin-top:162px;">
  	<div class="container">
  	  <div class="row">
    		<div class="vdo">
          <iframe width="660" height="484" src="https://www.youtube.com/embed/7GCGD0yYAYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    		<div class="care">
    		  <h2>SERVICE</h2>
          <p class="heading">코웨이 슬립케어 매트리스 케어서비스</p>
          <P class="txt">
              코웨이 매트리스 케어서비스는 위생 관리 전문가 '홈케어닥터'가 <br>
              오염도 측정부터 UV살균까지 전문 장비를 활용해 매트리스를 깐깐하게 <br>
              관리해 드리는 서비스입니다.
          </p>
          <a href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=service">자세히보기  <i class="xi-long-arrow-right"></i></a>
    		</div>
  	  </div>
  	</div>
  </div>
  <!-- 모바일 -->
  <div id="vd_m" class="backBg " style="background:#c3c3c3; margin-top:320px;">
  	<div class="container">
    		<div class="care">
    		  <h2>SERVICE</h2>
          <p class="heading">코웨이 슬립케어 매트리스 케어서비스</p>
          <P class="txt">
              # 홈케어닥터 # 오염도 측정 # UV살균
          </p>
          <div class="vdo">
            <iframe width="660" height="484" src="https://www.youtube.com/embed/7GCGD0yYAYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      		</div>
          <a class="more" href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=service">자세히보기</a>
    		</div>
  	</div>
  </div>
  <div id="vd_m320" class="backBg " style="background:#c3c3c3; margin-top:320px;">
  	<div class="container">
    		<div class="care animated fadeInUp">
    		  <h2>SERVICE</h2>
          <p class="heading">코웨이 슬립케어 매트리스 케어서비스</p>
          <P class="txt">
              # 홈케어닥터 # 오염도 측정 # UV살균
          </p>
          <div class="vdo">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/7GCGD0yYAYc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      		</div>
          <a class="more" href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=service">자세히보기</a>
    		</div>
  	</div>
  </div>

<div class="container">
  <div id="cus_d" class="customer">
    <h2 class="center-heading animated fadeInUp">CUSTOMER SUPPORT</h2>
    <p class="center-heading animated fadeInUp">코웨이와 함께하는 고객님께 언제나 최상의 서비스를 제공하겠습니다.</p>
    <ul class="support animated fadeInUp">
      <li>
        <a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=as">
          <img src="/img/icon1.jpg" alt="AS신청">
          <span>A/S 신청</span>
        </a>
      </li>
      <li>
        <a href="http://sj926thwjdk.cafe24.com/coway/bbs/qalist.php">
          <img src="/img/icon2.jpg" alt="1:1 문의">
          <span>1:1 문의</span>
        </a>
      </li>
      <li>
        <a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=payment_change">
          <img src="/img/icon3.jpg" alt="납부 방법 변경">
          <span>납부 방법 변경</span>
        </a>
      </li>
      <li>
        <a href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=notice">
          <img src="/img/icon4.jpg" alt="구매 방법">
          <span>구매 방법</span>
        </a>
      </li>
    </ul>
  </div><!-- /customer -->
  <div id="cus_m" class="customer">
      <h2 class="center-heading animated fadeInUp">CUSTOMER SUPPORT</h2>
      <p class="center-heading animated fadeInUp">코웨이와 함께하는 고객님께 <br> 언제나  최상의 서비스를 제공하겠습니다.</p>
      <div class="support animated fadeInUp">
        <ul calss="row1">
          <li>
            <a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=as">
              <img src="/img/icon1.jpg" alt="AS신청">
              <span>A/S 신청</span>
            </a>
          </li>
          <li>
            <a href="http://sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=payment_change">
              <img src="/img/icon3.jpg" alt="납부 방법 변경">
              <span>납부 방법 변경</span>
            </a>
          </li>

        </ul>
        <ul calss="row2">
          <li>
            <a href="http://sj926thwjdk.cafe24.com/coway/bbs/qalist.php">
              <img src="/img/icon2.jpg" alt="1:1 문의">
              <span>1:1 문의</span>
            </a>
          </li>
          <li>
            <a href="http://sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=notice">
              <img src="/img/icon4.jpg" alt="구매 방법">
              <span>구매 방법</span>
            </a>
          </li>
        </ul>
      </div>
    </div><!-- /customer -->
</div>

	<!-- 최근게시물 -->
	<!-- LATEST : basic_company -->
	<?php echo latest('theme/basic_company', 'free', 3, 13); ?>
  <aside id="quick">
    <ul class="q_memu">
      <li><a href="#"><span>카카오톡</span></a></li>
      <li><a href="#"><span>1:1 문의</span></a></li>
      <li><a href="#"><span>전화문의</span></a></li>
    </ul>
    <div class="q_btn">
      <div class="inquiry">
        <i calss="xi-plus-thin"></i>
      </div>
      <button><a href="#carouselExampleIndicators">Top</a></button>
    </div>

  </aside>
<!-- /container -->

<!-------------------------- 띠배너 영역 ------------------------------->
<div class="thinBn">
  <div class=" container">
    <a href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Apr0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-kr-1003227-med-hasem-py-Evergreen-Apr0121-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700058439439243_creativeid_477138308529_device_c&gclid=EAIaIQobChMIxLzTvcam8AIVExdgCh3FBADuEAAYASAAEgJoL_D_BwE&gclsrc=aw.ds" target="_blank">
      <img class="app_d" src="/img/app_bn_mobile-ver.jpg" alt="원하는 시간으로 예약도 간편하게">
      <!-- <img class="app_m" src="/img/app_bn_mobile.jpg" alt="원하는 시간으로 예약도 간편하게">
      <img class="app_m320" src="/img/app_bn_mobile320.jpg" alt="원하는 시간으로 예약도 간편하게"> -->
    </a>
  </div>
</div>


<!----------------------------- 이벤트 폼태그 영역 ----------------------->
<!-- 데스크탑 -->
<div id="apply" class="ap_d event_info container animated fadeInUp">
  <h2>EVENT</h2>
  <p>무상 1회 체험 후기 남기시고 매트리스 받아가세요</p>
  <div class="user_info">
    <img src="/img/event.jpg" alt="">
    <form class="info_txt" action="" method="post">
      <div class="userName useSet">
        <label for="name">이름</label>
        <input type="text" name="name" id="name" value="홍길동">
      </div>
      <div class="whishTime useSet">
        <label for="time_set">연락 희망 시간대</label>
        <select class="" id="time_set" name="">
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
      </div>
      <div class="phonNum useSet">
        <label for="num1">전화 번호</label>
        <select class="" id="num1" name="">
          <option value="">선택</option>
          <option value="">010</option>
          <option value="">011</option>
          <option value="">016</option>
          <option value="">018</option>
        </select>
        - <input type="text" name="num1" value=""> -
        <input type="text" name="num2" value="">
      </div>
      <div class="address useSet">
        <label for="num1">주소</label>
          <input  class="ad_txt" type="" name="" value="">
          <button id="" class="ads_info" type="button" style="cursor: pointer;">우편번호 찾기</button><br>
          <input class="ad_txt1" type="" name="" value=""><br>
          <input class="ad_txt1" type="" name="" value="">
      </div>
      <div class="careService useSet">
        <label for="num1">케어서비스 요청일</label>
          <input type="text" class="ubuntu_0 hasDatepicker" id="txtVisitDate" name="dDate" readonly="" onfocus="this.blur()">
      </div>
      <div class="agree">
        <p class="ag">정보수집 동의</p>
        <p class="ag_txt">
          - 위 개인정보는 서비스 제공을 위한 필수정보로 상담 및 서비스 제공을 위한<br>
             목적으로만 수집/이용되며 3개월간 보관됩니다.
             <br>
           - 위 개인정보 수집에 동의하지 않을 경우 서비스 이용은 제한되며 해당 서비스는 <br>
              홈케어닥터 등 위임계약자에게 위탁하여 수행합니다.
        </p>
        <div class="cBtn">
          <input type="checkbox" name="" value=""><span> 동의합니다.</span>
        </div>
      </div>

    </form>
  </div>
  <button class="applyBtn" type="submit" name="button">신청하기</button>
</div>
<!-- 모바일 -->
<div id="apply" class="ap_m event_info">
  <h2>EVENT</h2>
  <p>무상 1회 체험 후기 남기시고 <br>매트리스 받아가세요</p>
  <div class="user_info">
    <div class="how">
      <div class="container">
        <h3>참여방법</h3>
        <div class="step step1">
          <p>STEP 01</p>
          <span>
            코웨이 슬립케어 매트리스 <br>
            <strong>무상케어서비스 신청</strong>하기
          </span>
          <img src="/img/apply_btn.png" alt="신청하기이미지">
        </div>
        <div class="step step2">
          <p>STEP 02</p>
          <span>
            케어서비스 체험하며 <br>
            <strong>후기 인증샷</strong>찍기
          </span>
          <img src="/img/img.png" alt="이미지">
        </div>
        <div class="step step3">
          <p>STEP 03</p>
          <span>
            <strong>필수 해시태그</strong>와 함께 <br>
            <strong>개인 SNS에 후기</strong>남기고 <br>
            <strong>이벤트 응모</strong>하기
          </span>
          <img src="/img/txt.png" alt="이미지">
        </div>
      </div>
    </div>
      <form class="info_txt" action="" method="post">
        <div class="userName useSet">
          <label for="name">이름</label>
          <input type="text" name="name" id="name" value="홍길동">
        </div>
        <div class="whishTime useSet">
          <label for="time_set">연락 희망 시간대</label>
          <select class="" id="time_set" name="">
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
        </div>
        <div class="phonNum useSet">
          <label for="num1">전화 번호</label>
          <select class="" id="num1" name="">
            <option value="">선택</option>
            <option value="">010</option>
            <option value="">011</option>
            <option value="">016</option>
            <option value="">018</option>
          </select>
          - <input type="text" name="num1" value=""> -
          <input type="text" name="num2" value="">
        </div>
        <div class="address useSet">
          <label for="num1">주소</label>
            <input  class="ad_txt" type="" name="" value="">
            <button id="" class="ads_info" type="button" style="cursor: pointer;">우편번호 찾기</button><br>
            <input class="ad_txt1" type="" name="" value=""><br>
            <input class="ad_txt1" type="" name="" value="">
        </div>
        <div class="careService useSet">
          <label for="num1">케어서비스 요청일</label>
            <input type="text" class="ubuntu_0 hasDatepicker" id="txtVisitDate" name="dDate" readonly="" onfocus="this.blur()">
        </div>
        <div class="agree">
          <p class="ag">정보수집 동의</p>
          <p class="ag_txt">
            - 위 개인정보는 서비스 제공을 위한 필수정보로 상담 및 서비스 제공을 위한<br>
               목적으로만 수집/이용되며 3개월간 보관됩니다.
               <br>
             - 위 개인정보 수집에 동의하지 않을 경우 서비스 이용은 제한되며 해당 서비스는 <br>
                홈케어닥터 등 위임계약자에게 위탁하여 수행합니다.
          </p>
          <div class="cBtn">
            <input type="checkbox" name="" value=""><span> 동의합니다.</span>
          </div>
        </div>

      </form>
  </div>
  <button class="applyBtn" type="submit" name="button">신청하기</button>
</div>

<div id="apply" class="ap_m320 event_info">
  <h2>EVENT</h2>
  <p>무상 1회 체험 후기 남기시고 <br>매트리스 받아가세요</p>
  <div class="user_info">
    <div class="how">
      <div class="container">
        <h3>참여방법</h3>
        <div class="step step1">
          <p>STEP 01</p>
          <span>
            코웨이 슬립케어 매트리스 <br>
            <strong>무상케어서비스 신청</strong>하기
          </span>
          <div class="ap_img">
            <img src="/img/apply_btn.png" alt="신청하기이미지">
          </div>
        </div>
        <div class="step step2">
          <p>STEP 02</p>
          <span>
            케어서비스 체험하며 <br>
            <strong>후기 인증샷</strong>찍기
          </span>
          <div class="ap_img">
            <img src="/img/img.png" alt="이미지">
          </div>
        </div>
        <div class="step step3">
          <p>STEP 03</p>
          <span>
            <strong>필수 해시태그</strong>와 함께 <br>
            <strong>개인 SNS에 후기</strong>남기고 <br>
            <strong>이벤트 응모</strong>하기
          </span>
          <div class="ap_img">
            <img src="/img/txt.png" alt="이미지">
          </div>
        </div>
      </div>
    </div>
      <form class="info_txt" action="" method="post">
        <div class="userName useSet">
          <label for="name">이름</label>
          <input type="text" name="name" id="name" value="홍길동">
        </div>
        <div class="whishTime useSet">
          <label for="time_set">연락 희망 시간대</label>
          <select class="" id="time_set" name="">
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
        </div>
        <div class="phonNum useSet">
          <label for="num1">전화 번호</label>
          <select class="" id="num1" name="">
            <option value="">선택</option>
            <option value="">010</option>
            <option value="">011</option>
            <option value="">016</option>
            <option value="">018</option>
          </select>
          - <input type="text" name="num1" value=""> -
          <input type="text" name="num2" value="">
        </div>
        <div class="address useSet">
          <label for="num1">주소</label>
            <input  class="ad_txt" type="" name="" value="">
            <button id="" class="ads_info" type="button" style="cursor: pointer;">우편번호 찾기</button><br>
            <input class="ad_txt1" type="" name="" value=""><br>
            <input class="ad_txt1" type="" name="" value="">
        </div>
        <div class="careService useSet">
          <label for="num1">케어서비스 요청일</label>
            <input type="text" class="ubuntu_0 hasDatepicker" id="txtVisitDate" name="dDate" readonly="" onfocus="this.blur()">
        </div>
        <div class="agree">
          <p class="ag">정보수집 동의</p>
          <p class="ag_txt">
            - 위 개인정보는 서비스 제공을 위한 필수정보로 상담 및 서비스 제공을 위한<br>
               목적으로만 수집/이용되며 3개월간 보관됩니다.
               <br>
             - 위 개인정보 수집에 동의하지 않을 경우 서비스 이용은 제한되며 해당 서비스는 <br>
                홈케어닥터 등 위임계약자에게 위탁하여 수행합니다.
          </p>
          <div class="cBtn">
            <input type="checkbox" name="" value=""><span> 동의합니다.</span>
          </div>
        </div>

      </form>
  </div>
  <button class="applyBtn" type="submit" name="button">신청하기</button>
</div>

<div id="sns_review" class="animated fadeInUp container margin-top-50 margin-bottom-50">
	<h3 class="margin-bottom-50">SNS</h3>

      <!-- 사진 최신글 { -->
      <?php
      // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
      // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
      // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
      $options = array();
      $options['thumb_w'] = 50;    //썸네일( width : 210 )
      $options['thumb_h'] = 50;    //썸네일( height : 150 )
      $options['line']    = 1;    //제목+내용 라인수(기본:1)
      $options['design'] = 1;        //네비디자인(기본 : 1 )
      $options['items'] = 7;
      $options['margin'] = 10;
      echo latest('theme/pic_basic', 'review',7, 23, '', $options);        // 최소설치시 자동생성되는 갤러리게시판
      ?>
      <!-- } 사진 최신글 끝 -->
</div>

<script>
$("#sns_review  .pic_lt ul").owlCarousel({
      loop:true,
      margin:20,//이미지 사이의 간격
      autoplay: true,
      dots:false,
      nav:false,
      responsive:{
        0:{
          items:4 // 모바일
        },

        600:{
          items:6 // 브라우저 600px 이하
        },

        1000:{
          items:6 // 브라우저 100px 이하
        }

      }

    });
</script>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
