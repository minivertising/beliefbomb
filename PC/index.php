<?
	include_once   "./header.php";
?>

  <div  class="wrap_menu" style="position:fixed;z-index:9999">
    <div id="menu" class="menu clearfix">
      <div class="block_logo">
        <a href="http://www.belifcosmetic.com/main.jsp" target="_blank"><img src="images/logo.png" width="75" height="35" alt=""/></a>
      </div>
      <div class="block_menu clearfix">
        <a href="#" onclick="screen_move('site_event')"><img src="images/btn_menu_1.png" alt=""/></a>
        <span><img src="images/ber_menu.png" alt=""/></span>
        <a href="#" onclick="screen_move('calender')"><img src="images/btn_menu_2.png" alt=""/></a>
        <span><img src="images/ber_menu.png" alt=""/></span>
        <a href="#" onclick="screen_move('off_event')"><img src="images/btn_menu_3.png" alt=""/></a>
        <span><img src="images/ber_menu.png" alt=""/></span>
        <a href="#" onclick="screen_move('product')" class="btn_view_pro"><img src="images/btn_view_product.png" alt=""/></a>
        <a href="#" class="btn_fb" onclick="sns_share('facebook')"><img src="images/btn_fb.png" alt=""/></a>
        <a href="#" class="btn_kt" onclick="sns_share('story')"><img src="images/btn_kt.png" alt=""/></a>
      </div>
    </div> 
  </div> 
  <input type="hidden" name="mb_chkphone" id="mb_chkphone" value="">
  <div class="contents_wrap" id="contents_wrap">
    <!------------- 첫번째 영역 -------------------->
    <div class="area1" style="width:100%;">
      <div class="bg_inner">
        <div class="title">
          <img src="images/title.png" alt=""/>
        </div>
        <div class="btn_go">
          <a href="#" onclick="game_ready()" style="outline:none"><img src="images/btn_event_go.png" alt=""/></a>
        </div>
        <div class="btn_mobile">
          <a href="#" onclick="show_qrcode();return false;"><img src="images/btn_view_mobile.png" alt=""/></a>
        </div>        
        <div class="img_detail">
          <img src="images/img_detail.png" alt=""/>
        </div>
        <div class="candy_mbom">
          <img src="images/bg_mbom_candy.png" alt=""/>
        </div>
        <div class="candy_abom">
          <img src="images/bg_abom_candy.png" alt=""/>
        </div>
        <div class="cap_mbom">
          <img src="images/cap_mbom.png" alt=""/>
        </div>
        <div class="cap_abom">
          <img src="images/cap_abom.png" alt=""/>
        </div>
        <div class="bg_mbom">
          <img src="images/main_mbom.png" alt=""/>
        </div>
        <div class="bg_abom">
          <img src="images/main_abom.png" alt=""/>
        </div>
      </div>
    </div>

    <!------------- 세번째 영역 -------------------->
    <div class="area3 block_offevent_1">
      <div class="title">
        <img src="images/title_offevent_1.png" alt=""/>
      </div>
      <div class="btn_cal">
      	<a href="#"><img src="images/btn_cal.png" alt=""/></a>
      </div>
      <div class="ab_inner">
      	<div class="off1_img1"><img src="images/img_offevent1_2.png" alt=""/></div>
        <div class="off1_img2"><img src="images/img_offevent1_1.png" alt=""/></div>
      </div>
    </div>

    <!------------- 네번째 영역 -------------------->
    <div class="area4 block_offevent_2" id="area4">
      <div class="title">
        <img src="images/title_offevent_2.png" alt=""/>
      </div>

      <div class="btn_cal">
      	<a href="#"><img src="images/btn_cal.png" alt=""/></a>
      </div>      
      <div class="block_img_detail clearfix">
        <div class="d_1" style="opacity:0">
          <img src="images/img_event2_detail_1.png" alt=""/>
        </div>
        <div class="d_2" style="opacity:0">
          <img src="images/img_event2_detail_2.png" alt=""/>
        </div>
        <div class="d_3" style="opacity:0">
          <img src="images/img_event2_detail_3.png" alt=""/>
        </div>
      </div>
      <div class="car_bg">
        <div class="inner">
          <div class="ful_1">
            <img src="images/ful_1.png" alt=""/>
          </div>
          <div class="ful_2">
            <img src="images/ful_2.png" alt=""/>
          </div>
          <div class="triger1">
          </div>
          <div class="img_car">
            <img src="images/car.png" alt=""/>
          </div>
        </div>
      </div>
    </div>
    <!------------- 다섯번째 영역 -------------------->
    <div class="area5 block_offevent_3" id="area5">
      <div class="vs"><img src="images/txt_vs.png" alt=""/></div>
      <div class="inner clearfix">
        <div class="mbom">
          <div class="title">
            <img src="images/name_mbom.png" alt=""/>
          </div>
          <div class="img">
            <img src="images/mbom.png" alt=""/>
          </div>
          <div class="txt">
            <img src="images/txt_mbom.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#"><img src="images/btn_mbom.png" alt=""/></a>
          </div>
        </div>
        <div class="abom">
          <div class="title">
            <img src="images/name_abom.png" alt=""/>
          </div>
          <div class="img">
            <img src="images/abom.png" alt=""/>
          </div>
          <div class="txt">
            <img src="images/txt_abom.png" alt=""/>
          </div>
          <div class="btn_block">
            <a href="#"><img src="images/btn_abom.png" alt=""/></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <img src="images/txt_footer.png" width="924" height="99" alt=""/>
    </div>
    <!--quickmenu-->
    <div class="quickmenu" id="quickmenu" style="position:fixed;right:20px;z-index:50;bottom:50px;">
      <a href="#"><img src="images/btn_top.png" alt=""/></a>
    </div>
    <!--quickmenu-->

  </div>
      <!------------- 이벤트 당첨 정보입력1 팝업 -------------------->
	<div class="popup_wrap zoom-anim-dialog mfp-hide" id="event_input1_pop">
      <input type="hidden" name="mb_gift" id="mb_gift" value="">
   	  <div class="p_mid">
            <div class="block_close clearfix">
                <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/pop_btn_close.png" /></a>
            </div>
            <div class="block_content">
            	<div class="inner">
                	<div class="title">
       	    	    	<img src="images/popup/title_gift_1.png" alt="" id="input1_image"/>
                        <!--폭탄크림 미니어쳐 당첨 <img src="images/popup/title_gift_2.png" alt=""/>-->
                        <!--폭탄크림 KIT 당첨 <img src="images/popup/title_gift_3.png" alt=""/>-->
                    </div>
                    <div class="input_block">
                        <ul class="clearfix">
                            <li class="t_name"><img src="images/popup/txt_name.png" alt=""/></li>
                            <li class="input_txt"><input type="text" name="mb_name" id="mb_name"></li>
                        </ul>
                        <ul class="clearfix">
                          <li class="t_name"><img src="images/popup/txt_phone.png" alt=""/></li>
                            <li class="input_txt phone clearfix">
                            	<div><input type="tel" name="mb_phone1" id="mb_phone1"></div>
                                <div><input type="tel" name="mb_phone2" id="mb_phone2" size="4"></div>
                                <div><input type="tel" name="mb_phone3" id="mb_phone3" size="4"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="bar"></div>
                    <div class="input_block input_check">
                        <ul class="clearfix">
                            <li class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></li>
                            <li class="in_check_label"><img src="images/popup/check_agree_1.png" alt=""/></li>
                            <li class="in_check_label"><a href="#use_div" class="btn_detail popup-with-zoom-anim"><img src="images/popup/btn_detail.png" alt=""/></a></li>
                        </ul>
                        <ul class="clearfix">
                            <li class="in_check"><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
                          <li class="in_check_label"><img src="images/popup/check_agree_2.png" alt=""/></li>
                            <li class="in_check_label"><a href="#privacy_div" class="btn_detail popup-with-zoom-anim"><img src="images/popup/btn_detail.png" alt=""/></a></li>
                            </li>
                        </ul>
                        <ul class="clearfix">
                            <li class="in_check"><input type="checkbox" name="adver_agree" id="adver_agree"></li>
                            <li class="in_check_label"><img src="images/popup/check_agree_3.png" alt=""/></li>
                            <li class="in_check_label"><a href="#adver_div" class="btn_detail popup-with-zoom-anim"><img src="images/popup/btn_detail.png" alt=""/></a></li>
                            </li>
                        </ul>
                    </div>
                    <div class="txt_gift_detail">
               	    	<img src="images/popup/txt_gift_detail.png" alt=""/>
                    </div>
                    <div class="btn_block">
                        <a href="#" onclick="chk_input()"><img src="images/popup/btn_input_ok.png" alt=""/></a>
                    </div>
                </div><!--inner-->
            </div>
        </div>
	</div>

      <!------------- 이벤트 당첨 정보입력1 팝업 -------------------->
      <!------------- 이벤트 당첨 정보입력(CREAM2) 팝업 -------------------->
    <div id="event_cream2_pop" class="popup_wrap zoom-anim-dialog mfp-hide">
      <input type="hidden" name="mb_gift" id="mb_gift" value="cream">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#" class="btn_close"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="inner">
            <div class="title title2">
              <img src="images/popup/title_input_add.png" alt=""/>
            </div>
            <div class="input_block">
              <ul class="clearfix">
                <li class="t_name"><img src="images/popup/txt_label_add.png" alt=""/></li>
                <li class="input_txt phone clearfix">
                  <div><input type="tel" name="mb_zipcode1" id="mb_zipcode1"></div>
                  <div><input type="tel" name="mb_zipcode2" id="mb_zipcode2"></div>
                </li>
                <li>
                  <a href="#" onclick="search_zip();"><img src="images/popup/btn_add_num.png" alt=""/></a>
                </li>
              </ul>
              <ul class="clearfix">
                <li class="t_name"></li>
                <li class="input_txt"><input type="text" name="mb_addr1" id="mb_addr1"></li>
              </ul>
              <ul class="clearfix">
                <li class="t_name"></li>
                <li class="input_txt"><input type="text" name="mb_addr2" id="mb_addr2"></li>
              </ul>
            </div>
            <div class="txt_gift_detail">
              <img src="images/popup/txt_add_detail.png" alt=""/>
            </div>
            <div class="btn_block">
              <a href="#" onclick="chk_input2()"><img src="images/popup/btn_input_ok.png" alt=""/></a>
            </div>
          </div><!--inner-->
        </div>
      </div>
    </div>
      <!------------- 이벤트 당첨 정보입력(CREAM2) 팝업 -------------------->
      <!------------- 이벤트 당첨 정보입력(KIT, MINIATURE 2) 팝업 -------------------->
    <div id="event_gift2_pop" class="popup_wrap zoom-anim-dialog mfp-hide">
      <input type="hidden" name="mb_gift" id="mb_gift" value="kit">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#" class="btn_close"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="inner">
            <div class="title p3">
              <img src="images/popup/title_input_store_1.png" alt=""/>
              <!--<img src="images/popup/title_input_store_2.png" alt=""/>-->
            </div>
            <div class="input_block pb3">
              <ul class="clearfix">
                <li class="t_name"><img src="images/popup/txt_label_store.png" alt=""/></li>
                <li class="input_txt store clearfix">
                  <select name="mb_addr1" id="mb_addr1" onchange="addr_change(this.value)">
                    <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_level='1'";
	$result 	= mysqli_query($my_db, $query);
	while($addr1_data = @mysqli_fetch_array($result))
	{
?>
                    <option value="<?=$addr1_data['addr_sido']?>"><?=$addr1_data['addr_sido']?></option>
<?
	}
