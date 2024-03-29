<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<style type="text/css">
		body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
		#allmap{width:100%;height:500px;}
		p{margin-left:5px; font-size:14px;}
	</style>
	<script type="text/javascript" src="//api.map.baidu.com/api?v=2.0&ak=kqA4cmmdXTYrkOpKRCKE90OFfEfT18yG"></script>
	<title>缩放地图</title>
</head>
<body>
	<div id="allmap"></div>
	<p>初始化展示中心点为（116.4035,39.915），缩放级别为8的北京市地图，2秒后，通过设置缩放级别将地图放大到14级</p>
	<img src="http://api.map.baidu.com/panorama/v2?ak=kqA4cmmdXTYrkOpKRCKE90OFfEfT18yG&width=512&height=256&location=<?php echo $lng?>,<?php echo $lat?>&fov=180" alt="">
</body>
</html>
<script type="text/javascript">
	// 百度地图API功能
	var map = new BMap.Map("allmap");  
	map.centerAndZoom(new BMap.Point(<?php echo $lng?>,<?php echo $lat?>),8); 
	setTimeout(function(){
		map.setZoom(14);   
	}, 2000);  //2秒后放大到14级
	map.enableScrollWheelZoom(true);
</script>
