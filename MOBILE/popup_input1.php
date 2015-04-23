<?
	include_once "./header.php";

	$gift	= $_REQUEST['gift'];

	if ($gift == "cream")
		$gift_txt = "1";
	else if ($gift == "miniature")
		$gift_txt = "2";
	else
		$gift_txt = "3";

	// 주소 바로 입력시 index로 이동
	if ( !isset($_SERVER['HTTP_REFERER']) && $_SERVER['REMOTE_ADDR'] != "127.0.0.1" ) { 
		echo "<script>location.href='index.php'</script>"; 
		exit; 
	} 

?>
<body class="bg_blue">
  <form name="input_frm1" method="post">
  <div class="wrap_page popup p_input">
    <input type="hidden" name="mb_gift" id="mb_gift" value="<?=$gift?>">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_input_winner_<?=$gift_txt?>.png" alt="" id="input1_image"/>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_name.png" alt=""/></li>
            <li class="input_txt name"><input type="text" name="mb_name" id="mb_name"></li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_phone.png" alt=""/></li>
            <li class="input_txt phone">
              <div class="inner clearfix">
                <div>
                  <select name="mb_phone1" id="mb_phone1">
                    <option value="010">010</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="018">018</option>
                    <option value="019">019</option>
                  </select>
				</div>
                <div><input type="tel" name="mb_phone2" id="mb_phone2" onkeyup="chk_len(this.value)"></div>
                <div><input type="tel" name="mb_phone3" id="mb_phone3" onkeyup="chk_len2(this.value)"></div>
              </div>
            </li>
          </ul>
        </div>
        <div class="bar"></div>
        <div class="input_block input_check">
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></li>
            <li class="in_check_label l_1"><a href="#"><img src="img/popup/btn_detail_01.png" alt=""/></a></li>
            <li class="in_check_btn"><a href="use_agree.php" class="btn_detail"><img src="img/popup/btn_detail.png" width="20" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
            <li class="in_check_label l_2"><a href="#"><img src="img/popup/btn_detail_02.png" width="56" alt=""/></a></li>
            <li class="in_check_btn"><a href="privacy_agree.php" class="btn_detail"><img src="img/popup/btn_detail.png" alt=""/></a></li>
          </ul>
          <ul class="clearfix">
            <li class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></li>
            <li class="in_check_label l_3"><a href="#"><img src="img/popup/btn_detail_03.png" width="56" alt=""/></a></li>
            <li class="in_check_btn"><a href="adver_agree.php" class="btn_detail"><img src="img/popup/btn_detail.png" alt=""/></a></li>
          </ul>
        </div>
        <div class="txt_notice img_100"><img src="img/popup/txt_notice_double.png" alt=""/></div>
        <div class="btn_block comp">
          <a href="#" onclick="chk_input_mobile()"><img src="img/popup/btn_ok.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  </form>
  <!------------------- 개인정보 입력 alert ------------------->
  <div id="info_alert"class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_info.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!------------------- 개인정보 입력 alert ------------------->

  <!------------------- 개인정보활용 동의 alert ------------------->
  <div id="use_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_agree.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!------------------- 개인정보활용 동의 alert ------------------->
  <!------------------- 개인정보취급위탁 동의 alert ------------------->
  <div id="privacy_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_agree_info.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->    
  <!------------------- 개인정보취급위탁 동의 alert ------------------->
  <!------------------- 광고성 정보전송 동의 alert ------------------->
  <div id="adver_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_agree_ad.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!------------------- 광고성 정보전송 동의 alert ------------------->
  <!------------------- 동일한 상품 당첨 alert ------------------->


  <div id="duplicate_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_twice.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="index.php"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!------------------- 동일한 상품 당첨 alert ------------------->

</body>
</html>
<script type="text/javascript">
$(document).ready(function() {
	// 체크박스 스타일 설정
	$('.wrap_page input').on('ifChecked ifUnchecked', function(event){
		//alert(this.id);
	}).iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '0%'
	});

	// 팝업 jQuery 스타일
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: true,
		fixedBgPos: true,
		overflowY: 'hidden',
		closeBtnInside: true,
		//preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in',
		showCloseBtn : false,
		closeOnBgClick: false
	});

	$('.first-popup-link').magnificPopup({
		closeBtnInside:true
	});

	var magnificPopup = $.magnificPopup.instance;

});

</script>