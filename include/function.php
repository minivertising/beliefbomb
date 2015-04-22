<?
	// 유입매체 정보 입력
	function BB_InsertTrackingInfo($media, $gubun)
	{
		global $_gl;
		global $my_db;

		$query		= "INSERT INTO ".$_gl['tracking_info_table']."(tracking_media, tracking_refferer, tracking_ipaddr, tracking_date, tracking_gubun) values('".$media."','".$_SERVER['HTTP_REFERER']."','".$_SERVER['REMOTE_ADDR']."',now(),'".$gubun."')";
		$result		= mysqli_query($my_db, $query);
	}

	// 난수 생성
	function BB_SerialNumber()
	{
		$randcode = md5( mktime() . $_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT'] ); ;
		return $randcode; // 난수 생성
	}

	// 이벤트 참여여부 체크(phone)
	function BB_memberChk($phone, $gift)
	{
		global $_gl;
		global $my_db;

		$query			= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_phone='".$phone."' AND mb_winner='".$gift."'";
		$result			= mysqli_query($my_db, $query);
		$memberCnt	= mysqli_num_rows($result);

		return $memberCnt;
	}

	// 이벤트 당일 전체 참여자수
	function BB_TodayMember()
	{
		global $_gl;
		global $my_db;

		$query			= "SELECT * FROM ".$_gl['member_info_table']." WHERE regdate like '%".date('Y-m-d')."%'";
		$result			= mysqli_query($my_db, $query);
		$memberCnt	= mysqli_num_rows($result);

		return $memberCnt;
	}

	// 회원정보 가져오기(serialnumer)
	function BB_check_serial($serial)
	{
		global $_gl;
		global $my_db;

		$query 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_serialnumber='".$serial."'";
		$result 	= mysqli_query($my_db, $query);
		while($data = mysqli_fetch_array($result))
			$info = $data;

		return $info;
	}

	function BB_shop_info($shop_idx)
	{
		global $_gl;
		global $my_db;

		$query 		= "SELECT * FROM ".$_gl['shop_info_table']." WHERE idx='".$shop_idx."'";
		$result 	= mysqli_query($my_db, $query);
		while($data = mysqli_fetch_array($result))
			$info = $data;

		return $info;
	}

	/* returns the shortened url */
	function get_bitly_short_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns expanded url */
	function get_bitly_long_url($url,$login,$appkey,$format='txt') {
		$connectURL = 'http://api.bit.ly/v3/expand?login='.$login.'&apiKey='.$appkey.'&shortUrl='.urlencode($url).'&format='.$format;
		return curl_get_result($connectURL);
	}

	/* returns a result form url */
	function curl_get_result($url) {
		$ch = curl_init();
		$timeout = 5;
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

	function make_surl($serial, $num)
	{
		global $_gl;
		global $my_db;

		$longurl	= "http://www.belifbomb.com/MOBILE/winner_coupon.php?serialnumber=".$serial;
		if ($num == "1")
		{
			$short_url = get_bitly_short_url($longurl,'kyhfan','R_11ea80ffc2bf4bbe8c848b761e71df8a');
		}else if ($num == "2"){
			$short_url = get_bitly_short_url($longurl,'kyhfan2','R_f7547b30052049679ee65de54c782e20');
		}else if ($num == "2"){
			$short_url = get_bitly_short_url($longurl,'kyhfan3','R_426adbe491a44aee82bd938e9c7f032e');
		}else if ($num == "2"){
			$short_url = get_bitly_short_url($longurl,'kyhfan4','R_6e2b8aac3f514271a5901cf546f9540a');
		}else{
			$short_url = get_bitly_short_url($longurl,'kyhfan5','R_089bb97a7ff8481da0e7b1600c6b6c0f');
		}

		return $short_url;
	}

	// LMS 발송 
	function send_lms($phone, $s_url)
	{
		global $_gl;
		global $my_db;

		$httpmethod = "POST";
		$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
		$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
		$contentType = "Content-Type: application/x-www-form-urlencoded";
	
		$response = sendRequest($httpmethod, $url, $clientKey, $contentType, $phone, $s_url);

		//echo("<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />");
		$json_data = json_decode($response, true);

		//print_r($json_data);
		/*
		받아온 결과값을 DB에 저장 및 Variation
		*/
		$query3 = "INSERT INTO ".$_gl['sms_info_table']."(send_phone, send_status, cmid, send_regdate) values('".$phone."','".$json_data['result_code']."','".$json_data['cmid']."','".date("Y-m-d H:i:s")."')";
		$result3 		= mysqli_query($my_db, $query3);

		$query2 = "UPDATE ".$_gl['winner_info_table']." SET mb_lms='Y' WHERE mb_phone='".$phone."'";
		$result2 		= mysqli_query($my_db, $query2);

		if ($json_data['result_code'] == "200")
			$flag = "Y";
		else
			$flag = "N";

		return $flag;
	}

	function sendRequest($httpMethod, $url, $clientKey, $contentType, $phone, $s_url) {

		//create basic authentication header
		$headerValue = $clientKey;
		$headers = array("x-waple-authorization:" . $headerValue);

		$params = array(
			'send_time' => '', 
			'send_phone' => '0800237007', 
			'dest_phone' => $phone, 
			//'dest_phone' => '01030033965', 
			//'dest_phone' => '01099111804', 
			//'dest_phone' => '01030885731', 
			//'dest_phone' => '01030033965', 
			'send_name' => '', 
			'dest_name' => '', 
			'subject' => '빌리프 - 폭탄크림',
			'msg_body' => "
[더페이스샵_하얀수분크림]
♥ 1만명 체험Kit 축! 당첨 ♥
아래 URL을 클릭하시면 모바일 쿠폰 페이지 확인이 가능합니다.
선택하신 매장에서 쿠폰을 제시하고 하얗고 촉촉한 블란클라우딩 하얀수분크림 10ml로 교환하세요!

▶ 하얀 수분 크림 10ml Kit 받기:
".$s_url."
▶ 교환기간 : 3/19 ~ 3/22

* 직원확인용 버튼 클릭시 제품교환이 불가합니다.
* 매장은 신청 시 선택한 매장만 가능하며, 변경이 불가능합니다.
* 불법적인 방법으로 이벤트에 참여하신 고객님은 이벤트 당첨 대상에서 제외되며, 당첨 이후에도 당첨이 취소될 수 있습니다.

★★ 추가 혜택
체험Kit에 당첨된 1만분께만 드리는 혜택! 하얀 수분 크림 구매 시 5,000원을 할인해드립니다.
▶ 쿠폰번호

▶ 쿠폰 사용기간 : 3/19 ~ 3/31

* 할인쿠폰은 면세점을 제외한 전국매장에서 사용가능(단, 이마트 매장은 5,000원 적립)
* 다른 행사와 중복 적용불가능(단, 구름쿠션 증정행사와 중복 가능)
* 오프라인 매장에서만 사용가능.
* 쿠폰 사용문의 
031-689-7506
"
		);

		//curl initialization
		$curl = curl_init();

		//create request url
		//$url = $url."?".$parameters;

		curl_setopt ($curl, CURLOPT_URL , $url);
		curl_setopt ($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt ($curl, CURLINFO_HEADER_OUT, true);
		curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);

		$response = curl_exec($curl);

		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$responseHeaders = curl_getinfo($curl, CURLINFO_HEADER_OUT);


		curl_close($curl);

		return $response;
	}

?>