<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>商品订单修改</title>
<link rel="stylesheet" href="./css/common.css" />
<link rel="stylesheet" href="./js/jquery.datetimepicker.css" />
<script src="./js/jquery.js"></script>
<script src="./js/jquery.datetimepicker.js"></script>
</head>
<body class="profile" style="background: url(../img/07.jpeg);">
<div class="main" style="opacity:0.7;color: white;">
	<h1>修改订单信息</h1>
	<form method="post" action="ora_update.php">
	<table>
		<tr><th>gid：</th><td><input type="text" name="gid" /></td></tr>
		<tr><th>uid：</th><td><input type="text" name="uid" id="img_src" value="" /></td></tr>
		<tr><th>price：</th><td><input id="birth" name="price" type="text"></td></tr>
		<tr><th>name：</th><td><input id="entry" name="name" type="text"></td></tr>
		<tr><td colspan="2" class="td-btn">
		<input type="submit" value="确认修改" class="button" />
		<input type="button" value="返回订单表" class="button" onclick="location.href='ord_select_html.php'" />
		</td></tr>
	</table>
	</form>
</div>
<a href="index_html.php" style="text-decoration: none;text-decoration: none;color: white;opacity: 0.7;font-size: 25px;" class="pen">返回主页</a>
</body>
</html>