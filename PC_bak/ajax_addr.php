<?
	include_once "../include/global.php"; 			//변수정보
	include_once "../include/function.php"; 		//함수정보
	include_once "../include/dbi.php"; 			//DB 연결정보
	mysqli_query ($my_db,"set names utf8");

	$addr1 = $_REQUEST['addr1'];
?>
                  <option value="">선택하세요</option>
<?
	// 주소 쿼리
	$query 		= "SELECT * FROM ".$_gl['addr_info_table']." WHERE addr_sido='".$addr1."' AND addr_level='2'";
	$result 	= mysqli_query($my_db, $query);

	while($addr2_data = @mysqli_fetch_array($result))
	{
?>
      <option value="<?=$addr2_data['idx']?>"><?=$addr2_data['addr_sigungu']?></option>
<?
	}
?>
