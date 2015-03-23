<?
	include_once "./header.php";
?>
<div>
  <div>
    <div>
       <a href="localhost/beliefbomb/MOBILE/index.php" target="_blank">belif</a>
       <a href="http://www.belifcosmetic.com/" target="_blank">belif코스메틱</a>
    </div>
    <div>
      <iframe allowfullscreen="1" src="https://www.youtube.com/embed/7LB0Id5a5Jk" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
    </div>
    <div>
      <a href="#" onclick="view_m">제품보기 모이스쳐밤</a>
      <a href="#" onclick="view_a">제품보기 아쿠아밤</a>
    </div>
</div>
 </body>
</html>

	<script type="text/javascript">

	// quick menu
	var quickTop;
	$(window).scroll(function() {
		quickTop = ($(window).height()-$('.quickmenu').height()) /2;
		$('.quickmenu').stop().animate({top:$(window).scrollTop()+quickTop},400,'easeOutExpo');
		
	});

    // 유튜브 반복 재생
    var controllable_player,start, 
    statechange = function(e){
		if (e.data === 0)
		{
			$("#video_control").text('일시정지');
			controllable_player.seekTo(0); controllable_player.playVideo();
		}
		else if (e.data === 1)
		{
			//controllable_player.pauseVideo();
			$("#video_control").text('일시정지');
		}
		else if (e.data === 2)
		{
			//controllable_player.playVideo();
			$("#video_control").text('재생');
		}
		else if (e.data === 3)
		{
			//alert('4444');
		}
    	//controllable_player.playVideo(); 
    };
    function onYouTubeIframeAPIReady() {
		controllable_player = new YT.Player('ytplayer', {events: {'onStateChange': statechange}}); 
    }

    if(window.opera){
		addEventListener('load', onYouTubeIframeAPIReady, false);
    }
	setTimeout(function(){
    	if (typeof(controllable_player) == 'undefined'){
    		onYouTubeIframeAPIReady();
    	}
    }, 1000)


	$(window).resize(function(){
		var width = $(window).width();
		//var height = $(window).height();

		var youtube_height = (width / 16) * 9;
		$("#ytplayer").width(width);
		$("#ytplayer").height(youtube_height);
	});

	$(document).ready(function() {
		//처음 화면 크기에 따라 영상및 커버 크기 변경
		var width = $(window).width();
		var height = $(window).height();
		var youtube_width = width;
		$("#ytplayer").width(width);
		$(".cover_area").width($("#ytplayer").width());
		var youtube_height = (width / 16) * 9;
		$("#ytplayer").height(youtube_height);
		$(".cover_area").height($("#ytplayer").height());

		$("#video_control").click(function(){
			var control_txt	= $("#video_control").text();
			if (control_txt == "일시정지"){
				controllable_player.pauseVideo();
				return false;
			}else{
				controllable_player.playVideo(); 
				return false;
			}
		});

		var move_gift = ($(".block_top").height() +$(".navi_btn_block").height() +$("#ytplayer").height() + $(".sns_area").height()) * 1.1;
		var move_product = move_gift + $(".bg_cloud").height() * 1.1;
		$( '.view_event' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_gift},500);
			return false;
		} );

		$( '.view_product' ).click( function() {
			$( 'html, body' ).animate({ scrollTop: move_product},500);
			return false;
		} );


		// 퀵메뉴 기본 위치
		var quick_height	= $(window).height()/2;
		$('.quickmenu').css("top",quick_height);
/*
		setTimeout("auto_play();",2000);
*/
		// 체크박스 스타일 설정
		$('.popup_wrap input').on('ifChecked ifUnchecked', function(event){
			//alert(this.id);
		}).iCheck({
			checkboxClass: 'icheckbox_flat-blue',
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
			callbacks: {
				close: function() {
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;
	});
	</script>
