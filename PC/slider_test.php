
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> bxslider </title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/jquery.bxslider.min.js"></script>
<script type="text/javascript">
		$(document).ready(function(){
		  $('.slider').bxSlider({
			  pager: false,     // 하단 숫자 //
			  controls: true, // 좌/우 컨트롤러 //
			  auto: true,        // 자동실행 //
			  pause: 2000
		  });
		});
  </script>
<style type="text/css">
	.wrap {width:920px; margin:0 auto; position:relative;}
	.bx-controls-direction .bx-prev {display:block; background: url(http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/controls.png) no-repeat 0 0; width:32px; height:32px; text-indent:-999px; position:absolute; top:105px; left:10px;}
	.bx-controls-direction .bx-prev:hover {background-position:0 -32px;}
	.bx-controls-direction .bx-next {display:block; background: url(http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/controls.png) no-repeat -43px 0; width:32px; height:32px; text-indent:-999px; position:absolute; top:105px; right:10px;}
	.bx-controls-direction .bx-next:hover {background-position:-43px -32px;}
</style>
</head>
<body>
<div class="wrap">
	<div class="slider">
		<p>
			<img src="http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/01.jpg"/>
		</p>
		<p>
			<img src="http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/02.jpg"/>
		</p>
		<p>
			<img src="http://pic.styleindex.co.kr/skin/inda/mobile/dm/test/03.jpg"/>
		</p>
	</div>
</div>
</body>
</html>