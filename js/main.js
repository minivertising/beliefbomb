function addr_change(addr1)
{
	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"addr1"    : addr1
		},
		url: "./ajax_addr.php",
		success: function(response){
			$("#mb_addr2").html(response);
		}
	});
}

function shop_change(idx)
{
	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"addr2_idx"    : idx
		},
		url: "./ajax_shop.php",
		success: function(response){
			if (response == "N")
			{
				alert("선택하신 지역에는 행사매장이 없습니다.");
			}else{
				$("#mb_shop").html(response);
				//$("#shop").html(response);
			}
		}
	});
}

function chk_input()
{
	var mb_name		= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var mb_gift			= $('#mb_gift').val();
	//var mb_addr1		= $('#mb_addr1').val();
	//var mb_addr2		= $('#mb_addr2').val();
	//var mb_shop		= $('#mb_shop').val();
	//var mb_idx			= $('#mb_idx').val();

	if (mb_name == "")
	{

		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone1 == "")
	{
		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);

		$("#mb_phone1").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		alert('개인정보 입력을 안 하셨습니다');
		//setTimeout("ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if ($('#use_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}

	if ($('#adver_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		//setTimeout("agree_data();",500);
		return false;
	}
	$.ajax({
		type:"POST",
		data:{
			"exec"				    : "insert_event",
			"mb_name"			    : mb_name,
			"mb_phone1"		    : mb_phone1,
			"mb_phone2"		    : mb_phone2,
			"mb_phone3"		    : mb_phone3,
			"mb_gift"		        : mb_gift
		},
		url: "../main_exec.php",
		success: function(response){
			alert(response);
			if (response == "Y")
			{
				//alert("참여해주셔서 감사합니다.\n당첨시 3월 19일에 모바일쿠폰을 보내드립니다.\n미당첨시 따로 메시지를 보내드리지 않습니다.");
				if (mb_gift == "cream")
					setTimeout("event_cream_data();",500);
				else
					setTimeout("event_kit_data();",500);
			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
		}
	});
}

function chk_input2()
{
	//var mb_addr1		= $('#mb_addr1').val();
	//var mb_addr2		= $('#mb_addr2').val();
	//var mb_shop		= $('#mb_shop').val();
	//var mb_idx			= $('#mb_idx').val();
	var mb_gift				= $("#mb_gift").val();

	if (mb_addr1 == "")
	{
		alert('매장 선택을 안 하셨습니다');
		//setTimeout("shop_data();",500);
		return false;
	}

	if (mb_addr2 == "")
	{
		alert('매장 선택을 안 하셨습니다');
		//setTimeout("shop_data();",500);
		return false;
	}

	if (mb_shop == "")
	{
		alert('매장 선택을 안 하셨습니다');
		//setTimeout("shop_data();",500);
		return false;
	}

	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_event",
			"mb_name"			: mb_name,
			"mb_phone1"		    : mb_phone1,
			"mb_phone2"		    : mb_phone2,
			"mb_phone3"		    : mb_phone3,
			"shop"				: mb_shop,
			"mb_idx"				: mb_idx
		},
		url: "../main_exec.php",
		success: function(response){
			alert(response);
			if (response == "Y")
			{
				alert("참여해주셔서 감사합니다.\n당첨시 3월 19일에 모바일쿠폰을 보내드립니다.\n미당첨시 따로 메시지를 보내드리지 않습니다.");
				$.magnificPopup.close();

				//setTimeout("game1_data();",1000);

			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#mb_addr1").val("");
				$("#mb_addr2").val("");
				$("#mb_shop").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#mb_addr1").val("");
				$("#mb_addr2").val("");
				$("#mb_shop").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
			}
		}
	});
}


