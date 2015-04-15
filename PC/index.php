<?
	include_once   "./header.php";
?>

 <div  class="wrap_menu">
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
          <a href="#" class="btn_fb" ><img src="images/btn_fb.png" alt=""/></a>
          <a href="#" class="btn_kt"><img src="images/btn_kt.png" alt=""/></a>
      </div>
    </div> 
 </div> 
    
  <div class="contents_wrap" id="contents_wrap">
      <!------------- 첫번째 영역 -------------------->
      <div class="area1" style="width:100%;">
      	<div class="title">
   	    	<img src="images/title.png" alt=""/>
        </div>
        <div class="btn_go">
          <a href="#" onclick="game_ready()" style="outline:none"><img src="images/btn_event_go.png" alt=""/></a>
        </div>
        <div style="text-align:center;">
          <a href="#" onclick="show_qrcode();return false;"><img src="images/btn_view_mobile.png" alt=""/></a>
        </div>        
        <div class="img_detail">
   	    	<img src="images/img_detail.png" alt=""/>
        </div>
      </div>
      <!------------- 첫번째 영역 -------------------->

      <!------------- 두번째 영역 -------------------->
      <div class="area2 block_cal">
        <div class="title">
   	    	<img src="images/title_cal.png" alt=""/>
        </div>
        <div style="width:100%">
          <div class="arrow_left">
            <a href="#" onclick="prev_cal();return false;"><img src="images/arrow_left.png" alt=""/></a>
          </div>
          <div id="cal_4" style="position:absolute;width:400px;height:550px;left:50%;margin-left:-200px;background:green">
            4월 달력
          </div>
          <div id="cal_5" style="position:absolute;width:400px;height:550px;left:50%;margin-left:-200px;background:skyblue;display:none">
            5월 달력
          </div>
          <div id="cal_6" style="position:absolute;width:400px;height:550px;left:50%;margin-left:-200px;background:red;display:none">
            6월 달력
          </div>
          <div class="arrow_right">
            <a href="#" onclick="prev_cal();return false;"><img src="images/arrow_right.png" alt=""/></a>
          </div>
        </div>
      </div>
      
      <!------------- 세번째 영역 -------------------->
      <div class="area3 block_offevent_1">
        <div class="title">
   	    	<img src="images/title_offevent_1.png" alt=""/>
        </div>
      </div>
      
      <!------------- 네번째 영역 -------------------->
      <div class="area4 block_offevent_2" id="area4">
        <div class="title">
   	    	<img src="images/title_offevent_2.png" alt=""/>
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
      <div class="area5 block_offevent_3">
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
        <div class="quickmenu" id="quickmenu" style="position:absolute;right:20px;z-index:50;">
          <a href="#"><img src="images/btn_top.png" alt=""/></a>
        </div>
      <!--quickmenu-->

    </div>
      <!------------- 이벤트 당첨 정보입력(크림1) 팝업 -------------------->
    <div id="event_cream_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <input type="hidden" name="mb_gift" id="mb_gift" value="cream">
      <div>
        <div>
        빌리프 수분폭탄크림 당첨을 축하드립니다!
        </div>
        <div>
          이름 <input type="text" name="mb_name" id="mb_name"><br />
          전화번호 
          <select name="mb_phone1" id="mb_phone1">
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="016">016</option>
            <option value="017">017</option>
            <option value="018">018</option>
            <option value="019">019</option>
          </select> - 
          <input type="text" name="mb_phone2" id="mb_phone2" size="4"> - 
          <input type="text" name="mb_phone3" id="mb_phone3" size="4"><br />
          <input type="checkbox" name="use_agree" id="use_agree">개인정보 활용약관<br />
          <input type="checkbox" name="privacy_agree" id="privacy_agree">개인정보 취급위탁 동의약관<br />
          <input type="checkbox" name="adver_agree" id="adver_agree">광고성 정보 전송 동의약관
        </div>
        <div>
          <a href="#" onclick="chk_input()">정보 입력</a>
        </div>
      </div>
    </div>
      <!------------- 이벤트 당첨 정보입력(크림1) 팝업 -------------------->
      <!------------- 이벤트 당첨 정보입력(KIT1) 팝업 -------------------->
    <div id="event_kit_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <input type="hidden" name="mb_gift" id="mb_gift" value="kit">
      <div>
        <div>
        빌리프 MINI KIT 당첨을 축하드립니다!
        </div>
        <div>
          이름 <input type="text" name="mb_name" id="mb_name"><br />
          전화번호 
          <select name="mb_phone1" id="mb_phone1">
            <option value="010">010</option>
            <option value="011">011</option>
            <option value="016">016</option>
            <option value="017">017</option>
            <option value="018">018</option>
            <option value="019">019</option>
          </select> - 
          <input type="text" name="mb_phone2" id="mb_phone2" size="4"> - 
          <input type="text" name="mb_phone3" id="mb_phone3" size="4"><br />
          <input type="checkbox" name="use_agree" id="use_agree">개인정보 활용약관<br />
          <input type="checkbox" name="privacy_agree" id="privacy_agree">개인정보 취급위탁 동의약관<br />
          <input type="checkbox" name="adver_agree" id="adver_agree">광고성 정보 전송 동의약관
        </div>
        <div>
          <a href="#" onclick="chk_input()">정보 입력</a>
        </div>
      </div>
    </div>
      <!------------- 이벤트 당첨 정보입력(KIT1) 팝업 -------------------->
      <!------------- 이벤트 당첨 정보입력(CREAM2) 팝업 -------------------->
    <div id="event_cream2_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <input type="hidden" name="mb_gift" id="mb_gift" value="cream">
      <div>
        <div>
        수분폭탄 즐거움이 터진다!<br />
        이벤트 참여를 위해서 개인 정보가 필요합니다.
        </div>
        <div>
          주소입력
          <input type="text" name="mb_zipcode1" id="mb_zipcode1" style="width:60px"> - 
          <input type="text" name="mb_zipcode2" id="mb_zipcode2" style="width:60px">
          <a href="#" onclick="search_zip();">우편번호 찾기</a><br />
          <input type="text" name="mb_addr1" id="mb_addr1">
          <input type="text" name="mb_addr2" id="mb_addr2">
        </div>
        <div>
          <a href="#" onclick="chk_input2()">이벤트 참여</a>
        </div>
      </div>
    </div>
      <!------------- 이벤트 당첨 정보입력(CREAM2) 팝업 -------------------->
      <!------------- 이벤트 당첨 정보입력(KIT2) 팝업 -------------------->
    <div id="event_kit2_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <input type="hidden" name="mb_gift" id="mb_gift" value="kit">
      <div>
        <div>
        수분폭탄 즐거움이 터진다!<br />
        이벤트 참여를 위해서 개인 정보가 필요합니다.
        </div>
        <div>
          매장찾기
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
          <select name="mb_addr2" id="mb_addr2" onchange="shop_change(this.value)">
            <option value="">선택하세요</option>
          </select>
          <select name="mb_shop" id="mb_shop">
            <option value="">선택하세요</option>
          </select><br />
        </div>
        <div>
          <a href="#" onclick="chk_input2()">이벤트 참여</a>
        </div>
      </div>
    </div>
      <!------------- 이벤트 당첨 정보입력(KIT2) 팝업 -------------------->
      <!------------- QR코드 팝업 -------------------->
    <div id="qrcode_pop" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white;display:none">
      <div>
        <a href='http://m.site.naver.com/0cPs2'><img src='http://qrcodethumb.phinf.naver.net/20150410_236/kyhfan_14286514585125HTi2_PNG/0cPs2.png'/></a>
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
      <!------------- 게임2 팝업 -------------------->
    <div id="event_game2_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <!-- <script type="text/javascript" src="../js/jQueryTween-aio-min.js"></script> -->

      <div class="timediv">
        <center>
          <div>
            <INPUT TYPE="text" NAME="timer_s" id="timer_s" VALUE="10" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
            :
            <INPUT TYPE="text" NAME="timer_ms" id="timer_ms" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
            <!-- <INPUT TYPE="button" NAME="start" VALUE=" 출발 " ONCLICK="keepgoin=true;timer()">
            <INPUT TYPE="button" NAME="pause" VALUE=" 중지 " ONCLICK="keepgoin=false;">
            <INPUT TYPE="reset" NAME="reset" VALUE=" 다시 "> -->
          </div>
          <div>
            <div style="margin-top:100px">
              <img src="./images/body.png">
            </div>
            <div style="margin-top:-450px">
              <img src="./images/cap1.png" onclick="event_action();" id="cap1">
            </div>
            <div style="position:absolute;top:250px;left:400px;display:none" id="w1">
              <img src="./images/waterdrop1.png">
            </div>
            <div style="position:absolute;top:270px;left:30px;display:none" id="w1_2">
              <img src="./images/waterdrop1_2.png">
            </div>
            <div style="position:absolute;top:200px;left:430px;display:none" id="w2">
              <img src="./images/waterdrop2.png">
            </div>
            <div style="position:absolute;top:220px;left:40px;display:none" id="w2_2">
              <img src="./images/waterdrop2_2.png">
            </div>
          </div>
        </center>
      </div> <!--timediv-->
    </div>
      <!------------- 게임2 팝업 -------------------->
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
	var quickTop;
	$(window).scroll(function() {
		quickTop = ($(window).height()-$('.quickmenu').height()) /2;
		//$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
		$('.quickmenu').animate({top:$(window).scrollTop()+quickTop},100,'easeOutExpo');
		
	});

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
				$("#mb_name").val();
				$("#mb_phone1").val();
				$("#mb_phone2").val();
				$("#mb_phone3").val();
				$("#mb_addr1").val();
				$("#mb_addr2").val();
				$("#mb_shop").val();
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
	initMoving(document.getElementById("quickmenu"), quick_height, 50, 50);

	var b_width			= $(window).width();
	var car_width		= -350;

	// init controller
	controller = new ScrollMagic();

TweenMax.set(".img_car", {marginLeft: "-=300"});
	// build tween
	var tween = new TimelineMax ()
		.add([
			TweenMax.to(".d_3", 0.8, {opacity: 1, ease: Linear.easeNone}),
			TweenMax.to(".d_2", 0.7, {opacity: 1, ease: Linear.easeNone}),
			TweenMax.to(".d_1", 0.6, {opacity: 1, ease: Linear.easeNone}),
			TweenMax.to(".img_car", 0.5, {marginLeft: -350, ease: Cubic.easeOut})
		]);

	// build scene
	var scene = new ScrollScene({triggerElement: ".triger1", duration: 0, offset: -150})
					.setTween(tween)
					.addTo(controller);
	// show indicators (requires debug extension)
	//scene.addIndicators();

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

