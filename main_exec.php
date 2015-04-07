<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_event" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone1	= $_REQUEST['mb_phone1'];
		$mb_phone2	= $_REQUEST['mb_phone2'];
		$mb_phone3	= $_REQUEST['mb_phone3'];
		$mb_addr		= $_REQUEST['mb_address'];
		$mb_phone = $mb_phone1."-".$mb_phone2."-".$mb_phone3;

		$chk_member	= BB_memberChk($mb_phone);

		if ($chk_member == 0)
		{
			$query 		= "INSERT INTO ".$_gl['member_info_table']."(mb_ipaddr, mb_name, mb_phone, mb_address, mb_gubun, mb_regdate) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".$mb_addr."','".$gubun."','".date("Y-m-d H:i:s")."')";
			$result 	= mysqli_query($my_db, $query);
			$ins_idx = mysqli_insert_id($result);
echo $ins_idx;
			if ($result)
				$flag = "Y";
			else
				$flag = "N";
		}else{
			$flag = "D";
		}

		echo $flag;
	break;
}

?>