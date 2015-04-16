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
	var cel_phone		= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;

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
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("use_agree_data('" + mb_gift + "');",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("privacy_agree_data('" + mb_gift + "');",500);
		return false;
	}

	if ($('#adver_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("adver_agree_data('" + mb_gift + "');",500);
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
				$("#mb_chkphone").val(cel_phone);
				setTimeout("event_input1_data('" + mb_gift + "');",500);
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
	var mb_addr1			= $('#mb_addr1').val();
	var mb_addr2			= $('#mb_addr2').val();
	var mb_zipcode1		= $('#mb_zipcode1').val();
	var mb_zipcode2		= $('#mb_zipcode2').val();
	var mb_shop			= $('#mb_shop').val();
	var mb_idx				= $('#mb_idx').val();
	var mb_gift				= $("#mb_gift").val();
	var mb_chkphone	= $("#mb_chkphone").val();

	if (mb_zipcode1)
	{
		if (mb_zipcode1 == "")
		{
			alert('주소를 선택 안하셨습니다');
			//setTimeout("shop_data();",500);
			return false;
		}

		if (mb_zipcode2 == "")
		{
			alert('주소를 선택 안하셨습니다');
			//setTimeout("shop_data();",500);
			return false;
		}

		if (mb_addr1 == "")
		{
			alert('주소를 선택 안하셨습니다');
			//setTimeout("shop_data();",500);
			return false;
		}

		if (mb_addr2 == "")
		{
			alert('주소를 선택 안하셨습니다');
			//setTimeout("shop_data();",500);
			return false;
		}
	}else{
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
	}



	$.ajax({
		type:"POST",
		data:{
			"exec"				: "insert_detail_event",
			"mb_zipcode1"	: mb_zipcode1,
			"mb_zipcode2"	: mb_zipcode2,
			"mb_addr1"			: mb_addr1,
			"mb_addr2"			: mb_addr2,
			"shop"				: mb_shop,
			"mb_gift"			: mb_gift,
			"mb_chkphone"	: mb_chkphone
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
				$("#mb_zipcode1").val("");
				$("#mb_zipcode2").val("");
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
				$("#mb_zipcode1").val("");
				$("#mb_zipcode2").val("");
				$('input').iCheck('uncheck');
				$.magnificPopup.close();
				$("#mb_chkphone").val(response);
			}
		}
	});
}

function use_agree_data(gift)
{
	$.magnificPopup.open({
		items: {
			src: '#use_agree_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function privacy_agree_data(gift)
{
	$.magnificPopup.open({
		items: {
			src: '#privacy_agree_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function adver_agree_data(gift)
{
	$.magnificPopup.open({
		items: {
			src: '#adver_agree_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function game_restart()
{
	$.magnificPopup.open({
		items: {
			src: '#gameover_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
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

function event_input1_data(gift)
{
	$.magnificPopup.open({
		items: {
			src: '#event_input1_pop'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
	
	if (gift == "cream")
	{
	}else if (gift == "kit"){
	}else{
	}
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
	{
		keepgoin=false;
		//$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#gage_bg").html("100%");
		$("#cap1").attr("onclick","");
		$("#body1").attr("onclick","");
		$("#game_title").hide();
		

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
					$("#input1_image").attr("src","images/popup/title_gift_1.png");
					$("#mb_gift").val("cream");
					$.magnificPopup.open({
						items: {
							src: '#event_input1_pop',
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
				}else if (response == "K"){
					$("#input1_image").attr("src","images/popup/title_gift_3.png");
					$("#mb_gift").val("kit");
					$.magnificPopup.open({
						items: {
							src: '#event_input1_pop',
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
				}else {
					$("#input1_image").attr("src","images/popup/title_gift_2.png");
					$("#mb_gift").val("miniature");
					$.magnificPopup.open({
						items: {
							src: '#event_input1_pop',
						},
						type: 'inline',
						showCloseBtn : false
					}, 0);
				}
			}
		});
		return false;
	}

	var gage_per	= bomb_cnt*2;
	var gage_bg	= gage_per;
	if (gage_per > 98)
	{
		gage_bg = "98";
	}

	if (bomb_cnt % 2 == 0)
	{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		//$("#gage_bg").css("width", gage_bg + "%");
		//$("#gage_bg").css("width", gage_bg + "%");
		$("#gage_bg").animate({width:gage_bg + "%"},{duration:100,easing:'easeOutBounce'});
		$("#gage_bg").html(gage_per + "%");
		$('#w1').show();
		$('#w1').animate({top:"250",left:"270"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1').css({"top":"250px","left":"250px"});
		$('#w2_2').show();
		$('#w2_2').animate({top:"200",left:"-50"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2_2').css({"top":"220px","left":"-30px"});
	}else{
		$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#gage_bg").animate({width:gage_bg + "%"},{duration:100,easing:'easeOutBounce'});
		$("#gage_bg").html(gage_per + "%");
		$('#w1_2').show();
		$('#w1_2').animate({top:"250",left:"-80"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1_2').css({"top":"250px","left":"-60px"});
		$('#w2').show();
		$('#w2').animate({top:"180",left:"260"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2').css({"top":"200px","left":"240px"});
	}
	//$('#cap1').jQueryTween({ to: { rotate: { z: -30 },translate: {y: -250 },rotate: { z: 30 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out },function() {
	//});
	/*
	if (keepgoin == false)
	{
		keepgoin=true;
		timer();
	}
	*/
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
		//$("#timer_s").val(Strsec);
		//$("#timer_ms").val(Strmil);
		var sec1		= Strsec.substring(0,1);
		var sec2		= Strsec.substring(1,2);
		var msec1	= Strmil.substring(0,1);
		var msec2	= Strmil.substring(1,2);
		$("#game_num1").attr("src","images/popup/num" + sec1 + ".png");
		$("#game_num2").attr("src","images/popup/num" + sec2 + ".png");
		$("#game_num3").attr("src","images/popup/num" + msec1 + ".png");
		$("#game_num4").attr("src","images/popup/num" + msec2 + ".png");
		
		if (Strsec == 0)
		{
			$("#game_num4").attr("src","images/popup/num0.png");
			//alert("타임 오버!");
			//$.magnificPopup.close();
			setTimeout("game_restart();",500);

			//$("#cap1").attr("onclick","");
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
	//$.magnificPopup.close();
	
	//setTimeout("game_start_data();",500);

	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "insert_event_member"
		},
		url: "../main_exec.php"
	});
	var position = 0;
	$('.btn_start').animate({top:position},500,'easeInBack', function(){
		$('.btn_start').fadeOut('fast');
		if (keepgoin == false)
		{
			keepgoin=true;
			timer();
		}
		$("#cap1").attr("onclick","event_action();");
		$("#body1").attr("onclick","event_action();");
		$("#gage_bg").css("width", "0%");
		$("#gage_bg").html("0%");
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
				$("#cap1").attr("onclick","");
				$("#body1").attr("onclick","");
				$("#game_num1").attr("src","images/popup/num1.png");
				$("#game_num2").attr("src","images/popup/num0.png");
				$("#game_num3").attr("src","images/popup/num0.png");
				$("#game_num4").attr("src","images/popup/num0.png");
				$("#gage_bg").css("width", "0%");
				$("#gage_bg").html("0%");
				$(".btn_start").css("top","250px");
				$(".btn_start").show();
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
				$("#body1").attr("onclick","event_action();");
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
