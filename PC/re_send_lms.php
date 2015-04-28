<?
	include_once   "./header.php";
	$serialNumber		= BB_SerialNumber();

	$query 		= "UPDATE ".$_gl['winner_info_table']." SET mb_serialnumber='".$serialNumber."' WHERE idx='1572'";
	$result 	= mysqli_query($my_db, $query);
?>

 </body>
</html>
