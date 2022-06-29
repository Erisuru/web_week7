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
			<?php echo $__env->make("header.topbanner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo $__env->make("header.banner", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</td>
	</tr>
	<tr>
		<td style="width:168px;">
			<?php echo $__env->make("menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</td>
		<td style="width:612px;">
			content
		</td>
	</tr>
	<tr style="height:58px;">
		<td colspan="2">
			<?php echo $__env->make("footer.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
		</td>
	</tr>
</table>
</center>
</body>
</html><?php /**PATH C:\xampp\htdocs\web_week7\resources\views/home.blade.php ENDPATH**/ ?>