?>
                  </select>
                </li>
                <li class="input_txt store clearfix">
                  <select name="mb_addr2" id="mb_addr2" onchange="shop_change(this.value)">
                    <option value="">선택하세요</option>
                  </select>
                </li>
              </ul>
              <ul class="clearfix">
                <li class="t_name"></li>
                <li class="input_txt">
                  <select name="mb_shop" id="mb_shop">
                    <option value="">선택하세요</option>
                  </select>
                </li>
              </ul>
            </div>
            <div class="btn_block">
              <a href="#" onclick="chk_input2()"><img src="images/popup/btn_input_ok.png" alt=""/></a>
            </div>
          </div><!--inner-->
        </div>
      </div>
    </div>

      <!------------- 이벤트 당첨 정보입력(KIT, MINIATURE 2) 팝업 -------------------->

    <!------------- 개인정보 활용동의 팝업 -------------------->
    <div class="popup_wrap zoom-anim-dialog mfp-hide" id="use_div">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#event_input1_pop" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content agree">
          <div class="inner">
          개인정보 활용동의 내용
          </div><!--inner-->
        </div>
      </div>
    </div>
    <!------------- 개인정보 활용동의 팝업 -------------------->
    <!------------- 개인정보 취급 위탁동의 팝업 -------------------->
    <div class="popup_wrap zoom-anim-dialog mfp-hide" id="privacy_div">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#event_input1_pop" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content agree">
          <div class="inner">
          개인정보 취급 위탁동의 내용
          </div><!--inner-->
        </div>
      </div>
    </div>
    <!------------- 개인정보 취급 위탁동의 팝업 -------------------->
    <!------------- 광고성 정보전송동의 팝업 -------------------->
    <div class="popup_wrap zoom-anim-dialog mfp-hide" id="adver_div">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#event_input1_pop" class="btn_close first-popup-link"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content agree">
          <div class="inner">
          광고성 정보전송동의 내용
          </div><!--inner-->
        </div>
      </div>
    </div>
    <!------------- 광고성 정보전송동의 팝업 -------------------->

      <!------------- QR코드 팝업 -------------------->
    <div class="popup_wrap zoom-anim-dialog mfp-hide" id="qrcode_pop" style="display:none">
      <div class="p_mid">
        <div class="block_close clearfix">
          <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content product">
          <div class="inner">
            <a href='http://m.site.naver.com/0cPs2'><img src='http://qrcodethumb.phinf.naver.net/20150410_236/kyhfan_14286514585125HTi2_PNG/0cPs2.png'  style="width:300px"/></a>
          </div><!--inner-->
        </div>
      </div>
    </div>

      <!------------- QR코드 팝업 -------------------->
      <!------------- 게임1 팝업 -------------------->
    <div class="popup_wrap" id="event_game1_pop" style="display:none;margin-top:-362px">
      <div class="p_mid game">
        <div class="block_close clearfix">
          <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/pop_btn_close.png" /></a>
        </div>
        <div class="block_content">
          <div class="inner">
            <div class="btn_start">
              <a href="#" onclick="game_start()"><img src="images/popup/btn_start.png" alt=""/></a>
            </div>
            <div class="title" id="game_title">
              <img src="images/popup/title_game.png" alt=""/>
            </div>
            <div class="img_product">
              <div class="p_inner">
                <div class="cap" id="cap1">
                  <img src="images/popup/cap_1.png"alt=""/>
                </div>
                <div class="body" id="body1">
                  <img src="images/popup/p_body.png" width="241" height="216" alt=""/>
                </div>
                <div style="position:absolute;top:250px;left:250px;display:none;" id="w1">
                  <img src="./images/waterdrop1.png">
                </div>
                <div style="position:absolute;top:250px;left:-60px;display:none;" id="w1_2">
                  <img src="./images/waterdrop1_2.png">
                </div>
                <div style="position:absolute;top:200px;left:240px;display:none;" id="w2">
                  <img src="./images/waterdrop2.png">
                </div>
                <div style="position:absolute;top:220px;left:-30px;display:none;" id="w2_2">
                  <img src="./images/waterdrop2_2.png">
                </div>

              </div>
            </div>
            <div class="time clearfix">
              <div class="num">
                <img src="images/popup/num1.png" alt="" id="game_num1"/>
              </div>
              <div class="num">
                <img src="images/popup/num0.png" alt="" id="game_num2"/>
              </div>
              <div class="num">
                <img src="images/popup/num_dash.png" alt=""/>
              </div>
              <div class="num">
                <img src="images/popup/num0.png" alt="" id="game_num3"/>
              </div>
              <div class="num">
                <img src="images/popup/num0.png" alt="" id="game_num4"/>
              </div>
            </div>
            <div class="gage">
              <div class="bg" id="gage_bg">
              100%
              </div>
            </div>
            <div class="bg_water_1">
              <img src="images/popup/bg_water.png"  alt=""/>
            </div>
            <div class="bg_water_2">
              <img src="images/popup/bg_water_2.png"  alt=""/>
            </div>
          </div><!--inner-->
        </div>
      </div>
    </div>

      <!------------- 게임1 팝업 -------------------->
      <!------------- 개인정보 활용동의 alert -------------------->
    <div id="use_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
      <div class="p_alert">
        <div class="inner">
          <div class="block_close clearfix">
            <a href="#" data-mfp-src="#event_input1_pop" class="btn_close popup-with-zoom-anim" id="use_agree_close"><img src="images/popup/pop_btn_close.png" /></a>
          </div>
          <div class="block_content">
            <div class="title">
              <img src="images/popup/alert_txt_agree_1.png" alt=""/>
            </div>
            <div class="btn_block">
              <a href="#" data-mfp-src="#event_input1_pop" class="popup-with-zoom-anim" id="use_agree_ok"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!------------- 개인정보 활용동의 alert -------------------->
      <!------------- 개인정보 취급위탁동의 alert -------------------->
    <div id="privacy_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
      <div class="p_alert">
        <div class="inner">
          <div class="block_close clearfix">
            <a href="#" data-mfp-src="#event_input1_pop" class="btn_close popup-with-zoom-anim" id="privacy_agree_close"><img src="images/popup/pop_btn_close.png" /></a>
          </div>
          <div class="block_content">
            <div class="title">
              <img src="images/popup/alert_txt_agree_2.png" alt=""/>
            </div>
            <div class="btn_block">
              <a href="#" data-mfp-src="#event_input1_pop" class="popup-with-zoom-anim" id="privacy_agree_ok"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!------------- 개인정보 취급위탁동의 alert -------------------->
      <!------------- 광고성 정보전송동의 alert -------------------->
    <div id="adver_agree_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
      <div class="p_alert">
        <div class="inner">
          <div class="block_close clearfix">
            <a href="#" data-mfp-src="#event_input1_pop" class="btn_close popup-with-zoom-anim" id="adver_agree_close"><img src="images/popup/pop_btn_close.png" /></a>
          </div>
          <div class="block_content">
            <div class="title">
              <img src="images/popup/alert_txt_agree_3.png" alt=""/>
            </div>
            <div class="btn_block">
              <a href="#" data-mfp-src="#event_input1_pop" class="popup-with-zoom-anim" id="adver_agree_ok"><img src="images/popup/pop_btn_ok.png" alt=""/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!------------- 광고성 정보전송동의 alert -------------------->
      <!------------- 게임 실패 alert -------------------->
    <div id="gameover_alert" class="popup_wrap zoom-anim-dialog mfp-hide">
      <div class="p_alert">
        <div class="inner">
          <div class="block_close clearfix">
            <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="images/popup/pop_btn_close.png" /></a>
          </div>
          <div class="block_content">
            <div class="title">
              <img src="images/popup/txt_fail.png" alt=""/>
            </div>
            <div class="btn_block">
              <a href="#" onclick="$.magnificPopup.close();setTimeout('game_ready();',500);"><img src="images/popup/btn_re.png" alt=""/></a>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!------------- 게임 실패 alert -------------------->

