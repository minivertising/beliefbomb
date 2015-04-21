<?
	include_once "./header.php";
?>
  <body>
<div class="menu clearfix">
   <a href="www.belifcosmetic.com/mobile" class="logo" target="_blank"><img src="img/logo.png" width="56" alt=""/></a>
   <a href="#" class="menu_ham"  onclick="show_menu()"><img src="img/menu_ham.png" width="26" alt=""/></a>
</div>
<div>
  <div>
    <div class="block_game">
      <div class="inner_ele">
        <div class="btn_block">
          <a href="motion_game.php" style="background:none;outline: none;">
            <img src="img/btn_game_go.png" alt=""/>
          </a>
        </div>
      </div>   
      <div class="bg_top img_wrap"><img src="img/bg_top.png" alt=""/></div>   
    </div>
    <div class="offevent1">
      <div class="inner_ele">
        <div class="btn_block">
          <a href="popup_cal.php"><img src="img/btn_cal.png" alt=""/></a>
        </div>
      </div>    
      <div class="bg_offevnet1 img_wrap"><img src="img/bg_offevent1.png" alt=""/></div>  
    </div>
    <div class="offevent2">
      <div class="inner_ele">
        <div class="btn_block">
          <a href="popup_cal.php"><img src="img/btn_cal.png" alt=""/></a>
        </div>
      </div>    
      <div class="bg_offevnet2 img_wrap"><img src="img/bg_offevent2.png" alt=""/></div>  
    </div>
    <div class="mbom1">
      <div class="inner_ele">
        <div class="btn_block">
          <a href="http://m.belifcosmetic.com/mobile_app/product/detail.jsp?pid=ACM04550" target="_blank"><img src="img/btn_detail_m.png" alt=""/></a>
        </div>
      </div>    
      <div class="bg_mbom img_wrap"><img src="img/bg_mbom1.png" alt=""/></div>  
    </div>
    <div class="abom1">
      <div class="inner_ele">
        <div class="btn_block">
          <a href="http://m.belifcosmetic.com/mobile_app/product/detail.jsp?pid=ACM04551" target="_blank"><img src="img/btn_detail_a.png" alt=""/></a>
        </div>
      </div>    
      <div class="bg_abom img_wrap"><img src="img/bg_abom1.png" alt=""/></div>  
    </div>
    <div class="footer img_wrap">
      <img src="img/footer.png"  alt=""/>
    </div>
  </div>
  <div id="mobile_menu" class="mobile_menu">
    <ul>
      <li><a href="motion_game.php"><img src="img/gnb_game.png"  alt=""/></a></li>
      <li><a href="#" onclick="screen_move('event');"><img src="img/gnb_event.png"  alt=""/></a></li>
      <li class="cal"><a href="popup_cal.php"><img src="img/gnb_cal.png"  alt=""/></a></li>
      <li class="pd"><a href="#" onclick="screen_move('product');"><img src="img/gnb_pd.png"  alt=""/></a></li>
      <li class="clearfix last">
        <a href="#" class="left" onclick="sns_share('facebook')"><img src="img/gnb_fb.png"  alt=""/></a>
        <a href="#" onclick="sns_share('kakao')"><img src="img/gnb_kt.png"  alt=""/></a>
      </li>
    </ul>
  </div>
  <div class="mask"></div>
 </body>
</html>

	<script type="text/javascript">


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
					/*$("#mb_name").val("");
					$("#mb_phone").val("");
					$('input').iCheck('uncheck');
					$("#postcode1").val("");
					$("#postcode2").val("");
					$("#addr1").val("");
					$("#addr2").val("");
					$("#post_div").hide();*/
				}
			}
		});

		$('.first-popup-link').magnificPopup({
			closeBtnInside:true
		});

		var magnificPopup = $.magnificPopup.instance;

		$(".mask").click(function(){
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(300);
			});
		});

	});

	function screen_move(param)
	{
		if (param == "event")
		{
			//$( 'html, body' ).animate({ scrollTop: $(".block_game").height()},500);
			//$( 'html, body' ).animate({ scrollTop: $(".bg_top").height()},500);
			
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(100);
				$( 'html, body' ).animate({ scrollTop: $(".bg_top").height()},500);
			});
			
		}else{
			$('#mobile_menu').animate({right:-200},300,'linear',function(){
				$("#mobile_menu").hide();
				$(".mask").fadeOut(100);
				$( 'html, body' ).animate({ scrollTop: $(".bg_top").height() + $(".offevent1").height() + $(".offevent2").height()},500);
			});
		}
	}
	</script>
