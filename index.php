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
<?php echo latest('theme/pic_basic_owl','event',3,100); ?>


  <!-------------------------------- NEW 제품 -------------------------------->

  <div class="newBox section">
  	<div class="container">
        <div class="products row p-0 m-0" >
          <h2 class="font_s fw_b" data-aos="fade-up" data-aos-duration="1000">PRODUCTS</h2>
          <div class="m-5 m-lg-0 d-inlin-block">
            <ul class="row">
              <li class="mattress col-lg-3 text-center mr-lg-5" data-aos="fade-up" data-aos-duration="2000">
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
    	  <div class="row">
          <div id="youtube" class="col-lg-6 mt-lg-0 pl-lg-2">
            <div>
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7tzxVWWOsN8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        		</div>
          </div>

      		<div class="care mt-5 mt-lg-0  ml-lg-5 pl-lg-4" data-aos="fade-up" data-aos-duration="1000">
      		  <h2 class="fw_b">SERVICE</h2>
            <p class="heading fw_b">코웨이 슬립케어 매트리스 케어서비스</p>
            <P class="txt">
                코웨이 매트리스 케어서비스는 위생 관리 전문가 '홈케어닥터'가 <br>
                오염도 측정부터 UV살균까지 전문 장비를 활용해 매트리스를 깐깐하게 <br>
                관리해 드리는 서비스입니다.
            </p>
            <a href="//sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=service">자세히보기  <i class="xi-long-arrow-right"></i></a>
      		</div>
    	  </div>
    	</div>

  </div>






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
        <button><a href="#sliderBanner">Top</a></button>
      </div>

    </aside>







  <!----------------------------- 이벤트 폼태그 영역 ----------------------->
  <!-- 데스크탑 -->
    <div class="evt_form">
      <!-- <div class="evt_tit text-center">
        <h2 class="fw_b pb-5">EVENT</h2>
        <p>무상 1회 체험 후기 남기시고 매트리스 받아가세요</p>
      </div> -->
      <div id="applay" class="ap_d event_info row m-0" >
        <div class="left col-lg-7 pt-5 p-0"  data-aos="fade-up" data-aos-duration="2000">
          <div class="bg"></div>
          <div class="account">
            <div class="way">
              <div class="how p-5">
                <h3 class="fw_b pb-5">EVENT 참여방법</h3>
                <div class="ap_how pt-3">
                  <div class="step step1 col-4">
                    <p>STEP 01</p>
                    <span>
                      코웨이 슬립케어 매트리스 <br>
                      <strong>무상케어서비스 신청</strong>하기
                    </span>
                    <img src="/img/applay_btn.png" alt="신청하기이미지">
                  </div>
                  <div class="step step2 col-4">
                    <p>STEP 02</p>
                    <span>
                      케어서비스 체험하며 <br>
                      <strong>후기 인증샷</strong>찍기
                    </span>
                    <img src="/img/img.png" alt="이미지">
                  </div>
                  <div class="step step3 col-4">
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
              <div class="a_btn">
                <a href="#">신청하기</a>
              </div>
            </div>
          </div>
        </div>
        <div class="right col-lg-3 p-0"  data-aos="fade-up" data-aos-duration="2000">
          <div class="sns_r section">
            <p class="fw_b">@coway_review</p>
            <div class="container">


                <!-- 사진 최신글 { -->
                <?php
                // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                $options = array();
                $options['thumb_w'] = 30;    //썸네일( width : 210 )
                $options['thumb_h'] = 30;    //썸네일( height : 150 )
                $options['line']    = 1;    //제목+내용 라인수(기본:1)
                $options['design'] = 1;        //네비디자인(기본 : 1 )
                $options['items'] = 5;
                $options['margin'] = 20;
                echo latest('pic_owl.carousel', 'review', 7, 23, '', $options);        // 최소설치시 자동생성되는 갤러리게시판
                ?>
                <!-- } 사진 최신글 끝 -->
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
                      items:2 // 모바일
                    },

                    600:{
                      items:2 // 브라우저 600px 이하
                    },

                    1000:{
                      items:2 // 브라우저 100px 이하
                    }

                  }

            });
          </script>
        </div>
      </div>
    </div>



    <!-- 체험 신청 -->
    <!-- <div class="user_info" data-aos="fade-up" data-aos-duration="3000">
      <form class="info_txt" action="" method="post">
        <div class="userName useSet">
          <label for="name">이름</label>
          <input type="text" name="name" id="name" value="홍길동">
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
          <button class="applyBtn fw_b" type="submit" name="button">신청하기</button>
        </div>

      </form>
    </div> -->

    <!-- 고객 지원 -->
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
                <span>A/S 신청</span>
              </a>
            </li>
            <li class="col-lg-2 mx-lg-5 m-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
              <a href="//sj926thwjdk.cafe24.com/coway/bbs/qalist.php">
                <img src="/img/icon2.png" alt="1:1 문의">
                <span>1:1 문의</span>
              </a>
            </li>
            <li class="col-lg-2 mx-lg-5 m-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
              <a href="//sj926thwjdk.cafe24.com/coway/bbs/board.php?bo_table=payment_change">
                <img src="/img/icon3.png" alt="납부 방법 변경">
                <span>납부 방법 변경</span>
              </a>
            </li>
            <li class="col-lg-2 ml-lg-5 mt-5 ml-5 rounded-circle" data-aos="fade-up" data-aos-duration="1000">
              <a href="//sj926thwjdk.cafe24.com/coway/bbs/content.php?co_id=notice">
                <img src="/img/icon4.png" alt="구매 방법">
                <span>구매 방법</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- /customer -->



  <!-- 모바일 -->
  <div id="apply" class="ap_m event_info mobile_ver section">
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


  <!-------------------------- app 출시 -------------------------->

  <div id="appStore" class="parallax-window section mt-5 " data-parallax="scroll">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12 text-center p-center para-text">
          <p>코웨이 APP 출시</p>
  				<h2 class='text-light fw_b'>원하는 시간으로 예약도 <span class="fw_b">간편</span>하게</h2>

  				<button type="button" class="btn btn-outline-light google" onclick='window.open("about:blank").location.href="https://play.google.com/store?utm_source=apac_med&utm_medium=hasem&utm_content=Apr0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-kr-1003227-med-hasem-py-Evergreen-Apr0121-Text_Search_BKWS-BKWS%7cONSEM_kwid_43700058447516882_creativeid_477192617510_device_c&gclid=EAIaIQobChMI3cr5nue38AIVz1VgCh1h-wDUEAAYASAAEgIOKfD_BwE&gclsrc=aw.ds"'><i class="xi-google-play xi-2x"></i><span>Google Play</span></button>
          <button type="button" class="btn btn-outline-light" onclick='window.open("about:blank").location.href="https://apps.apple.com/kr/app/apple-store/id375380948"'><i class="xi-apple xi-2x"></i><span>Apple Store</span></button>
  			</div>
  		</div>
  	</div>
  </div><!-- /parallax -->


  <!-- <div class="sns_r section">
    <h3 class="fw_b">SNS</h3>
    <p class="fw_b">@coway_review</p>
    <div class="container">


        <!-- 사진 최신글 { -->
        <?//php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        //$options = array();
        //$options['thumb_w'] = 30;    //썸네일( width : 210 )
        //$options['thumb_h'] = 30;    //썸네일( height : 150 )
        //$options['line']    = 1;    //제목+내용 라인수(기본:1)
        //$options['design'] = 1;        //네비디자인(기본 : 1 )
        //$options['items'] = 5;
        //$options['margin'] = 20;
        //echo latest('pic_owl.carousel', 'review', 7, 23, '', $options);        // 최소설치시 자동생성되는 갤러리게시판
        //?>
        <!-- } 사진 최신글 끝 -->
    <!-- </div>
  </div> -->
  <script>
    // $(".sns ul").owlCarousel({
    //       loop:true,
    //       margin:20,//이미지 사이의 간격
    //       autoplay: true,
    //       dots:false,
    //       nav:false,
    //       responsive:{
    //         0:{
    //           items:3 // 모바일
    //         },
    //
    //         600:{
    //           items:5 // 브라우저 600px 이하
    //         },
    //
    //         1000:{
    //           items:5 // 브라우저 100px 이하
    //         }
    //
    //       }
    //
    // });
  </script>






<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
