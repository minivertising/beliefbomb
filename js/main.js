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
	var mb_addr1		= $('#mb_addr1').val();
	var mb_addr2		= $('#mb_addr2').val();
	var mb_shop		= $('#mb_shop').val();
	var mb_idx			= $('#mb_idx').val();

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
			"exec"				: "update_event",
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
