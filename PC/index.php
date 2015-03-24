<?
	include_once   "./header.php";
?>
    <div id="fullpage">
      <div class="section " id="section0">
        <div>
          <iframe width="100%" height="500" src="https://www.youtube.com/embed/7LB0Id5a5Jk?rel=0&loof=1&autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
          <a href="#" onclick="sns_share('facebook');return false;">페이스북</a>
          <a href="#" onclick="sns_share('twitter');return false;">트위터</a>
        </div>
        <div>
          <a href="http://m.site.naver.com/0cEau"><img src="http://qrcodethumb.phinf.naver.net/20150323_80/kty0427_1427078655728a2CVL_PNG/0cEau.png"/></a>
          <a href="#secondPage">제품보기 모이스쳐밤</a>
          <a href="#3rdPage">제품보기 아쿠아밤</a>
        </div>
        <div id="menu" style="position:fixed; bottom:50%; right:45px;">
          <a href="#firstPage">퀵메뉴</a>
        </div>
        <div class="move_hat" style="position:absolute">
          <a href=#>하하핳</a>
        </div>
      </div>
      <div class="section" id="section1">
      </div>
      <div class="section" id="section2">
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">

$(document).ready(function() {
	$('#fullpage').fullpage({
		sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
		anchors: ['firstPage', 'secondPage', '3rdPage'],
		menu: '#menu',
		scrollingSpeed: 1000
	});

	setInterval(function(){
		$('.move_hat').animate({left:0},500).animate({left:100},500);
	},1000);

});
</script>