<!--  주소검색 DIV 시작  -->
  <div id="post_div" style="display:none;border:5px solid;position:fixed;width:650px;height:600px;margin-left:-325px;top:50%;left:50%;margin-top:-300px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:999999">
    <img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:-3px;top:-3px;z-index:9999999" onclick="closeDaumPostcode()" alt="닫기 버튼">
  </div>
<!--  주소검색 DIV 끝  -->

  </body>
</html>

<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
<script type="text/javascript">
	// quick menu
	/*
	var quickTop;
	$(window).scroll(function() {
		quickTop = ($(window).height()-$('.quickmenu').height()) /2;
		//$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
		$('.quickmenu').animate({top:$(window).scrollTop()+quickTop},100,'easeOutExpo');
		
	});
	*/

var bomb_cnt = 0;
var currentsec=9;
var currentmil=100;
var keepgoin=false;
var controller;

$(document).ready(function() {
	// 체크박스 스타일 설정
	$('.zoom-anim-dialog input').on('ifChecked ifUnchecked', function(event){
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
		closeOnBgClick: true,
		callbacks: {
			open: function() {
				$('#event_game2_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#event_game2_pop').show().animate({top:position},500,'easeOutExpo');
				window.scrollTo(0,0);
			},
			close: function() {
				bomb_cnt = 0;
				currentsec=9;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","event_action();");
				$("#body1").attr("onclick","event_action();");
				$("#timer_s").val("10");
				$("#timer_ms").val("00");
				$("#mb_name").val("");
				$("#mb_phone1").val("");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#mb_addr1").val("");
				$("#mb_addr2").val("");
				$("#mb_shop").val("");
				$('input').iCheck('uncheck');
			}
		}
	});

	$('.first-popup-link').magnificPopup({
		closeBtnInside:true
	});

	var magnificPopup = $.magnificPopup.instance;

	$( '.quickmenu' ).click( function() {
		$( 'html, body' ).animate( { scrollTop : 0 }, 300 );
		  return false;
	} );

	setInterval(function(){
		$('.bg_water_1').animate({bottom:100},500).animate({bottom:110},500);
	},1000);

	setInterval(function(){
		$('.bg_water_2').animate({bottom:100},500).animate({bottom:110},500);
	},800);

	setInterval(function(){
		$('.quickmenu').animate({bottom:60},500).animate({bottom:50},500);
	},800);

	// 퀵메뉴 기본 위치
	//var quick_height	= $(window).height()/2;
	//$('.quickmenu').css("top",quick_height);

/*
	$('#contents_wrap').pagepiling({
		menu: '#menu',
		anchors: ['page1', 'page2', 'page3', 'page4'],
		sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
		navigation    : false,
		loopBottom       : true
	});
*/
	var quick_height	= $(window).height()/2;
	//initMoving(document.getElementById("quickmenu"), quick_height, 50, 50);

	var b_width			= $(window).width();
	var car_width		= -350;
<?
	if ($IE8 == "N")
	{
?>
	// init controller
	controller = new ScrollMagic();

	TweenMax.set(".img_car", {marginLeft: "-=400"});
	// build tween
			var tmarray	= [".d_1",".d_2",".d_3",".img_car"];
	var tween = new TimelineMax ()
		.add([
			TweenMax.to(".d_3", 1, {opacity: 1, delay:3, ease: Bounce.easeIn}),
			TweenMax.to(".d_2", 1, {opacity: 1, delay:2, ease: Bounce.easeIn}),
			TweenMax.to(".d_1", 1, {opacity: 1, delay:1, ease: Bounce.easeIn}),
			TweenMax.to(".img_car", 1, {marginLeft: -350})
			//TweenMax.staggerTo(tmarray, 1, {marginLeft: -350},{rotation:360, y:100}, 0.5)
		]);
	// build scene
	var scene = new ScrollScene({triggerElement: "#area4", duration: 1000, offset: 450})
					.setTween(tween)
					.setPin("#area4")
					.addTo(controller);
<?
	}
?>

});

	function closeDaumPostcode() {
		// iframe을 넣은 element를 안보이게 한다.
		element.style.display = 'none';
	}

	// 우편번호 찾기 iframe을 넣을 element
	var element = document.getElementById('post_div');

	function showDaumPostcode() {
		new daum.Postcode({
			oncomplete: function(data) {
			   // 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

				// 각 주소의 노출 규칙에 따라 주소를 조합한다.
				// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
				var fullAddr = data.address; // 최종 주소 변수
				var extraAddr = ''; // 조합형 주소 변수

				// 기본 주소가 도로명 타입일때 조합한다.
				if(data.addressType === 'R'){
					//법정동명이 있을 경우 추가한다.
					if(data.bname !== ''){
						extraAddr += data.bname;
					}
					// 건물명이 있을 경우 추가한다.
					if(data.buildingName !== ''){
						extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
					}
					// 조합형주소의 유무에 따라 양쪽에 괄호를 추가하여 최종 주소를 만든다.
					fullAddr += (extraAddr !== '' ? ' ('+ extraAddr +')' : '');
				}


				// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
				// 우편번호와 주소 및 영문주소 정보를 해당 필드에 넣는다.
				document.getElementById('mb_zipcode1').value = data.postcode1;
				document.getElementById('mb_zipcode2').value = data.postcode2;
				document.getElementById('mb_addr1').value = fullAddr;
				//document.getElementById('mb_addr2').focus();
				// iframe을 넣은 element를 안보이게 한다.
				element.style.display = 'none';
			},
			width : '100%',
			height : '100%'
<?
	preg_match('/MSIE (.*?);/', $_SERVER['HTTP_USER_AGENT'], $matches);
	if(count($matches)<2){
		preg_match('/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER['HTTP_USER_AGENT'], $matches);
	}
	if (count($matches)>1)
	{
		$version = $matches[1];//$matches변수값이 있으면 IE브라우저
		if($version<=8){ 
?>
		}).open();
<?
		}else{
?>
		}).embed(element);
<?
		}
	}else{
?>
		}).embed(element);
