<?
	include_once   "./header.php";
	$serialNumber		= BB_SerialNumber();

	$idx	= $_REQUEST['idx'];
	$query 		= "UPDATE ".$_gl['winner_info_table']." SET mb_serialnumber='".$serialNumber."' WHERE idx='".$idx."'";
	$result 	= mysqli_query($my_db, $query);
?>

 </body>
</html>
