<input type="button" value="문자발송" onclick="send_lms()">
<?
	// LMS 발송 
	function send_lms()
	{
		$httpmethod = "POST";
		$url = "http://api.openapi.io/ppurio/1/message/lms/minivertising";
		$clientKey = "MTAyMC0xMzg3MzUwNzE3NTQ3LWNlMTU4OTRiLTc4MGItNDQ4MS05NTg5LTRiNzgwYjM0ODEyYw==";
		$contentType = "Content-Type: application/x-www-form-urlencoded";
	
		$response = sendRequest($httpmethod, $url, $clientKey, $contentType);

		$json_data = json_decode($response, true);

		if ($json_data['result_code'] == "200")
			$flag = "Y";
		else
			$flag = "N";

		echo "<script>alert('".$flag."');</script>";
		return $flag;
	}

	function sendRequest($httpMethod, $url, $clientKey, $contentType) {

		//create basic authentication header
		$headerValue = $clientKey;
		$headers = array("x-waple-authorization:" . $headerValue);

		$params = array(
			'send_time' => '', 
			'send_phone' => '0800237007', 
			'dest_phone' => '01030033965', 
			//'dest_phone' => '01030033965', 
			'send_name' => '', 
			'dest_name' => '', 
			'subject' => 'water bomb! bomb! 빌리프 수분폭탄 쿠폰',
			'msg_body' => "
빌리프 수분폭탄 이벤트에 당첨되신 것을 축하드립니다.

빌리프 폭탄크림을 통해 팡팡! 터지는 촉촉함을 피부로 직접 경험해보세요.

▶ 쿠폰 받기:
testurl
▶ 교환 기간:
4/28 ~ 6/14

* 지정하신 오프라인 매장에서만 사용가능합니다.
* 6/14이후 쿠폰 교환이 불가합니다.

● 불법적인 방법으로 이벤트에 참여하신 고객님은 이벤트 당첨 대상에서 제외되며, 당첨 이후에도 당첨이 취소될 수 있습니다.
● 캠페인 관련 문의
(문의 가능 시간 평일 10:00 ~ 18:00)
고객상담전화 : 080-023-7007
이벤트 문의전화 : 02-532-2475
e-mail : jh.woo@minivertising.kr
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