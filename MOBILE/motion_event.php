<?
	include_once "./header.php";
?>
<style>
         .ui-widget-header {
            background: #cedc98;
            border: 1px solid #DDDDDD;
            color: #333333;
            font-weight: bold;
         }
      </style>
  <div class="start_area" style="width:100%;margin-top:200px;text-align:center;">
    <a href="#" onclick="javascript:event_start();">시작하기</a>
  </div>
  <div class="contents_area" style="display:none">
    <div class="case_area" style="width:100%;text-align:center;"><img src="./images/event_case.jpg"></div>
    <div class="water_area" style="width:100%;text-align:center;display:none"><img src="./images/water.jpg"></div>
    <div id="progressbar-5">
      <div class="progress-label">
      </div>
    </div>
  </div>
  </body>
</html>


<script type="text/javascript">
	var triger = 0;
	var shakeThreshold = 1000; // 정의 한 흔들리는 이동
	var lastUpdate = 0; // 레코드 위에 한 번 흔들다 시간
	var x, y, z, lastX, lastY, lastZ; // 정의 x, y, z 기록 세 축 데이터 및 한 번 트리거 데이터

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
					$('.water_area').fadeIn('fast', function() {
						$(".water_area").fadeOut('fast');
					});
			}

			lastX = x;
			lastY = y;
			lastZ = z;
		}
	}

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
</script>