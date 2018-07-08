<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<link rel="shortcut icon" href="www.kelvin-prj.000webhostapp.com" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>我的PRJ</title>
	<style type="text/css">
		body {
			background-image: url(entry_back.jpg);
			background-size: 100%;
			background-repeat: no-repeat;
		}
	</style>
	<script language="javascript" type="text/javascript" src="snow.js"></script>
</head>

<body>
	<h1 align="center">&nbsp;</h1>
	<span id="adian_today">
		<script language="JavaScript">
			setInterval(
				function () {
					Day = new Array(7);
					Day[0] = "日"; Day[1] = "一"; Day[2] = "二"; Day[3] = "三"; Day[4] = "四"; Day[5] = "五"; Day[6] = "六";
					today = new Date();
					year = today.getFullYear();
					month = today.getMonth() + 1;
					day = today.getDate();
					weekly = today.getDay();
					hour = today.getHours();
					minutes = today.getMinutes();
					seconds = today.getSeconds();
					fdate = sprintf("%d年%2d月%2d日 星期%s %2d:%2d:%2d\n", year, month, day, Day[weekly], hour, minutes, seconds);
					mydate = "<font color=red><center><b>" + year + "</b>年<b>" + month + "</b>月<b>" + day + "</b>日 星期<b>" + Day[weekly] + "</b>  <b>" + hour + ":" + minutes + ":" + seconds + "</b></center></Font>";
					document.getElementById("adian_today").innerHTML = mydate;
				}, 1000)
		</script>
	</span>

	<h1 align="center">&nbsp;</h1>
	<h1 align="center">
		<strong>
			<font color="#FFFFFF">歡迎來到Kelvin-PRJ</font>
		</strong>
	</h1>
	<p align="center">
		<p align="center">
			<font color="yellow">
				<strong>
					<marquee width="80%" scrollamount="8" class="x">
						<span class="x">DEMO~DEMO~DEMO~</span>
					</marquee>
				</strong>
			</font>
		</p>
		<br />
		<p align="center">&nbsp;</p>
		<p align="center">
			<a href="forum.php" target="_self">
				<img src="entry_button.jpg" alt="進入網站" width="168" height="62" hspace="150" align="left" />
			</a>
		</p>
		<p align="center">&nbsp; </p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
		<p align="center">&nbsp;</p>
</body>

</html>