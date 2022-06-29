<!DOCTYPE html>
<html>
<head>
	<title>DC Industry (V)</title>
	<meta charset="utf-8">
	<style type="text/css">
		a.lang {
			text-decoration: none; 
			color: #3dad66; 
			font-weight:bold;
			font-size:18px;
		}

		a.menu {
			text-decoration: none;
			color: white;
			font-weight: bold;
			font-size: 14px;
		}

		a.sp {
			text-decoration: none;
			color:#27281a;
			font-weight: bold;
			font-size:16px;
		}
	</style>
</head>
<body style="margin:0px;">
<center>
<table border = "1" cellspacing="0" cellpadding="0" style="width:780px;">
	<tr>
		<td colspan="2" style="height:102px;">
			@include("header.topbanner")
		</td>
	</tr>
	<tr>
		<td colspan="2">
			@include("header.banner")
		</td>
	</tr>
	<tr>
		<td style="width:168px;">
			@include("menu")
		</td>
		<td style="width:612px;">
			content
		</td>
	</tr>
	<tr style="height:58px;">
		<td colspan="2">
			@include("footer.footer");
		</td>
	</tr>
</table>
</center>
</body>
</html>