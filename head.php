<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

if($bo_table) {
	$E_bo = sql_fetch("SELECT * FROM g5_board where bo_table ='$bo_table'");
}

// 오늘 새글
function bo_count($bo){
	$cnt = 0;
	foreach (func_get_args() as $bo) {
		$table = "g5_write_".$bo;
		$sql = "select count(*) cnt from $table where wr_datetime >= CURRENT_DATE() and wr_is_comment=0";
		$row = sql_fetch($sql);
		$cnt += $row['cnt'];
	}
	return $cnt;;
}

// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



<!-------------------------- 네비게이션 -------------------------->

<style>

</style>
<nav class="navbar fixed-top navbar-expand-lg navbar-white fixed-top">
  <div class="container">
  	<a class="navbar-brand logo logo-box" href="<?php echo G5_URL?>">
      <img src="/img/coway_logo_white.svg" class="scroll_up" alt="박소정|NCS|코웨이">
      <img src="/img/coway_logo.svg" class="scroll_down" alt="박소정|NCS|코웨이">
    </a>
  	<button class="navbar-toggler navbar-dark navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
  	  <i class="xi-bars xi-3x menu_d"></i>
      <i class="xi-bars xi-3x menu_m"></i>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
  	  <ul class="navbar-nav ml-auto">
    		<?php
    		$sql = " select *
    					from {$g5['menu_table']}
    					where me_use = '1'
    					  and length(me_code) = '2'
    					order by me_order, me_id ";
    		$result = sql_query($sql, false);
    		$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    		$menu_datas = array();
    		for ($i=0; $row=sql_fetch_array($result); $i++) {
    			$menu_datas[$i] = $row;

    			$sql2 = " select *
    						from {$g5['menu_table']}
    						where me_use = '1'
    						  and length(me_code) = '4'
    						  and substring(me_code, 1, 2) = '{$row['me_code']}'
    						order by me_order, me_id ";
    			$result2 = sql_query($sql2);
    			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
    				$menu_datas[$i]['sub'][$k] = $row2;
    			}
    		}
    		$i = 0;
    		foreach( $menu_datas as $row ){
    			if( empty($row) ) continue;
    		?>
    			<?php if($row['sub']['0']) { ?>
    				<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle en2 f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
    					<?php echo $row['me_name'] ?>
    					</a>
    						<!-- 서브 -->
    						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
    							<?php
    							// 하위 분류
    							$k = 0;
    							foreach( (array) $row['sub'] as $row2 ){

    							if( empty($row2) ) continue;

    							?>
    							<a class="dropdown-item ko1 f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

    							<?php
    							$k++;
    							}   //end foreach $row2

    							if($k > 0)
    							echo '</ul>'.PHP_EOL;
    							?>
      			       <?php }else{?>
      				<li class="nav-item">
      				      <a class="nav-link en2 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
      				</li>
      			   <?php }?>
      		  </li>

      		<?php
      		$i++;
      		}   //end foreach $row

      		if ($i == 0) {  ?>
      			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
      		<?php } ?>
      		<li class="nav-item dropdown login">
      		  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      			LOGIN
      		  </a>
      		  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">

        			<?php if($is_admin) { ?><a class="dropdown-item" href="<?php echo G5_URL?>/adm">관리자</a><?php } ?>
        			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/new.php">새글</a>
        			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/qalist.php">1:1문의</a>
        			<?php if($is_member) { ?>
        			<a class="dropdown-item" href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a>
        			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a>
        			<?php }else{ ?>
        			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/login.php">로그인</a>
        			<a class="dropdown-item" href="<?php echo G5_URL?>/bbs/register.php">회원가입</a>
      			<?php } ?>
      		  </div>
      		</li>
    	  </ul>
      </div>

      <div id="loginDiv">
        <ul>
        <?php if($is_member) { ?>
          <li><a href="<?php echo G5_URL?>/bbs/logout.php"><i class="xi-user xi-2x"></i></a></li>
          <!-- <li><a href="<?//php echo G5_BBS_URL ?>/member_confirm.php?url=<?//php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li> -->
        <?php }else{ ?>
          <!-- <li><a href="<?//php echo G5_URL?>/bbs/register.php"><i class="fa fa-user-plus" aria-hidden="true"></i> 회원가입</a></li> -->
          <li><a href="<?php echo G5_URL?>/bbs/login.php"><i class="xi-user-o xi-2x"></i></a></li>
        <?//php }?>
          <!-- <li><a href="<?//php echo G5_URL?>/bbs/faq.php"><i class="fa fa-question" aria-hidden="true"></i> <span>FAQ</span></a></li>
          <li><a href="<?//php echo G5_URL?>/bbs/qalist.php"><i class="fa fa-comments" aria-hidden="true"></i> <span>1:1문의</span></a></li>
          <li><a href="<?//php echo G5_URL?>/bbs/current_connect.php" class="visit"><i class="fa fa-users" aria-hidden="true"></i> <span>접속자</span><strong class="visit-num">
          1</strong></a></li>
          <li><a href="<?//php echo G5_URL?>/bbs/new.php"><i class="fa fa-history" aria-hidden="true"></i> <span>새글</span></a></li>
          <?//php if($is_admin) { ?>
          <li><a href="<//?php echo G5_URL?>/adm">관리자</a></li> -->
          <?php } ?>
          </ul>
        </div>
  </div>
</nav>




<!-------------------------- 각 상단배너들 -------------------------->
<?php include_once(G5_THEME_PATH.'/top_banner.php');?>
<!-------------------------- ./각 상단배너들 -------------------------->


<!-------------------------- 좌측메뉴 -------------------------->
<?php include_once(G5_THEME_PATH.'/left_menu.php');?>
<!-------------------------- ./좌측메뉴 -------------------------->
