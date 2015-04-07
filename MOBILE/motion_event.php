<?
	include_once "./header.php";
?>
  <div class="start_area" style="width:100%;margin-top:200px;text-align:center;">
    <a href="#" onclick="javascript:event_start();">시작하기</a>
  </div>
  <div class="contents_area" style="display:none">
    <div>
      <div>
        <INPUT TYPE="text" NAME="timer_m" id="timer_m" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:33px;">
        :
        <INPUT TYPE="text" NAME="timer_s" id="timer_s" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
        :
        <INPUT TYPE="text" NAME="timer_ms" id="timer_ms" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
        <!-- <INPUT TYPE="button" NAME="start" VALUE=" 출발 " ONCLICK="keepgoin=true;timer()">
        <INPUT TYPE="button" NAME="pause" VALUE=" 중지 " ONCLICK="keepgoin=false;">
        <INPUT TYPE="reset" NAME="reset" VALUE=" 다시 "> -->
      </div>
    </div>
    <!-- <div class="case_area" style="width:100%;text-align:center;"><img src="./images/event_case.jpg"></div> -->
    <div class="case_area" style="width:100%;text-align:center;">
            <div>
              <img src="./images/body.png">
            </div>
            <div style="margin-top:-450px">
              <img src="./images/cap1.png" onclick="event_action();" id="cap1">
            </div>
    </div>
    <div class="water_area" style="width:100%;text-align:center;display:none"><img src="./images/water.jpg"></div>
    <!-- <div id="progressbar-5">
      <div class="progress-label">
      </div>
    </div> -->
  </div>
  </body>
</html>


<script type="text/javascript">
	var triger = 0;
	var shakeThreshold = 1000; // 정의 한 흔들리는 이동
	var lastUpdate = 0; // 레코드 위에 한 번 흔들다 시간
	var x, y, z, lastX, lastY, lastZ; // 정의 x, y, z 기록 세 축 데이터 및 한 번 트리거 데이터
	var bomb_cnt = 0;
	var currentsec=0;
	var currentmin=0;
	var currentmil=0;
	var keepgoin=false;

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

	function event_start()
	{
		$(".start_area").hide();
		$(".contents_area").show();
		triger = 1;
	}

	// 감청 센서 운동 사건
	if (window.DeviceMotionEvent) {
			window.addEventListener('devicemotion', deviceMotionHandler, false);
	} else {
		alert('이 설비는 지원하지 않습니다. devicemotion 사건');
	}

	// 운동 센서 처리
	function deviceMotionHandler(eventData) {
		var acceleration = eventData.accelerationIncludingGravity; // 중력 가속도 얻을 수 있는 포함
		var curTime = new Date().getTime();

		// 100 밀리초 대해 한 번 위치 판단
		if ((curTime - lastUpdate) > 100) {

			var diffTime = curTime - lastUpdate;
			lastUpdate = curTime;

			x = acceleration.x;
			y = acceleration.y;
			z = acceleration.z;

			var speed = Math.abs(x + y + z - lastX - lastY - lastZ) / diffTime * 10000;
			// 앞뒤 x y z 간 差值 절대 값 및 시간 비율 넘 미리 설정한 임계값 않으면 판단 을 흔들렸다 조작 장치
			if (speed > shakeThreshold) {
				if (triger == 1)
				{
					$('.water_area').fadeIn('fast', function() {
						$(".water_area").fadeOut('fast');
					});

					if (bomb_cnt > 50)
					{
						keepgoin=false;
						alert('완료');
						$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
						$("#cap1").attr("onclick","");

						return false;
					}
					if (bomb_cnt % 2 == 0)
						$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
					else
						$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
					//$('#cap1').jQueryTween({ to: { rotate: { z: -30 },translate: {y: -250 },rotate: { z: 30 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out },function() {
					//});
					if (keepgoin == false)
					{
						keepgoin=true;
						timer();
					}
					bomb_cnt = bomb_cnt + 1;
				}
			}

			lastX = x;
			lastY = y;
			lastZ = z;
		}
	}

/*
$(function() {
         var progressbar = $( "#progressbar-5" );
         progressLabel = $( ".progress-label" );
         $( "#progressbar-5" ).progressbar({
            value: false,
            change: function() {
               progressLabel.text( 
                  progressbar.progressbar( "value" ) + "%" );
            },
            complete: function() {
               progressLabel.text( "Loading Completed!" );
            }
         });
         function progress() {
            var val = progressbar.progressbar( "value" ) || 0;
            progressbar.progressbar( "value", val + 1 );
            if ( val < 99 ) {
               setTimeout( progress, 100 );
            }
         }
         setTimeout( progress, 3000 );
      });
*/
</script>