<?
	include_once "./header.php";

	// 주소 바로 입력시 index로 이동
	/*
	if ( !isset($_SERVER['HTTP_REFERER']) && $_SERVER['REMOTE_ADDR'] != "127.0.0.1" ) { 
		echo "<script>location.href='index.php'</script>"; 
		exit; 
	} 
	*/

?>
<body class="bg_blue_game">
  <div class="wrap_page popup game">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="btn_start">
          <a href="#" onclick="javascript:event_start();"><img src="img/popup/btn_start.png" alt=""/></a>
        </div>
        <div class="title" id="title1">
          <img src="img/popup/title_game.png" alt="" id="title_image"/>
        </div>
        <!-- <div class="ctn_num clearfix" style="display:none">
          <div>
            <img src="img/popup/ctn_1.png" alt=""  id="game_count"/>
          </div>
        </div> -->

        <div class="cap" id="cap1">
          <img src="img/popup/cap_1.png"alt=""/>
        </div>
        <div class="body" id="body1">
          <img src="img/popup/p_body.png" alt=""/>
        </div>
        <div class="ending_img" style="display:none">
          <img src="img/popup/p_ing.gif"alt=""/>
        </div>
        <div class="time clearfix" id="game_time_cnt">
          <div class="num">
            <img src="img/popup/num1.png" alt="" id="game_num1"/>
          </div>
          <div class="num">
            <img src="img/popup/num0.png" alt="" id="game_num2"/>
          </div>
          <div class="num">
            <img src="img/popup/num_dash.png" alt=""/>
          </div>
          <div class="num">
            <img src="img/popup/num0.png" alt="" id="game_num3"/>
          </div>
          <div class="num">
            <img src="img/popup/num0.png" alt="" id="game_num4"/>
          </div>
        </div>
        <div class="gage">
          <div class="inner" id="gage_num">
            <div class="bg">
            100%
            </div>
          </div>
        </div>
        <div class="bg_water_1">
          <img src="img/popup/bg_water.png"  alt=""/>
        </div>
        <div class="bg_water_2">
          <img src="img/popup/bg_water_2.png"  alt=""/>
        </div>
        <div class="game_bg"><img src="img/popup/bg_game.png"  alt=""/></div>
      </div><!--inner-->
    </div>
  </div>
  <!-------------- 미션 실패 alert -------------->
  <div id="gameover_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_fail.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="motion_game.php"><img src="img/popup/btn_re.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!-------------- 미션 실패 alert -------------->

  <!-------------- 미션 성공 & 미당첨 alert -------------->
  <div id="event_sorry_pop" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/title_alert_fail.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="motion_game.php"><img src="img/popup/btn_re.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->    
  <!-------------- 미션 성공 & 미당첨 alert -------------->

  <!-------------- 이벤트 당첨여부 체크 alert -------------->
  <div id="event_check_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content" style="padding-top:0px">
      <div class="inner alert">
        <div class="title" style="padding-bottom:0px">
          <img src="img/popup/title_mission.png" alt=""/>
        </div>
        <div class="btn_block" style="padding-bottom:0px">
          <a href="#" onclick="event_winner_check();"><img src="img/popup/btn_gift_check.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->    
  <!-------------- 이벤트 당첨여부 체크 alert -------------->


  </body>
</html>


<script type="text/javascript">
	var triger = 0;
	var shakeThreshold = 1000; // 정의 한 흔들리는 이동
	var lastUpdate = 0; // 레코드 위에 한 번 흔들다 시간
	var x, y, z, lastX, lastY, lastZ; // 정의 x, y, z 기록 세 축 데이터 및 한 번 트리거 데이터
	var bomb_cnt = 0;
	var currentsec=9;
	var currentmil=100;
	var keepgoin=false;
	var cnt_num = 0;
