<?
	include_once "./header.php";
?>
<body class="bg_blue">
  <div class="wrap_page popup cal">
    <div class="block_close clearfix">
      <a href="index.php" class="btn_close"><img src="img/popup/btn_close.png" /></a>
    </div>
    <div class="content">
      <div class="inner">
        <div class="title">
          <img src="img/popup/title_p_cal.png" alt=""/>
        </div>
        <div class="cal_block">
          <div class="t_mon clearfix">
            <div class="inner">
              <div class="arrow"><a href="#" onclick="prev_m_cal();"><img src="img/popup/cal_arrow_left.png" alt=""/> </a></div>
              <div class="m_num">4월</div>
              <div class="arrow right"><a href="#" onclick="next_m_cal();"><img src="img/popup/cal_arrow_right.png" alt=""/></a></div>
            </div>
          </div>
          <div class="list_cal" id="list_cal4">
            <ul>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.03(금) Flagship store(압구정/가로수길)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.04(토) Flagship store(압구정/가로수길)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.05(일) Flagship store(압구정/가로수길)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.10(금) U-Plex(현대백화점 신촌점)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.11(토) U-Plex(현대백화점 신촌점)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.12(일) U-Plex(현대백화점 신촌점)</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.13(월) 여의도 벚꽃축제</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.17(금) 현대백화점 충청점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.18(토) 현대백화점 충청점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.19(일) 현대백화점 충청점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.25(토) 두타광장</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">04.26(일) 두타광장</span>
              </li>
            </ul>
          </div>
          <div class="list_cal" id="list_cal5" style="display:none">
            <ul>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.01(금) 신세계백화점 인천점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.02(토) 신세계백화점 인천점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.03(일) 신세계백화점 인천점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.08(금) 롯데백화점 울산점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.09(토) 롯데백화점 울산점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.10(일) 롯데백화점 울산점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.12(화) 세종대학교</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.13(수) 세종대학교</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.15(금) 롯데백화점 대전점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.16(토) 롯데백화점 대전점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.17(일) 롯데백화점 대전점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">05.20(수) 홍익대학교</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">05.23(토) 서울재즈 페스티벌</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">05.24(일) 서울재즈 페스티벌</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">05.25(월) 서울재즈 페스티벌</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.27(수) 숙명여자대학교</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.29(금) 롯데백화점 수원점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.30(토) 롯데백화점 수원점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">05.31(일) 롯데백화점 수원점</span>
              </li>
            </ul>
          </div>
          <div class="list_cal" id="list_cal6" style="display:none">
            <ul>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.05(금) 롯데백화점 부산 서면점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.06(토) 롯데백화점 부산 서면점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.07(일) 롯데백화점 부산 서면점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">06.12(금) UMF</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">06.13(토) UMF</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">06.20(토) 레인보우 아일랜드</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="icon"><img src="img/popup/cal_icon_mc.png" width="20" alt=""/></span>
                <span class="txt">06.21(일) 레인보우 아일랜드</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.26(금) 신세계백화점 부산 센텀시티점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.27(토) 신세계백화점 부산 센텀시티점</span>
              </li>
              <li class="clearfix">
                <span class="icon"><img src="img/popup/cal_icon_car.png" width="20" alt=""/></span>
                <span class="txt">06.28(일) 신세계백화점 부산 센텀시티점</span>
              </li>
            </ul>
          </div>
        </div>
      </div><!--inner-->
    </div>
  </div><!--wrap_page popup-->
</body>
</html>
<script type="text/javascript">
var cal_cnt	= 0;
function prev_m_cal()
{
	if (cal_cnt == 0)
	{
		alert("이벤트 일정이 없습니다.");
	}else if (cal_cnt == 1){
		$("#list_cal5").fadeOut("fast", function(){
			$("#list_cal4").fadeIn("slow");
			$(".m_num").html("4월");
		});
		cal_cnt = 0;
	}else if (cal_cnt == 2){
		$("#list_cal6").fadeOut("fast", function(){
			$("#list_cal5").fadeIn("slow");
			$(".m_num").html("5월");
		});
		cal_cnt = 1;
	}
}

function next_m_cal()
{
	if (cal_cnt == 0)
	{
		$("#list_cal4").fadeOut("fast", function(){
			$("#list_cal5").fadeIn("slow");
			$(".m_num").html("5월");
		});
		cal_cnt = 1;
	}else if (cal_cnt == 1){
		$("#list_cal5").fadeOut("fast", function(){
			$("#list_cal6").fadeIn("slow");
			$(".m_num").html("6월");
		});
		cal_cnt = 2;
	}else if (cal_cnt == 2){
		alert("추후 공개될 예정입니다..");
	}
}
</script>