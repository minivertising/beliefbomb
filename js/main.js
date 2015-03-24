
function sns_share(media)
{
	if (media == "facebook")
	{
		var newWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('http://www.belifcosmetic.com/'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if (media == "twitter")
	{
		var newWindow = window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent("빌리프 이벤트") + '&url='+ encodeURIComponent('http://www.belifcosmetic.com'),'sharer','toolbar=0,status=0,width=600,height=325');
		$.ajax({
			type   : "POST",
			async  : false,
			url    : "../main_exec.php",
			data:{
				"exec" : "insert_share_info",
				"media" : media
			}
		});
	}else if(media == "kakao") {
		Kakao.init('62027fc7fd5be42191c4c2e4787386ca');

		// 카카오톡 링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
		Kakao.Link.createTalkLinkButton({
		  label: "서장훈이 화장품 CF를?! \n<아니 아니, 그게 아니고~> 전격 공개!\n 건조한 피부에 봄비같은 하얀 수분 크림 출시!\n 지금 10ml Kit도 신청하세요!",
		  image: {
			src: 'http://www.thefaceshopclouding.co.kr/PC/images/sns_kt.jpg',
			width: '1200',
			height: '630'
		  },
		  webButton: {
			text: '더페이스샵',
			url: 'http://www.thefaceshopclouding.co.kr/?media=K01' // 앱 설정의 웹 플랫폼에 등록한 도메인의 URL이어야 합니다.
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

	}
}
function auto_play()
{
	$("#cover_image").hide();
	controllable_player.seekTo(0);
	controllable_player.playVideo(); 
}

// 메뉴 이동
function goPosition(to){
	scrollReady = false;
	$("html, body").stop().animate(
		{scrollTop: to},
		500,
		'easeOutExpo',
		function(){scrollReady = true;}
	);
}

//참가하기
function event_join()
{
	$("#input_div").show();
}

function inputfrm_data()
{
	$.magnificPopup.open({
		items: {
			src: '#input_div'
		},
		type: 'inline',
		showCloseBtn : false
	}, 0);
}

function m_chk_input()
{
	var mb_name	= $('#mb_name').val();
	var mb_phone1	= $('#mb_phone1').val();
	var mb_phone2	= $('#mb_phone2').val();
	var mb_phone3	= $('#mb_phone3').val();
	var mb_addr		= $('#mb_addr').val();

	if (mb_name == "")
	{

		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);

		$("#mb_name").focus();
		//$("#input_alert").show();
		return false;
	}

	if (mb_phone2 == "" || mb_phone2.length <3)
	{
		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone2").focus();
		return false;
	}
	

	if (mb_phone3 == "" || mb_phone3.length<4)
	{
		alert('개인정보 입력을 안 하셨습니다');
		setTimeout("ins_data();",500);
		$("#mb_phone3").focus();
		return false;
	}

	if (mb_addr == "")
	{
		alert('주소를 잘못 입력 하셨습니다.');
		setTimeout("ins_data();",500);
		$("#mb_addr").focus();
		return false;
	}

	if ($('#privacy_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
		return false;
	}

	if ($('#clause_agree').is(":checked") == false)
	{
		alert("개인정보 활용 동의를 안 하셨습니다");
		setTimeout("agree_data();",500);
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
			"shop"				: shop
		},
		url: "../main_exec.php",
		success: function(response){
			if (response == "Y")
			{
				//alert("참여해주셔서 감사합니다.\n당첨시 3월 19일에 모바일쿠폰을 보내드립니다.\n미당첨시 따로 메시지를 보내드리지 않습니다.");
				//$.magnificPopup.close();

				setTimeout("ok_data();",1000);

			}
			else if (response == "D")
			{
				alert("이미 이벤트에 응모하셨습니다.\n다음에 다시 참여해 주세요.");
				if (iPhoneYN == "Y")
				{
					location.href="index.php";
				}else{
					window.close();
				}
			}
			else
			{
				alert("이벤트 참여자 수가 많아 참여가 지연되고 있습니다.\n다시 응모해 주시기 바랍니다.");
				if (iPhoneYN == "Y")
				{
					location.href="index.php";
				}else{
					window.close();
				}
			}
		}
	});

}

function open_event()
{
	$("#input_div").show();
	$("#gift_div").hide();
}

function open_use()
{
	$("#use_div").show();
}

function open_privacy()
{
	$("#privacy_div").show();
}

function open_adver()
{
	$("#adver_div").show();
}

function open_gift()
{
	$("#gift_div").show();
	$("#input_div").hide();
}

function close_input()
{
	//$("#input_div").hide();
	$("#mb_name").val("");
	$("#mb_phone1").val("010");
	$("#mb_phone2").val("");
	$("#mb_phone3").val("");
	$("#addr1").val("");
	$("#addr2").val("");
	$("#shop").val("");
	$('input').iCheck('uncheck');
	$.magnificPopup.close();
}

function close_movie()
{
	$.magnificPopup.close();
}

function close_ok()
{
	//$("#input_div").hide();
	$.magnificPopup.close();
	close_input();
}

function close_gift()
{
	//$("#gift_div").hide();
	$.magnificPopup.close();
}

function close_map()
{
	$("#map_div").hide();
}

function close_look()
{
	$("#look_div").hide();
}