<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\AHalf\public/../application/index\view\shake\shake.html";i:1492238315;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
<title>摇一摇</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css" />
<link rel="stylesheet" href="http://localhost/AHalf/application/index/view/dist/css/shake.css">
<link rel="stylesheet" href="http://localhost/AHalf/application/index/view/dist/css/myDialog.css">
<script type="text/javascript" src="http://localhost/AHalf/application/index/view/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/AHalf/application/index/view/dist/js/howler.min.js"></script> 
<script type="text/javascript" src="http://localhost/AHalf/application/index/view/dist/js/fastclick.js"></script> 
<script type="text/javascript" src="http://localhost/AHalf/application/index/view/dist/js/shake.js"></script>
<script type="text/javascript" src="http://localhost/AHalf/application/index/view/dist/js/myDialog.js"></script>
</head>
<body>
<table id="container">
<tbody>
	<tr>
		<td class="container" colspan="2">
			<div id="shake">
				<img src="http://localhost/AHalf/application/index/view/dist/images/inner.png" class="inner img-responsive center-block">
				<img src="http://localhost/AHalf/application/index/view/dist/images/shake.png" class="shake_up" id="shakeup">
				<img src="http://localhost/AHalf/application/index/view/dist/images/shake.png" class="shake_down" id="shakedown">
			</div>
			<div id="loading" class="loading"></div>
		</td>
	</tr>
	<tr id="controlbar">
		<td class="controlbar" onclick="javascript:shake();">
			<img src="http://localhost/AHalf/application/index/view/dist/images/sdy.png" width="40" height="53"><br>手动摇
		</td>
	</tr>
	<tr id="cantshake" style="display:none"><td class="controlbar" colspan="2">对不起，您的手机无法支持摇一摇！</td></tr>
</tbody>
</table>
</body>
</html>
