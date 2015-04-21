<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "insert_event" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone1	= $_REQUEST['mb_phone1'];
		$mb_phone2	= $_REQUEST['mb_phone2'];
		$mb_phone3	= $_REQUEST['mb_phone3'];
		//$mb_addr		= $_REQUEST['mb_address'];
		$mb_phone	= $mb_phone1."-".$mb_phone2."-".$mb_phone3;
		$mb_gift			= $_REQUEST['mb_gift'];
		$chk_member	= BB_memberChk($mb_phone, $mb_gift);

		if ($chk_member == 0)
		{
			//$query 		= "UPDATE ".$_gl['winner_info_table']." SET mb_name='".$mb_name."', mb_phone='".$mb_phone."', mb_winner='Y' WHERE idx='".$idx."'";
			$query 		= "INSERT INTO ".$_gl['winner_info_table']."(mb_ipaddr, mb_name, mb_phone, mb_regdate, mb_gubun, mb_winner) values('".$_SERVER['REMOTE_ADDR']."','".$mb_name."','".$mb_phone."','".date("Y-m-d H:i:s")."','".$gubun."','".$mb_gift."')";
			$result 	= mysqli_query($my_db, $query);

			//$ins_idx = mysqli_insert_id($result);
			if ($result)
				$flag = "Y";
			else
				$flag = "N";
		}else{
			$flag = "D";
		}

		echo $flag;
	break;

	case "insert_detail_event" :
		$mb_zipcode1		= $_REQUEST['mb_zipcode1'];
		$mb_zipcode2		= $_REQUEST['mb_zipcode2'];
		$mb_addr1			= $_REQUEST['mb_addr1'];
		$mb_addr2			= $_REQUEST['mb_addr2'];
		$mb_shop			= $_REQUEST['shop'];
		$mb_gift				= $_REQUEST['mb_gift'];
		$mb_chkphone		= $_REQUEST['mb_chkphone'];
		$addr					= $mb_addr1." ".$mb_addr2;
		$zipcode				= $mb_zipcode1."-".$mb_zipcode2;
		$serialNumber		= BB_SerialNumber();

		$surl	= make_surl($serialNumber, "1");

		if ($surl == "RATE_LIMIT_EXCEEDED")
		{
			$surl	= make_surl($mb_chkphone, $serialNumber, "2");
			if ($surl == "RATE_LIMIT_EXCEEDED")
			{
				$surl	= make_surl($mb_chkphone, $serialNumber, "3");
				if ($surl == "RATE_LIMIT_EXCEEDED")
				{
					$surl	= make_surl($mb_chkphone, $serialNumber, "4");
					if ($surl == "RATE_LIMIT_EXCEEDED")
					{
						$surl	= make_surl($mb_chkphone, $serialNumber, "5");
					}
				}
			}
		}

		$query 		= "UPDATE ".$_gl['winner_info_table']." SET mb_zipcode='".$zipcode."', mb_addr='".$addr."', shop_idx='".$mb_shop."', mb_s_url='".$surl."', mb_serialnumber='".$serialNumber."' WHERE mb_phone='".$mb_chkphone."' AND mb_winner='".$mb_gift."'";
		$result 	= mysqli_query($my_db, $query);

		//$ins_idx = mysqli_insert_id($result);
		if ($result)
		{
			if ($mb_shop)
				//$lmsYN	= send_lms($mb_chkphone, $surl);
				$lmsYN	= "imsi";
			$flag = "Y";
		}else{
			$flag = "N";
		}

		echo $flag;
	break;

	case "winner_check" :
		$query 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'cream' AND mb_regdate like '%".date("Y-m-d")."%'";
		$result 	= mysqli_query($my_db, $query);
		$winner_cnt	= mysqli_num_rows($result);

		$query2 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'kit' AND mb_regdate like '%".date("Y-m-d")."%'";
		$result2 	= mysqli_query($my_db, $query2);
		$kit_cnt	= mysqli_num_rows($result2);

		$query3 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'miniature' AND mb_regdate like '%".date("Y-m-d")."%'";
		$result3 	= mysqli_query($my_db, $query3);
		$miniature_cnt	= mysqli_num_rows($result3);
		$miniature_array = array("Y","N","N","N","N","N","N","N","N");
		$kit_array = array("Y","N","N","N","N","N","N","N","N","N");

		$flag	= "N";
		// 1일 5명 당첨 ( 정품 )
		if ($winner_cnt > 5)
		{
			// 1일 2000명 당첨 ( 키트 )
			if ($kit_cnt > 2000)
			{
				// 1일 1000명 당첨 ( 미니어쳐 )
				if ($miniature_cnt > 1000)
				{
					$flag	= "N";
				}else{
					// 미니어쳐 당첨 추첨
					shuffle($miniature_array);
					
					if ($miniature_array[0] == "Y")
					{
						$flag	= "M";
					}else{
						$flag	= "N";
					}
				}
			}else{
				// 키트 당첨 추첨
				shuffle($kit_array);
				
				if ($kit_array[0] == "Y")
				{
					$flag	= "K";
				}else{
					// 미니어쳐 당첨 추첨
					shuffle($miniature_array);
					
					if ($miniature_array[0] == "Y")
					{
						$flag	= "M";
					}else{
						$flag	= "N";
					}
				}
			}
		}else{
			// 정품 당첨 추첨
			$winner_array = array(1,10,182,454,692);
			$max_winner_cnt = 5;

			// 오늘의 참여자 수
			$today_cnt = BB_TodayMember();

			foreach ($winner_array as $key => $val)
			{

				if ($today_cnt == $val)
				{
					$flag = "Y";
					break;
				}else{
					// 1일 1000명 당첨 ( 키트 )
					if ($kit_cnt > 2000)
					{
						// 1일 1000명 당첨 ( 미니어쳐 )
						if ($miniature_cnt > 1000)
						{
							$flag	= "N";
						}else{
							// 미니어쳐 당첨 추첨
							shuffle($miniature_array);
							
							if ($miniature_array[0] == "Y")
							{
								$flag	= "M";
							}else{
								$flag	= "N";
							}
						}
					}else{
						// 키트 당첨 추첨
						shuffle($kit_array);
						
						if ($kit_array[0] == "Y")
						{
							$flag	= "K";
						}else{
							// 미니어쳐 당첨 추첨
							shuffle($miniature_array);
							
							if ($miniature_array[0] == "Y")
							{
								$flag	= "M";
							}else{
								$flag	= "N";
							}
						}
					}
				}
			}
		}
		echo $flag;
	break;

	case "insert_event_member" :
		$query 		= "INSERT INTO ".$_gl['member_info_table']."(ip_addr, gubun, regdate) values('".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

	break;

	case "insert_share_info" :
		$media	= $_REQUEST['media'];

		$query 		= "INSERT INTO ".$_gl['share_info_table']."(sns_media, sns_ipaddr, sns_gubun, sns_regdate) values('".$media."','".$_SERVER['REMOTE_ADDR']."','".$gubun."','".date("Y-m-d H:i:s")."')";
		$result 	= mysqli_query($my_db, $query);

		if ($result)
			$flag = "Y";
		else
			$flag = "N";

		echo $flag;

	break;

	case "select_cal" :
		$cal_date		= $_REQUEST['cal_date'];
		
		$query 		= "SELECT sc_name FROM ".$_gl['schedule_info_table']." WHERE sc_date = '".$cal_date."'";
		$result 		= mysqli_query($my_db, $query);
		$cal_name	= mysqli_fetch_array($result);
		
		echo $cal_name['sc_name'];
	break;

	case "select_desc_cal" :
		$query 		= "SELECT * FROM ".$_gl['schedule_info_table']." WHERE sc_date > '".$cal_date."' ORDER BY sc_date ASC";
		$result 		= mysqli_query($my_db, $query);
		$cal_data		= mysqli_fetch_array($result);
		$yoil = array("일","월","화","수","목","금","토");
		
		$date_arr		= explode("-",$cal_data['sc_date']);
		echo "<ul><li>".$date_arr[1].".".$date_arr[2]."(".$yoil[date('w',strtotime($cal_data['sc_name']))].") ".$cal_data['sc_name']."</li></ul>";
	break;
}
?>