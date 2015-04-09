<?php
include_once "config.php";

switch ($_REQUEST['exec'])
{
	case "update_event" :
		$mb_name		= $_REQUEST['mb_name'];
		$mb_phone1	= $_REQUEST['mb_phone1'];
		$mb_phone2	= $_REQUEST['mb_phone2'];
		$mb_phone3	= $_REQUEST['mb_phone3'];
		//$mb_addr		= $_REQUEST['mb_address'];
		$mb_phone	= $mb_phone1."-".$mb_phone2."-".$mb_phone3;
		$mb_idx			= $_REQUEST['mb_idx'];
		$chk_member	= BB_memberChk($mb_phone);

		if ($chk_member == 0)
		{
			$query 		= "UPDATE ".$_gl['winner_info_table']." SET mb_name='".$mb_name."', mb_phone='".$mb_phone."', mb_winner='Y' WHERE idx='".$idx."'";
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

	case "winner_check" :
		$query 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'Y' AND mb_winner <> 'I' AND mb_regdate like '%".date("Y-m-d")."%'";
		$result 	= mysqli_query($my_db, $query);
		$winner_cnt	= mysqli_num_rows($result);

		$flag	= "N";
		// 1일 5명 당첨 ( 정품 )
		if ($winner_cnt > 5)
		{
			$query2 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'S' AND mb_regdate like '%".date("Y-m-d")."%'";
			$result2 	= mysqli_query($my_db, $query2);
			$sample_cnt	= mysqli_num_rows($result2);
			
			// 1일 1000명 당첨 ( 샘플 )
			if ($sample_cnt > 1000)
			{
				$flag	= "N";
			}else{
				// 샘플 당첨 추첨
				$sample_array = array("Y","N");
				shuffle($sample_array);
				
				if ($sample_array[0] == "Y")
				{
					$flag	= "S";
				}else{
					$flag	= "N";
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
					$query2 		= "SELECT * FROM ".$_gl['winner_info_table']." WHERE mb_winner <> 'S' AND mb_regdate like '%".date("Y-m-d")."%'";
					$result2 	= mysqli_query($my_db, $query2);
					$sample_cnt	= mysqli_num_rows($result2);
					
					// 1일 1000명 당첨 ( 샘플 )
					if ($sample_cnt > 1000)
					{
						$flag	= "N";
					}else{
						// 샘플 당첨 추첨
						$sample_array = array("Y","N");
						shuffle($sample_array);
						
						if ($sample_array[0] == "Y")
						{
							$flag	= "S";
						}else{
							$flag	= "N";
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
}

?>