<?
	}
?>

		// iframe을 넣은 element를 보이게 한다.
		element.style.display = 'block';
	}


	function search_zip()
	{
		//$("#post_div").show();
		showDaumPostcode();
	}

	var cal_cnt = 0;
	function prev_cal()
	{
		if (cal_cnt == 0)
		{
			//alert('prev');
			$("#cal_4").fadeOut("fast", function(){
				$("#cal_6").fadeIn("slow");
			});
			cal_cnt = 2;
		}else if (cal_cnt == 1){
			$("#cal_5").fadeOut("fast", function(){
				$("#cal_4").fadeIn("slow");
			});
			cal_cnt = 0;
		}else if (cal_cnt == 2){
			$("#cal_6").fadeOut("fast", function(){
				$("#cal_5").fadeIn("slow");
			});
			cal_cnt =1;
		}
	}

	function next_cal()
	{
		if (cal_cnt == 0)
		{
			$("#cal_4").fadeOut("fast", function(){
				$("#cal_5").fadeIn("slow");
			});
			cal_cnt = 1;
		}else if (cal_cnt == 1){
			$("#cal_5").fadeOut("fast", function(){
				$("#cal_6").fadeIn("slow");
			});
			cal_cnt = 2;
		}else if (cal_cnt == 2){
			$("#cal_6").fadeOut("fast", function(){
				$("#cal_4").fadeIn("slow");
			});
			cal_cnt =0;
		}
	}


	function screen_move(param)
	{
		if (param == "site_event")
		{
			$( 'html, body' ).animate({ scrollTop: $(".area1").height()},500);
		}else if (param == "calender"){
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height()},500);
		}else if (param == "off_event"){
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height() + $(".area3").height()},500);
		}else{
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height() + $(".area3").height() + $(".area4").height()},500);
		}
	}

	function initMoving(target, position, topLimit, btmLimit) {
		if (!target)
			return false;

		var obj = target;
		var initTop = position;
		var bottomLimit = Math.max(document.documentElement.scrollHeight, document.body.scrollHeight) - btmLimit - obj.offsetHeight;
		var top = initTop;

		obj.style.position = 'absolute';

		if (typeof(window.pageYOffset) == 'number') {	//WebKit
			var getTop = function() {
				return window.pageYOffset;
			}
		} else if (typeof(document.documentElement.scrollTop) == 'number') {
			var getTop = function() {
				return Math.max(document.documentElement.scrollTop, document.body.scrollTop);
			}
		} else {
			var getTop = function() {
				return 0;
			}
		}

		if (self.innerHeight) {	//WebKit
			var getHeight = function() {
				return self.innerHeight;
			}
		} else if(document.documentElement.clientHeight) {
			var getHeight = function() {
				return document.documentElement.clientHeight;
			}
		} else {
			var getHeight = function() {
				return 500;
			}
		}

		function move() {
			if (initTop > 0) {
				pos = getTop() + initTop;
			} else {
				pos = getTop() + getHeight() + initTop;
			}

			if (pos > bottomLimit)
				pos = bottomLimit;
			if (pos < topLimit)
				pos = topLimit;

			interval = top - pos;
			top = top - interval / 3;
			obj.style.top = top + 'px';

			//window.setTimeout(function () {
				//move();
			//}, 25);
		}

		function addEvent(obj, type, fn) {
			if (obj.addEventListener) {
				obj.addEventListener(type, fn, false);
			} else if (obj.attachEvent) {
				obj['e' + type + fn] = fn;
				obj[type + fn] = function() {
					obj['e' + type + fn](window.event);
				}
				obj.attachEvent('on' + type, obj[type + fn]);
			}
		}

		addEvent(window, 'load', function () {
			move();
		});
	}

</script>

