<?
	include_once   "./header.php";
?>
    <div class="contents_wrap">
      <!------------- 첫번째 영역 -------------------->
      <div class="area1" style="width:100%;height:995px;">
        <div style="width:100%;text-align:center;">
          <a href="#">빌리프홈</a>
          <a href="#">PC/MOBILE 촉촉 이벤트</a>
          <a href="#">PLAY & SWEET 촉촉 이벤트 일정</a>
          <a href="#">PLAY & SWEET 촉촉 이벤트</a>
          <a href="#">제품보기</a>
        </div>
        <div>
          <a href="#" onclick="game_ready()">수분폭탄 터트리기</a>
        </div>
        <div id="menu" style="position:fixed; bottom:50%; right:45px;">
          <a href="#firstPage">퀵메뉴</a>
        </div>
      </div>
      <!------------- 첫번째 영역 -------------------->
      <!------------- 두번째 영역 -------------------->
      <div class="area2" style="width:100%;height:995px;">
        <div>
          <center>
            <h3>거리에서 만나는 즐거움 하나</h3>
            <h1>수분을 지켜라, 즐거움이 터진다!</h1>
            <h4>00월부터 전국 곳곳에서 당신을 촉촉하게 할 즐거움이 찾아갑니다.</h4>
            <h4>이벤트에 참여해 당신의 수분을 지키고, 다양한 선물도 받아가세요!.</h4>
          </center>
        </div>
        <div class="scrollme" style="text-align:center;left:50%;margin-left:400px">
          참여방법<br />
          <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="200" style="width:200px;float:left;text-align:center;">
          수분체크
          </div>
          <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="200" style="width:100px;float:left;text-align:center;">
          >
          </div>
          <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="200" style="width:200px;float:left;text-align:center;">
          로데오
          </div>
          <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="200" style="width:100px;float:left;text-align:center;">
          >
          </div>
          <div class="animateme" data-when="enter" data-from="1" data-to="0" data-opacity="0" data-translatey="200" style="width:200px;float:left;text-align:center;">
          선물
          </div>
        </div>
      </div>
      <!------------- 두번째 영역 -------------------->
      <!------------- 세번째 영역 -------------------->
      <div class="area3" style="width:100%;height:995px;">
        <div>
          <center>
            <h3>거리에서 만나는 즐거움 둘</h3>
            <h1>달콤한 캔디카를 만나보세요!</h1>
          </center>
        </div>
        <div>
          <a href="#">자세히 보기</a>
        </div>
      </div>
      <!------------- 세번째 영역 -------------------->
      <!------------- 네번째 영역 -------------------->
      <div class="area4" style="width:100%;height:995px;">
        <div>
          <a href="#">모이스쳐밤 자세히 보기</a>
        </div>
        <div>
          <a href="#">아쿠아밤 자세히 보기</a>
        </div>
      </div>
      <!------------- 네번째 영역 -------------------->
    </div>
      <!------------- 이벤트 안내 팝업 -------------------->
    <div id="event_info_pop" class="zoom-anim-dialog mfp-hide" style="position:absolute;width:500px;height:500px;top:50%;left:50%;margin-left:-250px;margin-top:-250px;background:white">
      <input type="text" name="mb_idx" id="mb_idx">
      <div>
        <div>
        수분폭탄 즐거움이 터진다!<br />
        이벤트 참여를 위해서 개인 정보가 필요합니다.
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
          <input type="checkbox" name="use_agree" id="use_agree">개인정보 활용약관<br />
          <input type="checkbox" name="privacy_agree" id="privacy_agree">개인정보 취급위탁 동의약관<br />
          <input type="checkbox" name="adver_agree" id="adver_agree">광고성 정보 전송 동의약관
        </div>
        <div>
          <a href="#" onclick="chk_input()">이벤트 참여</a>
        </div>
      </div>
    </div>
      <!------------- 이벤트 안내 팝업 -------------------->
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
  </body>
</html>

<script type="text/javascript">
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
			}
		}

	});

	$('.first-popup-link').magnificPopup({
		closeBtnInside:true
	});

	var magnificPopup = $.magnificPopup.instance;

});

function event_action()
{
	if (bomb_cnt > 10)
	//if (bomb_cnt > 50)
	{
		keepgoin=false;
		$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#cap1").attr("onclick","");

		$.ajax({
			type:"POST",
			cache: false,
			data:{
				"exec"			: "winner_check"
			},
			url: "../main_exec.php",
			success: function(response){
				alert(response);
				if (response == "N")
				{
					alert("당첨되지 않으셨습니다. 다시 응모해 주세요.");
				}else{
					alert("당첨 되셨습니다. 경품 수령에 필요한 개인정보를 입력해 주세요.");
					$.magnificPopup.open({
						items: {
							src: '#event_info_pop'
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
					$("#mb_idx").val(response);
				}
			}
		});

		return false;
	}

	if (bomb_cnt % 2 == 0)
	{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$('#w1').show();
		$('#w1').animate({top:"230",left:"420"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1').css({"top":"250px","left":"400px"});
		$('#w2_2').show();
		$('#w2_2').animate({top:"200",left:"20"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2_2').css({"top":"220px","left":"40px"});
	}else{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$('#w1_2').show();
		$('#w1_2').animate({top:"250",left:"30"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1_2').css({"top":"270px","left":"30px"});
		$('#w2').show();
		$('#w2').animate({top:"180",left:"410"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2').css({"top":"200px","left":"430px"});
	}
	//$('#cap1').jQueryTween({ to: { rotate: { z: -30 },translate: {y: -250 },rotate: { z: 30 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out },function() {
	//});
	if (keepgoin == false)
	{
		keepgoin=true;
		timer();
	}
	bomb_cnt = bomb_cnt + 1;

}

function timer(){
	if(keepgoin){
		currentmil-=1;
		if (currentmil==0){
			currentmil=100;
			currentsec-=1;
		}
		Strsec=""+currentsec;
		Strmil=""+currentmil;
		if (Strsec.length!=2){
			Strsec="0"+currentsec;
		}
		if (Strmil.length!=2){
			Strmil="0"+currentmil;
		}
		$("#timer_s").val(Strsec);
		$("#timer_ms").val(Strmil);
		if (Strsec == 0)
		{
			$("#timer_ms").val("00");
			alert("타임 오버!");
			$("#cap1").attr("onclick","");
		}else{
			setTimeout("timer()", 10);
		}
	}
}

function startover(){
	keepgoin=false;
	currentsec=0;
	currentmin=0;
	currentmil=0;
	Strsec="00";
	Strmin="00";
	Strmil="00";
}

function game_start()
{
	$.magnificPopup.close();

	setTimeout("game_start_data();",500);

	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "insert_event_member"
		},
		url: "../main_exec.php"
	});

}

function game_ready()
{
	$.magnificPopup.open({
		items: {
			src: '#event_game1_pop'
		},
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
				$('#event_game1_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#event_game1_pop').show().animate({top:position},{duration:1000,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			},
			close: function() {
				bomb_cnt = 0;
				currentsec=9;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","event_action();");
				$("#timer_s").val("10");
				$("#timer_ms").val("00");
			}
		}
	}, 0);
	
}
function game_start_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_game2_pop'
		},
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
				$('#event_game2_pop').show().animate({top:position},{duration:100,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			},
			close: function() {
				bomb_cnt = 0;
				currentsec=9;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","event_action();");
				$("#timer_s").val("10");
				$("#timer_ms").val("00");
			}
		}
	}, 0);
	
}
</script>

