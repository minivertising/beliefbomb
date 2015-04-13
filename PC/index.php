<?
	include_once   "./header.php";
?>
    <div id="menu" style="width:100%;height:40px;text-align:center;position:fixed;z-index:5">
      <a href="http://www.belifcosmetic.com/main.jsp" target="_blank">빌리프홈</a>
      <a href="#" onclick="screen_move('site_event')">PC/MOBILE 촉촉 이벤트</a>
      <a href="#" onclick="screen_move('calender')">PLAY & SWEET 촉촉 이벤트 일정</a>
      <a href="#" onclick="screen_move('off_event')">PLAY & SWEET 촉촉 이벤트</a>
      <a href="#" onclick="screen_move('product')">제품보기</a>
    </div>
    <div class="contents_wrap" id="contents_wrap" style="position:absolute;width:100%">
      <!------------- 첫번째 영역 -------------------->
      <div class="area1" style="width:100%;height:995px;">
        <div style="margin-top:100px">
          <a href="#" onclick="game_ready()">수분폭탄 터트리기</a>
        </div>
      </div>
      <!------------- 첫번째 영역 -------------------->
      <!------------- 두번째 영역 -------------------->
      <div class="area2" style="width:100%;height:995px;">
        <div>
          <center>
            <h1>촉촉함이 팡팡! 달콤함이 팡팡!</h1>
            <h4>접속하신 PC나 MOBILE에서 정해진 시간 안에 수분 폭탄을 터트리시면 추첨을 통해 정품 수분 폭탄 크림을 드립니다!</h4>
          </center>
        </div>
        <div style="text-align:center;left:50%;margin-left:400px">
          <a href="#" onclick="game_ready();return false;">PC로 참여하기</a>
          <a href="#" onclick="show_qrcode();return false;">MOBILE로 참여하기</a>
        </div>
      </div>
      <!------------- 두번째 영역 -------------------->
      <!------------- 세번째 영역 -------------------->
      <div class="area3" style="width:100%;height:995px;">
        <div>
          <center>
            <h1>Play & Sweet 촉촉 이벤트 일정</h1>
          </center>
        </div>
        <div style="width:100%">
          <div style="position:absolute;width:100px;height:400px;left:20%">
            <a href="#" onclick="prev_cal();return false;">이전</a>
          </div>
          <div id="cal_4" style="position:absolute;width:400px;height:400px;left:50%;margin-left:-200px;background:green">
            4월 달력
          </div>
          <div id="cal_5" style="position:absolute;width:400px;height:400px;left:50%;margin-left:-200px;background:skyblue;display:none">
            5월 달력
          </div>
          <div id="cal_6" style="position:absolute;width:400px;height:400px;left:50%;margin-left:-200px;background:red;display:none">
            6월 달력
          </div>
          <div style="position:absolute;width:100px;height:400px;left:80%">
            <a href="#" onclick="next_cal();return false;">이후</a>
          </div>
        </div>
      </div>
      <!------------- 세번째 영역 -------------------->
      <!------------- 네번째 영역 -------------------->
      <div class="area4" style="width:100%;height:995px;">
        <div>
          <h1>촉촉함이 팡팡! 흔들리는 로데오 위에서 수분을 지키세요!</h1>
        </div>
      </div>
      <!------------- 네번째 영역 -------------------->
      <!------------- 다섯번째 영역 -------------------->
      <div class="area5" style="width:100%;height:995px;">
        <div>
          <a href="#">모이스쳐밤 자세히 보기</a>
        </div>
        <div>
          <a href="#">아쿠아밤 자세히 보기</a>
        </div>
      </div>
      <!------------- 다섯번째 영역 -------------------->
      <!--quickmenu-->
        <div class="quickmenu" style="position:absolute;right:20px;z-index:50;">
          <a href="#">TOP</a>
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
    <div id="event_game1_pop" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white;display:none">
      <div>
        <a href="#" onclick="game_start()">START!</a>
      </div>
    </div>
      <!------------- 게임1 팝업 -------------------->
      <!------------- 게임2 팝업 -------------------->
    <div id="event_game2_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
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
	var quick_height	= $(window).height()/2;
	$('.quickmenu').css("top",quick_height);

/*
	$('#contents_wrap').pagepiling({
		menu: '#menu',
		anchors: ['page1', 'page2', 'page3', 'page4'],
		sectionsColor: ['white', '#ee005a', '#2C3E50', '#39C'],
		navigation    : false,
		loopBottom       : true
	});
*/


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
				$("#cal_6").fadeIn("fast");
			});
			cal_cnt = 2;
		}else if (cal_cnt == 1){
			$("#cal_5").fadeOut("fast", function(){
				$("#cal_4").fadeIn("fast");
			});
			cal_cnt = 0;
		}else if (cal_cnt == 2){
			$("#cal_6").fadeOut("fast", function(){
				$("#cal_5").fadeIn("fast");
			});
			cal_cnt =1;
		}
	}

	function next_cal()
	{
		if (cal_cnt == 0)
		{
			$("#cal_4").fadeOut("fast", function(){
				$("#cal_5").fadeIn("fast");
			});
			cal_cnt = 1;
		}else if (cal_cnt == 1){
			$("#cal_5").fadeOut("fast", function(){
				$("#cal_6").fadeIn("fast");
			});
			cal_cnt = 2;
		}else if (cal_cnt == 2){
			$("#cal_6").fadeOut("fast", function(){
				$("#cal_4").fadeIn("fast");
			});
			cal_cnt =0;
		}
	}


	function screen_move(param)
	{
		if (param == "site_event")
		{
			$( 'html, body' ).animate({ scrollTop: $(".area1").height()},1500);
		}else if (param == "calender"){
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height()},500);
		}else if (param == "off_event"){
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height() + $(".area3").height()},500);
		}else{
			$( 'html, body' ).animate({ scrollTop: $(".area1").height() + $(".area2").height() + $(".area3").height() + $(".area4").height()},500);
		}
	}
</script>

