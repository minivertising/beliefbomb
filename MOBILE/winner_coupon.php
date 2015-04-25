<?
	include_once "./header.php";

	$serialnumber	= $_REQUEST['serialnumber'];
	$coupon_info	= BB_check_serial($serialnumber);

	$shop_info		= BB_shop_info($coupon_info['shop_idx']);

	if (!$shop_info)
	{
		$my_db1 = mysqli_connect("192.168.124.155", "root", "m!nv#Rtisin9", "belifbomb");
		$coupon_info	= BB_check_serial1($serialnumber);

		$shop_info		= BB_shop_info1($coupon_info['shop_idx']);
		if (!$shop_info)
		{
			$my_db2 = mysqli_connect("192.168.124.155", "root", "m!nv#Rtisin9", "belifbomb");
			$coupon_info	= BB_check_serial2($serialnumber);

			$shop_info		= BB_shop_info2($coupon_info['shop_idx']);
		}
	}
?>
<body class="bg_blue">
  <div class="wrap_page coupon">
    <div class="txt_block">
      <ul>
        <li>교환기간 : 2015.4.28 ~ 6.14</li>
        <li>내가 선택한 매장 : <?=$shop_info['shop_name']?></li>
      </ul>
    </div>
<?
	if ($coupon_info['mb_use'] == "Y")
	{
?>
    <div class="btn_block"><a href="#"><img src="img/btn_use_after.png" alt=""/></a></div>
<?
	}else{
?>
    <div class="btn_block"><a href="#" onclick="use_coupon('<?=$serialnumber?>');"><img src="img/btn_use_before.png" alt=""/></a></div>
<?
	}
	if ($coupon_info['mb_winner'] == "miniature")
	{
?>
    <div class="img_100"><img src="img/bg_coupon_1.png" alt=""/></div>
<?
	}else{
?>
    <div class="img_100"><img src="img/bg_coupon_2.png" alt=""/></div>
<?
	}
?>
  </div>
</body>
</html>
<script type="text/javascript">
function use_coupon(serial)
{
	if (confirm('사용 확인 하시겠습니까?'))
	{
		$.ajax({
			type:"POST",
			data:{
				"exec"			: "update_coupon",
				"serial"		: serial
			},
			url: "../main_exec.php",
			success: function(response){
				if (response == "Y")
				{
					alert('쿠폰 사용처리가 완료 되었습니다.');
				}else{
					alert('시스템 오류! 잠시 후 다시 시도해 주세요.');
				}
				location.reload();
			}
		});
	}
}
</script>