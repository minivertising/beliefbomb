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
	function BB_memberChk($phone)
	{
		global $_gl;
		global $my_db;

		$query			= "SELECT * FROM ".$_gl['member_info_table']." WHERE mb_phone='".$phone."'";
		$result			= mysqli_query($my_db, $query);
		$memberCnt	= mysqli_num_rows($result);

		return $memberCnt;
	}
?>