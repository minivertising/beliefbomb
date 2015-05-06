<?
	include_once   "./header.php";
?>
<!------1. 아래의 코드를 HEAD 부분에 복사해 넣으세요 ------------------------------>

<SCRIPT type="text/javascript">
var currentsec=0;
var currentmin=0;
var currentmil=0;
var keepgoin=false;
function timer(){
	if(keepgoin){
		currentmil+=1;
		if (currentmil==100){
			currentmil=0;
			currentsec+=1;
		}
		if (currentsec==60){
			currentsec=0;
			currentmin+=1;
		}
		Strsec=""+currentsec;
		Strmin=""+currentmin;
		Strmil=""+currentmil;
		if (Strsec.length!=2){
			Strsec="0"+currentsec;
		}
		if (Strmin.length!=2){
			Strmin="0"+currentmin;
		}
		if (Strmil.length!=2){
			Strmil="0"+currentmil;
		}
		$("#timer_m").val(Strmin);
		$("#timer_s").val(Strsec);
		$("#timer_ms").val(Strmil);
		if (Strsec == 10)
		{
			alert("타임 오버!");
			$("#cap1").attr("onclick","");
		}else{
			setTimeout("timer()", 10);
		}
	}
}

function startover(){
	keepgoin=false;
	currentsec=0;
	currentmin=0;
	currentmil=0;
	Strsec="00";
	Strmin="00";
	Strmil="00";
}

</SCRIPT>
    <div class="contents">
      <div class="timediv">
        <center>
          <div>
            <INPUT TYPE="text" NAME="timer_m" id="timer_m" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:33px;">
            :
            <INPUT TYPE="text" NAME="timer_s" id="timer_s" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
            :
            <INPUT TYPE="text" NAME="timer_ms" id="timer_ms" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;">
            <!-- <INPUT TYPE="button" NAME="start" VALUE=" 출발 " ONCLICK="keepgoin=true;timer()">
            <INPUT TYPE="button" NAME="pause" VALUE=" 중지 " ONCLICK="keepgoin=false;">
            <INPUT TYPE="reset" NAME="reset" VALUE=" 다시 "> -->
          </div>
          <div>
            <div style="margin-top:200px">
              <img src="./images/body.png">
            </div>
            <div style="margin-top:-450px">
              <img src="./images/cap1.png" onclick="event_action();" id="cap1">
            </div>
          </div>
        </center>
      </div> <!--timediv-->
    </div> <!--contents-->


  </body>
</html>
<script type="text/javascript">
var bomb_cnt = 0;
function event_action()
{
	if (bomb_cnt > 50)
	{
		keepgoin=false;
		alert('완료');
		$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#cap1").attr("onclick","");

		return false;
	}

	if (bomb_cnt % 2 == 0)
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
	else
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
	//$('#cap1').jQueryTween({ to: { rotate: { z: -30 },translate: {y: -250 },rotate: { z: 30 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out },function() {
	//});
	if (keepgoin == false)
	{
		keepgoin=true;
		timer();
	}
	bomb_cnt = bomb_cnt + 1;

}

</script>
