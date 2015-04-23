

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

		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone1 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		$("#mb_phone1").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		//alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
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
			if (response == "Y")
			{
				$("#mb_chkphone").val(cel_phone);
				window.setTimeout("event_input1_data('" + mb_gift + "');",500);
			}
			else if (response == "D")
			{
				$.magnificPopup.open({
					items: {
						src: '#event_duply_pop',
					},
					type: 'inline',
					showCloseBtn : false
				}, 0);
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$('input').iCheck('uncheck');
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

function chk_input_mobile()
{
	var mb_name	= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var mb_gift		= $('#mb_gift').val();
	var cel_phone	= mb_phone1 + "-" + mb_phone2 + "-" + mb_phone3;
	var frm			= document.input_frm1;
	if (mb_name == "")
	{
		window.setTimeout("m_ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone1 == "")
	{
		window.setTimeout("m_ins_data();",500);

		$("#mb_phone1").focus();
		return false;
	}

	if (mb_phone2 == "")
	{
		window.setTimeout("m_ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}

	if (mb_phone3 == "")
	{
		window.setTimeout("m_ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if ($('#use_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		window.setTimeout("m_use_agree_data();",500);
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		window.setTimeout("m_privacy_agree_data();",500);
		return false;
	}

	if ($('#adver_agree').is(":checked") == false)
	{
		//alert("개인정보 활용 동의를 안 하셨습니다");
		window.setTimeout("m_adver_agree_data();",500);
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

			if (response == "Y")
			{
				//$("#mb_chkphone").val(cel_phone);
				//setTimeout("event_input1_data('" + mb_gift + "');",500);
				frm.action = "popup_input2.php";
				frm.submit();
			}
			else if (response == "D")
			{
				$.magnificPopup.open({
					items: {
						src: '#duplicate_alert',
					},
					type: 'inline',
					showCloseBtn : false
				}, 0);
				$("#mb_name").val("");
				$("#mb_phone1").val("010");
				$("#mb_phone2").val("");
				$("#mb_phone3").val("");
				$('input').iCheck('uncheck');
			}
			else
			{
				alert(response);
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
	if (event_triger == 0)
	{
		event_triger = 1;
		var mb_addr1			= $('#mb_addr1').val();
		var mb_addr2			= $('#mb_addr2').val();
		var mb_zipcode1		= $('#mb_zipcode1').val();
		var mb_zipcode2		= $('#mb_zipcode2').val();
		var mb_shop			= $('#mb_shop').val();
		var mb_idx				= $('#mb_idx').val();
		var mb_gift				= $("#mb_gift").val();
		var mb_chkphone	= $("#mb_chkphone").val();

		if (mb_gift == "cream")
		{
			if (mb_zipcode1 == "")
			{
				//alert('주소를 선택 안하셨습니다');
				setTimeout("ins_data_cream();",500);
				event_triger = 0;
				return false;
			}

			if (mb_zipcode2 == "")
			{
				//alert('주소를 선택 안하셨습니다');
				setTimeout("ins_data_cream();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr1 == "")
			{
				//alert('주소를 선택 안하셨습니다');
				setTimeout("ins_data_cream();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr2 == "")
			{
				//alert('주소를 선택 안하셨습니다');
				setTimeout("ins_data_cream();",500);
				event_triger = 0;
				return false;
			}
		}else{
			if (mb_addr1 == "")
			{
				//alert('매장 선택을 안 하셨습니다');
				setTimeout("ins_data_etc();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr2 == "")
			{
				//alert('매장 선택을 안 하셨습니다');
				setTimeout("ins_data_etc();",500);
				event_triger = 0;
				return false;
			}

			if (mb_shop == "")
			{
				//setTimeout("ins_data_etc();",500);
				alert('매장을 선택해 주세요.');
				event_triger = 0;
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
				if (response == "Y")
				{
					setTimeout("event_complete();",500);
					//$.magnificPopup.close();
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
}

function chk_input2_mobile()
{
	if (event_triger == 0)
	{
		event_triger = 1;
		var mb_addr1		= $('#mb_addr1').val();
		var mb_addr2		= $('#mb_addr2').val();
		var mb_zipcode1	= $('#mb_zipcode1').val();
		var mb_zipcode2	= $('#mb_zipcode2').val();
		var mb_shop			= $('#mb_shop').val();
		var mb_idx			= $('#mb_idx').val();
		var mb_gift			= $("#mb_gift").val();
		var mb_chkphone	= $("#mb_chkphone").val();

		if (mb_gift == "cream")
		{
			if (mb_zipcode1 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}

			if (mb_zipcode2 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr1 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr2 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}
		}else{
			if (mb_addr1 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}

			if (mb_addr2 == "")
			{
				window.setTimeout("m_ins_data();",500);
				event_triger = 0;
				return false;
			}

			if (mb_shop == "")
			{
				//window.setTimeout("m_ins_data();",500);
				alert('매장을 선택해 주세요.');
				event_triger = 0;
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
			beforeSend:function(){
				$("#input_div").hide();
				$("#loading_div").show();
			},
			success: function(response){
				$("#loading_div").hide();
				$("#input_div").show();
				if (response == "Y")
				{
					setTimeout("event_m_complete();",500);
					//location.href = "./index.php";
				}
				else if (response == "D")
				{
					alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
					location.href = "./index.php";
				}
				else
				{
					alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
					location.href = "./index.php";
				}
			}
		});
	}
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
	if (gift == "cream")
	{
		$.magnificPopup.open({
			items: {
				src: '#event_cream2_pop'
			},
			type: 'inline',
			showCloseBtn : false
		}, 0);
	}else if (gift == "kit"){
		$.magnificPopup.open({
			items: {
				src: '#event_kit2_pop'
			},
			type: 'inline',
			showCloseBtn : false,
			callbacks: {
				open: function() {
					$("#mb_gift").val(gift);
				}
			}
		}, 0);
	}else{
		$.magnificPopup.open({
			items: {
				src: '#event_miniature2_pop'
			},
			type: 'inline',
			showCloseBtn : false,
			callbacks: {
				open: function() {
					$("#mb_gift").val(gift);
				}
			}
		}, 0);
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

function ins_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_privacy_alert'
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: false
	}, 0);
}

function ins_data_cream()
{
	$.magnificPopup.open({
		items: {
			src: '#input_privacy_cream_alert'
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: false
	}, 0);
}

function ins_data_etc()
{
	$.magnificPopup.open({
		items: {
			src: '#input_privacy_etc_alert'
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: false
	}, 0);
}

function event_complete()
{
	$.magnificPopup.open({
		items: {
			src: '#event_complete_alert'
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: true
	}, 0);
}

function event_m_complete()
{
	$.magnificPopup.open({
		items: {
			src: '#event_complete_alert'
		},
		type: 'inline',
		showCloseBtn : false,
		closeOnBgClick: true
	}, 0);
}

function m_ins_data()
{
	$.magnificPopup.open({
		items: {
			src: '#info_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function m_use_agree_data()
{
	$.magnificPopup.open({
		items: {
			src: '#use_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function m_privacy_agree_data()
{
	$.magnificPopup.open({
		items: {
			src: '#privacy_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function m_adver_agree_data()
{
	$.magnificPopup.open({
		items: {
			src: '#adver_alert'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function event_check_data()
{
	$.magnificPopup.open({
		items: {
			src: '#event_check_alert',
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}
function event_winner_check()
{
	$.ajax({
		type:"POST",
		cache: false,
		data:{
			"exec"			: "winner_check"
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "N")
			{
				$.magnificPopup.open({
					items: {
						src: '#event_sorry_pop',
					},
					type: 'inline',
					showCloseBtn : false
				}, 0);
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

}

function event_action()
{
	if (bomb_cnt >= 25)
	{
		keepgoin=false;
		//$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#gage_bg").html("100%");
		$("#cap1").attr("onclick","");
		$("#body1").attr("onclick","");
		$("#game_title").hide();
		$("#game_ing").hide();
		$('#game_end').show(0, function(){
			window.setTimeout("event_check_data();",2000);
		});

	}

	var gage_per	= bomb_cnt*4;
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

function event_action_ie8()
{
	if (bomb_cnt >= 25)
	{
		keepgoin=false;
		//$('#cap1').jQueryTween({ to: { translate: {y: -180 },rotate: { z: -20 } }, yoyo: false, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#gage_bg").html("100%");
		$("#cap1").attr("onclick","");
		$("#body1").attr("onclick","");
		$("#game_title").hide();
		$("#game_ing").hide();
		$('#game_end').show(0, function(){
			window.setTimeout("event_check_data();",2000);
		});
	}

	var gage_per	= bomb_cnt*4;
	var gage_bg	= gage_per;
	if (gage_per > 98)
	{
		gage_bg = "98";
	}

	if (bomb_cnt % 2 == 0)
	{
		//$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: 20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#cap_img").rotate({
			angle: -20,
			center: ["0%", "100%"],
			animateTo:0
		});
		//$("#cap1").animate({top:-10},{duration:100,easing:'easeOutBounce'});
		$("#gage_bg").animate({width:gage_bg + "%"},{duration:100,easing:'easeOutBounce'});
		$("#gage_bg").html(gage_per + "%");
		$('#w1').show();
		$('#w1').animate({top:"250",left:"270"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w1').css({"top":"250px","left":"250px"});
		$('#w2_2').show();
		$('#w2_2').animate({top:"200",left:"-50"},{duration:100,easing:'easeOutBounce'}).fadeOut(400);
		$('#w2_2').css({"top":"220px","left":"-30px"});
	}else{
		//$('#cap1').jQueryTween({ to: { translate: {y: -80 },rotate: { z: -20 } }, yoyo: true, duration: 300, easing: TWEEN.Easing.Quartic.Out });
		$("#cap_img").rotate({
			angle: 20,
			center: ["100%", "0%"],
			animateTo:0
		});
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

function timer(param){
	if(keepgoin){
		if (param == "P")
			currentmil-=1;
		else
			currentmil-=10;
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
		if (param == "P")
		{
			//$("#game_num1").attr("src","images/popup/num" + sec1 + ".png");
			$("#game_num1").attr("src","images/popup/num0.png");
			$("#game_num2").attr("src","images/popup/num" + sec2 + ".png");
			$("#game_num3").attr("src","images/popup/num" + msec1 + ".png");
			$("#game_num4").attr("src","images/popup/num" + msec2 + ".png");
			if (Strsec == 0)
			{
				$("#game_num4").attr("src","images/popup/num0.png");
				window.setTimeout("game_restart();",500);
			}else{
				window.setTimeout("timer('P')", 10);
			}
		}else{
			//$("#game_num1").attr("src","img/popup/num" + sec1 + ".png");
			$("#game_num1").attr("src","img/popup/num0.png");
			$("#game_num2").attr("src","img/popup/num" + sec2 + ".png");
			$("#game_num3").attr("src","img/popup/num" + msec1 + ".png");
			$("#game_num4").attr("src","img/popup/num" + msec2 + ".png");
			if (Strsec == 0)
			{
				$("#game_num4").attr("src","img/popup/num0.png");
				window.setTimeout("game_restart();",500);
				window.removeEventListener('devicemotion', deviceMotionHandler, false);
			}else{
				setTimeout("timer('M')", 100);
			}
		}
		
	}
}

function timer_ie8(param){
	if(keepgoin){
		currentmil-=10;
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
		if (param == "P")
		{
			//$("#game_num1").attr("src","images/popup/num" + sec1 + ".png");
			$("#game_num1").attr("src","images/popup/num0.png");
			$("#game_num2").attr("src","images/popup/num" + sec2 + ".png");
			$("#game_num3").attr("src","images/popup/num" + msec1 + ".png");
			$("#game_num4").attr("src","images/popup/num" + msec2 + ".png");
			if (Strsec == 0)
			{
				$("#game_num4").attr("src","images/popup/num0.png");
				window.setTimeout("game_restart();",500);
			}else{
				window.setTimeout("timer_ie8('P')", 10);
			}
		}else{
			//$("#game_num1").attr("src","images/popup/num" + sec1 + ".png");
			$("#game_num1").attr("src","images/popup/num0.png");
			$("#game_num2").attr("src","img/popup/num" + sec2 + ".png");
			$("#game_num3").attr("src","img/popup/num" + msec1 + ".png");
			$("#game_num4").attr("src","img/popup/num" + msec2 + ".png");
			if (Strsec == 0)
			{
				$("#game_num4").attr("src","img/popup/num0.png");
			}else{
				setTimeout("timer('M')", 100);
			}
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
			timer("P");
		}
		$("#cap1").attr("onclick","event_action();");
		$("#body1").attr("onclick","event_action();");
		$("#gage_bg").css("width", "0%");
		$("#gage_bg").html("0%");
	});
}

function game_start_ie8()
{
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
			timer_ie8("P");
		}
		$("#cap1").attr("onclick","event_action_ie8();");
		$("#body1").attr("onclick","event_action_ie8();");
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
		closeOnBgClick: false,
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
		closeOnBgClick: false,
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
				currentsec=5;
				currentmil=100;
				keepgoin=false;
				$("#cap1").attr("onclick","");
				$("#body1").attr("onclick","");
				$("#game_num1").attr("src","images/popup/num0.png");
				$("#game_num2").attr("src","images/popup/num5.png");
				$("#game_num3").attr("src","images/popup/num0.png");
				$("#game_num4").attr("src","images/popup/num0.png");
				$("#gage_bg").css("width", "0%");
				$("#gage_bg").html("0%");
				$("#game_ing").show();
				$('#game_end').hide();
				$("#game_title").show();
				$(".btn_start").css("top","250px");
				$(".btn_start").show();
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
		closeOnBgClick: false,
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
				currentsec=5;
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

function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.belifbomb.com/?media=facebook'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "kakao"){
		Kakao.init('6a8c92a8f02eab6bc90b28fb96e4a56a');
		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  container: '#kakao-link-btn',
		  label: "지금 정해진 시간안에 폭탄 크림을 터트리면 빌리프의 다양한 선물이 쏟아집니다.\r\n\r\n더 많은 이벤트 자세히 보기",
		  image: {
			src: 'http://www.belifbomb.com/MOBILE/img/sns_image.png',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '수분폭탄, 즐거움이 터진다',
			url: 'http://www.belifbomb.com/?media=kakao' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
		  }
		});
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else{
		Kakao.init('6a8c92a8f02eab6bc90b28fb96e4a56a');
		// 로그인 창을 띄웁니다.
		Kakao.Auth.login({
			success: function() {

				// 로그인 성공시, API를 호출합니다.
				Kakao.API.request( {
					url : '/v1/api/story/linkinfo',
					data : {
						url : 'http://www.belifbomb.com/?media=story'
					}
				}).then(function(res) {
					// 이전 API 호출이 성공한 경우 다음 API를 호출합니다.
					return Kakao.API.request( {
						url : '/v1/api/story/post/link',
						data : {
						link_info : res,
							content:"지금 정해진 시간안에 폭탄 크림을 터트리면 빌리프의 다양한 선물이 쏟아집니다.\r\n\r\n더 많은 이벤트 자세히 보기"
						}
					});
				}).then(function(res) {
					return Kakao.API.request( {
						url : '/v1/api/story/mystory',
						data : { id : res.id }
					});
				}).then(function(res) {
					$.ajax({
						type   : "POST",
						async  : false,
						url    : "../main_exec.php",
						data:{
							"exec" : "insert_share_info",
							"media" : "story"
						}
					});
					alert("카카오스토리에 공유 되었습니다.");
				//}, function (err) {
				//	alert(JSON.stringify(err));
				});

			},
			//fail: function(err) {
			//	alert(JSON.stringify(err))
			//},
		});
	}
}

function show_menu()
{
	//$("#mobile_menu").show();
	//$( "#mobile_menu" ).toggle(menu_display);

	if ($("#mobile_menu").css("display") == "block")
	{
		$('#mobile_menu').animate({right:-200},300,'linear',function(){
			$("#mobile_menu").hide();
			$(".mask").fadeOut(300);
		});
	}else{
		$(".mask").width($(window).width());
		$(".mask").height($(window).height());
		$(".mask").fadeTo(1000, 0.6);

		$('#mobile_menu').css('right','-200px');
		// 이동위치값 지정
		var position = 0;
		$('#mobile_menu').show().animate({right:position},300,'linear');
	}
}

function chk_len(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").focus();
	}
}

function chk_len2(val)
{
	if (val.length == 4)
	{
		$("#mb_phone3").blur();
	}
}

function show_detail_cal(cal_date)
{
	var cal_date_arr	= cal_date.split("-");
	var weekday		= getWeekday(cal_date);
	$.ajax({
		type:"POST",
		data:{
			"exec"			: "select_cal",
			"cal_date"	: cal_date
		},
		url: "../main_exec.php",
		success: function(response){
			var cal_array = response.split("||");
			//var num = 0;
			var list_str = "<ul>";
			var event_img	= "";
			while (cal_array.length)
			{
				/*
				var cal_gubun_arr = cal_array.split("/");
				if (cal_gubun_arr[1] == "1")
					event_img = "<img src='images/icon_s_ban.png' alt=''/>";
				else
					event_img = "<img src='images/icon_s_car.png' alt=''/>";
				list_str += "<li>" + cal_date_arr[1] + "." + cal_date_arr[2] + "(" + weekday + ") " + cal_gubun_arr[0]+ event_img + "</li>";
				//num++;
			}
			list_str		+= "</ul>";
			*/
			$(".list_detail").html("<ul><li>" + cal_date_arr[1] + "." + cal_date_arr[2] + "(" + weekday + ") " + response+ "</li></ul>");
			//$(".list_detail").html(list_str);
		}
	});

}

function getWeekday(sDate) {
	var yy = parseInt(sDate.substr(0, 4), 10);
	var mm = parseInt(sDate.substr(5, 2), 10);
	var dd = parseInt(sDate.substr(8), 10);
	var d = new Date(yy,mm - 1, dd);
	var weekday=new Array(7);
	weekday[0]="일";
	weekday[1]="월";
	weekday[2]="화";
	weekday[3]="수";
	weekday[4]="목";
	weekday[5]="금";
	weekday[6]="토";
	return weekday[d.getDay()];
}

function show_desc_cal()
{
	$.ajax({
		type:"POST",
		data:{
			"exec"			: "select_desc_cal"
		},
		url: "../main_exec.php",
		success: function(response){
			$(".list_detail").html(response);
		}
	});

}
