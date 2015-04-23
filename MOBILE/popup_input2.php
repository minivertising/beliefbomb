<?
	include_once "./header.php";
	$phone	= $_POST['mb_phone1']."-".$_POST['mb_phone2']."-".$_POST['mb_phone3'];

	// 주소 바로 입력시 index로 이동
	if ( !isset($_SERVER['HTTP_REFERER'])) { 
		echo "<script>location.href='index.php'</script>"; 
		exit; 
	} 
	

?>
<body class="bg_blue">
  <input type="hidden" name="mb_gift" id="mb_gift" value="<?=$_POST['mb_gift']?>">
  <input type="hidden" name="mb_chkphone" id="mb_chkphone" value="<?=$phone?>">
<!-------------------- cream -------------------->
<?
	if ($_POST['mb_gift'] == "cream")
	{
?>
  <div class="wrap_page popup" id="input_div">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_input_winner_1_1.png" alt=""/>
        </div>
        <div class="input_block">
          <ul class="clearfix" style="bottom:-12px">
            <li class="t_name"><img src="img/popup/txt_label_address.png" alt=""/></li>
            <li class="input_txt phone">
              <div class="inner clearfix">
                <div class="add_num"><input type="text" name="mb_zipcode1" id="mb_zipcode1" readonly></div>
                <div class="add_num"><input type="text" name="mb_zipcode2" id="mb_zipcode2" readonly></div>
                <div class="btn_add_num"><a href="#" onclick="show_post();return false;"><img src="img/popup/btn_add_num.png" alt=""/></a></div>
              </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
            <li class="input_txt name"><input type="text" name="mb_addr1" id="mb_addr1"></li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
            <li class="input_txt name"><input type="text" name="mb_addr2" id="mb_addr2"></li>
          </ul>
        </div>
        <div class="txt_notice img_100"><img src="img/popup/txt_notice_wrong_address.png" alt=""/></div>
        <div class="btn_block comp">
          <a href="#" onclick="chk_input2_mobile()" style="outline:none"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div id="loading_div" style="position:absolute;width:100%;height:100%;background:white;display:none">
    <div style="position:absolute;top:50%;left:50%;margin-top:-64px;margin-left:-64px;height:500px">
      <img src="img/loading.gif">
    </div>
  </div>
<!-------------------- cream -------------------->
<?
	}else{
?>
<!-------------------- kit & miniature -------------------->
  <div class="wrap_page popup" id="input_div">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="title">
<?
		if ($_POST['mb_gift'] == "kit")
		{
?>
          <img src="img/popup/title_input_winner_3_3.png" alt=""/>
<?
		}else{
?>
          <img src="img/popup/title_input_winner_2_2.png" alt=""/>
<?
		}
?>
        </div>
        <div class="input_block">
          <ul class="clearfix">
            <li class="t_name"><img src="img/popup/txt_label_store.png" alt=""/></li>
            <li class="input_txt phone">
              <div class="inner clearfix">
                <div class="selec">
                  <select name="mb_addr1" id="mb_addr1" onchange="addr_change(this.value)">
                    <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_level='1'";
	$result 	= mysqli_query($my_db, $query);
	while($addr1_data = @mysqli_fetch_array($result))
	{
?>
                    <option value="<?=$addr1_data['addr_sido']?>"><?=$addr1_data['addr_sido']?></option>
<?
	}
?>
                  </select>
                </div>
                <div class="selec">
                  <select name="mb_addr2" id="mb_addr2" onchange="shop_change(this.value)">
                    <option value="">선택하세요</option>
                  </select>
                </div>
              </div>
            </li>
          </ul>
          <ul class="clearfix">
            <li class="t_name"></li>
            <li class="input_txt storein">
              <select name="mb_shop" id="mb_shop">
                <option value="">선택하세요</option>
              </select>
            </li>
          </ul>
        </div>
        <div class="btn_block comp">
          <a href="#" onclick="chk_input2_mobile()" style="outline:none"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div>
  <div id="loading_div" style="position:absolute;width:100%;height:100%;background:white;display:none">
    <div style="position:absolute;top:50%;left:50%;margin-top:-64px;margin-left:-64px;height:500px">
      <img src="img/loading.gif">
    </div>
  </div>
<?
	}
?>
<!-------------------- kit & miniature -------------------->

  <!------------------- 개인정보 입력 alert ------------------->
  <div id="info_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="#" class="btn_close" onclick="$.magnificPopup.close();"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/txt_info.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="$.magnificPopup.close();"><img src="img/popup/btn_confirm.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
  <!------------------- 개인정보 입력 alert ------------------->

  <!------------------- 이벤트 당첨 완료 alert ------------------->
  <div id="event_complete_alert" class="wrap_page popup alert popup_wrap zoom-anim-dialog mfp-hide">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner alert">
        <div class="title">
          <img src="img/popup/pop_title_thanks.png" alt=""/>
        </div>
        <div class="btn_block">
          <a href="#" onclick="sns_share('facebook');"><img src="img/popup/btn_share.png" alt=""/></a><a href="index.php"><img src="img/popup/btn_confirm2.png" alt=""/></a>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->     
  <!------------------- 이벤트 당첨 완료 alert ------------------->

  <!--  주소검색 DIV 시작  -->
    <div id="post_div" style="display:none;position:fixed;width:100%;height:100%;top:0px;overflow:hidden;-webkit-overflow-scrolling:touch;z-index:99998">
      <img src="//i1.daumcdn.net/localimg/localimages/07/postcode/320/close.png" id="btnCloseLayer" style="cursor:pointer;position:absolute;right:0px;top:0px;z-index:99999" onclick="closeDaumPostcode()" alt="닫기 버튼">
    </div>
  <!--  주소검색 DIV 끝  -->

</body>
</html>
<script src="http://dmaps.daum.net/map_js_init/postcode.js"></script>
<script type="text/javascript">
var event_triger = 0;
$(document).ready(function() {
	// 체크박스 스타일 설정
	$('.wrap_page input').on('ifChecked ifUnchecked', function(event){
		//alert(this.id);
	}).iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_square-blue',
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
		closeOnBgClick: false
	});

	$('.first-popup-link').magnificPopup({
		closeBtnInside:true
	});

	var magnificPopup = $.magnificPopup.instance;

});

function closeDaumPostcode() {
	// iframe을 넣은 element를 안보이게 한다.
	element.style.display = 'none';
}

	// 우편번호 찾기 iframe을 넣을 element
	var element = document.getElementById('post_div');

	function showDaumPostcode() {
		new daum.Postcode({
			oncomplete: function(data) {
				// 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
				// 우편번호와 주소 및 영문주소 정보를 해당 필드에 넣는다.
				document.getElementById('mb_zipcode1').value = data.postcode1;
				document.getElementById('mb_zipcode2').value = data.postcode2;
				document.getElementById('mb_addr1').value = data.address;
				//document.getElementById('addr2').focus();
				// iframe을 넣은 element를 안보이게 한다.
				element.style.display = 'none';
			},
			width : '100%',
			height : '100%'
		}).embed(element);

		// iframe을 넣은 element를 보이게 한다.
		//element.style.display = 'block';
	}


function show_post()
{
	$("#post_div").show();

	showDaumPostcode();
}

</script>