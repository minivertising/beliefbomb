<script type="text/javascript">
	var shakeThreshold = 1000; // 정의 한 흔들리는 이동
	var lastUpdate = 0; // 레코드 위에 한 번 흔들다 시간
	var x, y, z, lastX, lastY, lastZ; // 정의 x, y, z 기록 세 축 데이터 및 한 번 트리거 데이터

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
				alert('333');
			}

			lastX = x;
			lastY = y;
			lastZ = z;
		}
	}
</script>