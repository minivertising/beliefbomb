<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>SmoothMovingLayer Demo</title>
<script type="text/javascript">
//<![CDATA[
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

		window.setTimeout(function () {
			move();
		}, 25);
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
//]]>
</script>
<style type="text/css">
body {
	margin: 0;
}
#head {
	width: 800px;
	height: 3000px;
	background: #eee;
}
#gotop {
	position: absolute;
	left: 810px;
	top: 50px;
	background: #ddd;
	width: 100px;
	height: 1000px;
}
</style>
</head>
<body>
<div id="head">
	웹사이트 헤더
</div>
<div id="gotop">
	<a href="#head" title="상단으로">위로</a>
</div>
<script type="text/javascript">initMoving(document.getElementById("gotop"), 50, 50, 50);</script>
</body> 
</html>