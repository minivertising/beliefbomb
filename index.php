<?
	include_once "config.php";

	//unset($media);
	$media	= $_REQUEST['media'];

	$_SESSION['ss_media'] = $media;

	BB_InsertTrackingInfo($media, $gubun);

	if($gubun == "MOBILE")
	{
		Header("Location:http://www.belifbomb.com/MOBILE/index.php");
		exit;
	}else{
		Header("Location:http://www.belifbomb.com/PC/index.php");
		exit;
	}

?>