/*
	function timer(){
		if(keepgoin){
			currentmil+=1;
			if (currentmil==100){
				currentmil=0;
				currentsec+=1;
			}
			if (currentsec==60){
				currentsec=0;
				currentmin+=1;
			}
			Strsec=""+currentsec;
			Strmin=""+currentmin;
			Strmil=""+currentmil;
			if (Strsec.length!=2){
				Strsec="0"+currentsec;
			}
			if (Strmin.length!=2){
				Strmin="0"+currentmin;
			}
			if (Strmil.length!=2){
				Strmil="0"+currentmil;
			}
			$("#timer_m").val(Strmin);
			$("#timer_s").val(Strsec);
			$("#timer_ms").val(Strmil);
			if (Strsec == 10)
			{
				alert("타임 오버!");
				$("#cap1").attr("onclick","");
			}else{
				setTimeout("timer()", 10);
			}
		}
	}
*/
	//function event_start()
	//{
	//	$(".start_area").hide();
	//	$(".contents_area").show();
	//	triger = 1;
	//}
function event_start()
{
	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "insert_event_member"
		},
		url: "../main_exec.php"
	});
	var position = 0;
	$('.btn_start').animate({top:position},500,'easeInBack', function(){
		$('.btn_start').fadeOut('fast');
		$('#title_image').attr("src","img/popup/title_game_2.png");
		$("#gage_num").css("width", "0%");
		$(".bg").html("0%");

		if (keepgoin == false)
		{
			keepgoin=true;
			timer("M");
		}
		// 감청 센서 운동 사건
		if (window.DeviceMotionEvent) {
			window.addEventListener('devicemotion', deviceMotionHandler, false);
		} else {
			alert('이 기기는 지원하지 않습니다. PC버전으로 참여해 주세요.');
		}
		triger = 1;
	});
}


// 운동 센서 처리
function deviceMotionHandler(eventData) {
	var acceleration = eventData.accelerationIncludingGravity; // 중력 가속도 얻을 수 있는 포함
	var curTime = new Date().getTime();

	// 100 밀리초 대해 한 번 위치 판단
	if ((curTime - lastUpdate) > 80) {

		var diffTime = curTime - lastUpdate;
		lastUpdate = curTime;

		x = acceleration.x;
		y = acceleration.y;
		z = acceleration.z;

		var speed = Math.abs(x + y + z - lastX - lastY - lastZ) / diffTime * 10000;
		// 앞뒤 x y z 간 差值 절대 값 및 시간 비율 넘 미리 설정한 임계값 않으면 판단 을 흔들렸다 조작 장치
		if (speed > shakeThreshold) {
			if (bomb_cnt == 0)
			{
				$.ajax({
					type:"POST",
					cache: false,
					data:{
						"exec"			: "insert_event_member"
					},
					url: "../main_exec.php"
				});
			}
			if (triger == 1)
			{
				var gage_per	= bomb_cnt*4;
				var gage_bg	= gage_per;
				$(".ctn_num").show();
				if (bomb_cnt > 25)
				{
					$("#game_time_cnt").hide();
					$(".ctn_num").hide();
					window.removeEventListener('devicemotion', deviceMotionHandler, false);
					keepgoin=false;
					$("#title1").hide();
					$("#cap1").hide();
					$("#body1").hide();
					$('.ending_img').show(0, function(){
						window.setTimeout("m_event_check_data();",3000);
					});

					return false;
				}else{
					cnt_num = bomb_cnt + 1;
					$("#game_count").attr("src","img/popup/ctn_"+cnt_num+".png");
					if (bomb_cnt % 2 == 0)
						$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
					else
						$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
					$("#gage_num").animate({width:gage_bg + "%"},{duration:100,easing:'easeOutBounce'});
					$(".bg").html(gage_per + "%");

					bomb_cnt = bomb_cnt + 1;
				}
			}
		}else{
			$('#cap1').jQueryTween({ to: { translate: {y: 0 },rotate: { z: 0 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		}

		lastX = x;
		lastY = y;
		lastZ = z;
	}
}

function m_event_check_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_check_alert',
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);

}

function event_winner_check()
{
	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "winner_check"
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "N")
			{
				setTimeout("game_sorry();",500);
				return false;
			}else if (response == "Y"){
				location.href = "./popup_input1.php?gift=cream";
				return false;
			}else if (response == "K"){
				location.href = "./popup_input1.php?gift=kit";
				return false;
			}else if (response == "M") {
				location.href = "./popup_input1.php?gift=miniature";
				return false;
			}
		}
	});
}

$(document).ready(function() {
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

function game_sorry()
{
	$.magnificPopup.open({
		items: {
			src: '#event_sorry_pop',
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: false
	}, 0);
	return false;
}
</script>