function game1_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_game1_pop'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function event_cream_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_cream2_pop'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function event_kit_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_kit2_pop'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function event_action()
{
	if (bomb_cnt > 10)
	//if (bomb_cnt > 50)
	{
		keepgoin=false;
		$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#cap1").attr("onclick","");

		$.ajax({
			type:"POST",
			cache: false,
			data:{
				"exec"			: "winner_check"
			},
			url: "../main_exec.php",
			success: function(response){
				alert(response);
				if (response == "N")
				{
					alert("당첨되지 않으셨습니다. 다시 응모해 주세요.");
					$.magnificPopup.close();
				}else if (response == "Y"){
					$.magnificPopup.open({
						items: {
							src: '#event_cream_pop',
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
				}else{
					$.magnificPopup.open({
						items: {
							src: '#event_kit_pop',
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
				}
			}
		});

		return false;
	}

	if (bomb_cnt % 2 == 0)
	{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$('#w1').show();
		$('#w1').animate({top:"230",left:"420"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1').css({"top":"250px","left":"400px"});
		$('#w2_2').show();
		$('#w2_2').animate({top:"200",left:"20"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2_2').css({"top":"220px","left":"40px"});
	}else{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$('#w1_2').show();
		$('#w1_2').animate({top:"250",left:"30"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1_2').css({"top":"270px","left":"30px"});
		$('#w2').show();
		$('#w2').animate({top:"180",left:"410"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2').css({"top":"200px","left":"430px"});
	}
	//$('#cap1').jQueryTween({ to: { rotate: { z: -30 },translate: {y: -250 },rotate: { z: 30 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out },function() {
	//});
	if (keepgoin == false)
	{
		keepgoin=true;
		timer();
	}
	bomb_cnt = bomb_cnt + 1;

}

function timer(){
	if(keepgoin){
		currentmil-=1;
		if (currentmil==0){
			currentmil=100;
			currentsec-=1;
		}
		Strsec=""+currentsec;
		Strmil=""+currentmil;
		if (Strsec.length!=2){
			Strsec="0"+currentsec;
		}
		if (Strmil.length!=2){
			Strmil="0"+currentmil;
		}
		$("#timer_s").val(Strsec);
		$("#timer_ms").val(Strmil);
		if (Strsec == 0)
		{
			$("#timer_ms").val("00");
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

function game_start()
{
	$.magnificPopup.close();

	setTimeout("game_start_data();",500);

	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "insert_event_member"
		},
		url: "../main_exec.php"
	});

}

function show_qrcode()
{
	$.magnificPopup.open({
		items: {
			src: '#qrcode_pop'
		},
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
		closeOnBgClick: true,
		callbacks: {
			open: function() {
				$('#qrcode_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#qrcode_pop').show().animate({top:position},{duration:1000,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			}
		}
	}, 0);
}

function game_ready()
{
	$.magnificPopup.open({
		items: {
			src: '#event_game1_pop'
		},
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
		closeOnBgClick: true,
		callbacks: {
			open: function() {
				$('#event_game1_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#event_game1_pop').show().animate({top:position},{duration:1000,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			},
			close: function() {
				bomb_cnt = 0;
				currentsec=9;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","event_action();");
				$("#timer_s").val("10");
				$("#timer_ms").val("00");
				$("#mb_name").val();
				$("#mb_phone1").val();
				$("#mb_phone2").val();
				$("#mb_phone3").val();
				$("#mb_addr1").val();
				$("#mb_addr2").val();
				$("#mb_shop").val();
				$('input').iCheck('uncheck');
			}
		}
	}, 0);
	
}
function game_start_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_game2_pop'
		},
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
		closeOnBgClick: true,
		callbacks: {
			open: function() {
				$('#event_game2_pop').css('top','-890px');
				// 이동위치값 지정
				var position = 0;
				$('#event_game2_pop').show().animate({top:position},{duration:100,easing:'easeOutBounce'});
				//window.scrollTo(0,0);
			},
			close: function() {
				bomb_cnt = 0;
				currentsec=9;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","event_action();");
				$("#timer_s").val("10");
				$("#timer_ms").val("00");
				$("#mb_name").val("");
				$("#mb_phone1").val("");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$("#mb_addr1").val("");
				$("#mb_addr2").val("");
				$("#mb_shop").val("");
				$('input').iCheck('uncheck');
			}
		}
	}, 0);
	
}
