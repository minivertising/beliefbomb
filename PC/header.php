<?
	include_once "../config.php";
	
	if ($gubun == "MOBILE")
		echo "<script>location.href='http://www.belifbomb.com/MOBILE/index.php'</script>";
?>
<!doctype html>
<html prefix="og: http://ogp.me/ns#">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# video: http://ogp.me/ns/video#">
    <title>belif bomb</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0" />

    <meta property="og:site_name" content="belifbomb">
    <meta property="og:url" content="http://www.belifbomb.com/PC/index.php">
    <meta property="og:title" content="수분폭탄, 즐거움이 터진다">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://www.belifbomb.com/MOBILE/img/sns_image2.png" />
    <meta property="og:description" content="지금 정해진 시간안에 폭탄 크림을 터트리면, 빌리프의 다양한 선물이 쏟아집니다. 더 많은 이벤트 자세히 보기">
    <!-- <meta property="og:video" content="https://youtu.be/7LB0Id5a5Jk">
    <meta property="og:video:type" content="application/x-shockwave-flash">
    <meta property="og:video:width" content="1200"> -->

    <link rel="shortcut icon" type="image/x-icon" href="./images/pavicon.ico" />
    <link rel="stylesheet" type="text/css" href="../lib/Magnific-Popup/magnific-popup.css"> 
    <link rel="stylesheet" href="../lib/iCheck/skins/all.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./css/style_yang.css" />

    <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    <script type="text/javascript" src="../lib/Magnific-Popup/jquery.magnific-popup.js"></script>
    <script type='text/javascript' src='../lib/iCheck/icheck.js'></script>
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<?
	if ($IE8 == "N")
	{
?>
    <script type="text/javascript" src="../js/jQueryTween-aio-min.js"></script>
    <script type="text/javascript" src="../js/TweenMax.min.js"></script>
    <script type="text/javascript" src="../js/jquery.scrollmagic.js"></script>
    <script type="text/javascript" src="../js/jquery.scrollmagic.debug.js"></script>
<?
	}else{
?>
    <script type="text/javascript" src="../js/jQueryRotate.js"></script>
<?
	}
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62118282-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
  <body oncontextmenu='return false' ondragstart='return false' onselectstart='return false'>

