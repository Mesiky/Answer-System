<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>答题</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="/answer/Public/css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="/answer/Public/css/style.css">
	<script src="/answer/Public/js/jquery.min.js"></script>
	<script src="/answer/Public/js/dialog/layer.js"></script>
	<script src="/answer/Public/js/dialog.js"></script>
	<script src="/answer/Public/js/common.js"></script>


	</head>
	<body>
		<div class=" body bg_body">
		   		<div class="cover"></div>
		 <div id="content" class="container" style="padding-top: 20px">
		 	<a href="/answer/index.php/Excel/exData" class="exexcel excel">导出数据并生成excel</a>
        <form action="/answer/index.php/Excel/imData" method="post" enctype="multipart/form-data">
            <input type="file" name="import" class="file"  />
            <input type="hidden" name="table" value="tablename"/>
            <input type="submit" value="excel数据导入数据库" class="excel imexcel"/>
        </form>
		<div id="nav">
			<a href="/answer/index.php" class="glyphicon glyphicon-home"></a>
			<a href="/answer/index.php/admin" class="glyphicon glyphicon-edit"></a>
			<a href="/answer/index.php/admin/listshow" class="glyphicon glyphicon-th-large"></a>
			<a href="/answer/index.php/admin/source" class="glyphicon glyphicon-new-window nav_atv"></a>
		</div>
		</div>
		   	

	

	<!-- jQuery Easing -->
	<script src="/answer/Public/js/bootstrap.min.js"></script>
	<!-- Main -->
	</body>
</html>