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
      <iframe allowfullscreen="1" src="https://www.youtube.com/embed/7LB0Id5a5Jk?rel=0&loof=1&amp;controls=0&amp;showinfo=0" frameborder="0" id="ytplayer" class="ytplayer"></iframe>
    </div>
    <div>
      <a href="#" data-mfp-src="#input_div" class="popup-with-zoom-anim" style="background:none;outline: none;">이벤트참여하기!</a>
    </div>
    <div>
      <a href="#" onclick="sns_share('facebook');">페북</a>
      <a href="#" onclick="sns_share('kakao');">까톡</a>
      <a href="#" onclick="sns_share('twitter');">트윗</a>
    </div>
    <div>
      <a href="#" onclick="view_mb">제품보기 모이스쳐밤</a>
      <a href="#" onclick="view_ab">제품보기 아쿠아밤</a>
    </div>
</div>
<!---------------------------------------참여자 정보 입력 팝업------------------------------------->
    <div id="input_div" class="zoom-anim-dialog mfp-hide" style="background:white; width:400px">
	  <div class="p_mid">
      <ul>
        <li>이름 : 
          <input type="text" name="mb_name" id="mb_name">
        </li>
      </ul>
      <ul>
        <li>전화번호 : 
          <select id="mb_phone1" name="mb_phone1" style="width:50px;height:20px;">
            <option>010</option>
            <option>011</option>
            <option>016</option>
            <option>017</option>
            <option>018</option>
            <option>019</option>
          </select> -
          <input type="text" size="6"name="mb_phone2" id="mb_phone2" maxlength="4" > -
          <input type="text" size="6"name="mb_phone3" id="mb_phone3" maxlength="4" >
        </li>
      </ul>
      <ul>
        <li>주소 : 
          <input type="text" name="mb_addr" id="mb_addr">
        </li>
      </ul>
          <div>
            <ul class="clearfix">
              <li class="in_check"><input type="checkbox" name="use_agree" id="use_agree"></li>
              <li class="in_check_label"><a href="#use_div" class="popup-with-zoom-anim">개인정보 수집 · 이용에 대한 동의</a></li>
            </ul>
            <ul class="clearfix">
              <li><input type="checkbox" name="privacy_agree" id="privacy_agree"></li>
              <li><a href="#privacy_div" class="popup-with-zoom-anim">개인정보의 취급 위탁 동의</a></li>
            </ul>
            <ul class="clearfix">
              <li><input type="checkbox" name="adver_agree" id="adver_agree"></li>
              <li><a href="#adver_div" class="popup-with-zoom-anim">광고성 정보 전송 동의</a></li>
            </ul>
          </div>
          <div>
            <a href="#" onclick="javascript:m_chk_input();return false;">확인</a>
          </div>
        </div><!--inner-->
    </div>
	</div>
<!---------------------------------------참여자 정보 입력 팝업------------------------------------->

<!--------------------------  개인정보 활용 약관 DIV ----------------------->
  <div id="use_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./popup_use_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 활용 약관 DIV ----------------------->
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
  <div id="privacy_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./popup_privacy_agree.php";
?>
    </div>
  </div>
<!--------------------------  개인정보 취급위탁동의 약관 DIV ----------------------->
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
  <div id="adver_div" class="popup_wrap zoom-anim-dialog mfp-hide">
    <div class="p_mid">
      <div class="block_close clearfix">
        <a href="#input_div" class="btn_close first-popup-link" onclick="javascript:close_look()"><img src="images/popup/pop_btn_close.png" /></a>
      </div>
<?
	include_once "./popup_adver_agree.php";
?>
    </div>
  </div>
<!--------------------------  광고성 정보 전송 동의 약관 DIV ----------------------->
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
	});
	</script>
