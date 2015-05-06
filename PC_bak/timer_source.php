http://www.jasko.com/src/200109/stop_watch.html<HTML>
<HEAD>
<TITLE> JASKO Sample Script </TITLE>

<!------1. 아래의 코드를 HEAD 부분에 복사해 넣으세요 ------------------------------>

<SCRIPT LANGUAGE="Javascript1.2">
<!--
var currentsec=0;
var currentmin=0;
var currentmil=0;
var keepgoin=false;
function timer(){
if(keepgoin){
  currentmil+=1;                
   if (currentmil==10){        
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
  document.display.seconds.value=Strsec
  document.display.minutes.value=Strmin;
  document.display.milsecs.value=Strmil;
  setTimeout("timer()", 100);        
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

//---->
</SCRIPT>

</HEAD>

<BODY>

<CENTER>

<!------2. 아래의 방식으로 스크립트나 HTML 태그를 붙여 넣으세요 ------------------->

<FORM NAME="display" ONRESET="startover()">

<TABLE BORDER=10 BORDERCOLOR=red BGCOLOR=red>
<TR><TD BGCOLOR="#000000" COLSPAN=3>
<DIV STYLE="font-size:35px;굴림;color:#00ff00">
 <INPUT TYPE="text" NAME="minutes" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:33px;color:#00ff00;background:#000000">
:
<INPUT TYPE="text" NAME="seconds" VALUE="00" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:35px;color:#00ff00;background:#000000">
:
<INPUT TYPE="text" NAME="milsecs" VALUE="0" SIZE=3 STYLE="height:30px;border:0;font-size:30px;width:20px;color:#00ff00;background:#000000">
</TD>
</TR>
<TR>
<TD CELLPADDING=5>
<INPUT TYPE="button" NAME="start" VALUE=" 출발 " ONCLICK="keepgoin=true;timer()">
</TD><TD>
<INPUT TYPE="button" NAME="pause" VALUE=" 중지 " ONCLICK="keepgoin=false;">
</TD><TD>
<INPUT TYPE="reset" NAME="reset" VALUE=" 다시 ">
</TD></TR></TABLE>
</FORM>
</CENTER>

</BODY>
</HTML>
