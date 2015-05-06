<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SmoothMovingLayer Demo</title>
<script>
var my_audio = new Audio('sound_sample.mp3');
</script>
</head>
<body>
<!-- <embed src="sound_sample.mp3" autostart="false" width="0" height="0" id="my_sound" enablejavascript="true"> -->
<audio controls="" preload="" autoplay="">
 <source src="sound_sample.mp3" type='audio/mp3'>
</audio>

<input type="button" value="재생" onclick="my_audio.play();">
<input type="button" value="멈춤" onclick="my_audio.pause();">
</body> 
</html>