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
		   			<form action="" class="form-horizontal aws_form" method="post">
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">问题*:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="awe_tit" class="form-control" placeholder="问题">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">A答案*:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="resA" class="form-control" placeholder="A答案">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">B答案*:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="resB" class="form-control" placeholder="B答案">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">C答案:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="resC" class="form-control" placeholder="C答案">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">D答案:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="resD" class="form-control" placeholder="D答案">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">E答案:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="resE" class="form-control" placeholder="E答案">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">分值:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<input type="text" name="awe_mark" class="form-control" placeholder="分值">
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-2">正确*:</label>
		   					<div class="col-md-6 col-sm-6">
		   						<select name="real_res" id="" class="form-control">
		   							<option value="0">选择正确答案</option>
		   							<option value="resA">A</option>
		   							<option value="resB">B</option>
		   							<option value="resC">C</option>
		   							<option value="resD">D</option>
		   							<option value="resE">E</option>
		   						</select>
		   					</div>
		   				</div>
		   				<div class="form-group">
		   					<label for="" class="control-label col-md-3 col-sm-3"></label>
		   					<div class="col-md-8 col-sm-8">
								<button type="button" class="btn btn-primary aws_btn">确定</button>
		   					</div>
		   				</div>
		   				
		   			</form>
				<div id="nav">
					<a href="/answer/index.php" class="glyphicon glyphicon-home"></a>
					<a href="/answer/index.php/admin" class="glyphicon glyphicon-edit nav_atv"></a>
					<a href="/answer/index.php/admin/listshow" class="glyphicon glyphicon-th-large"></a>
					<a href="/answer/index.php/admin/source" class="glyphicon glyphicon-new-window"></a>
				</div>
		   		</div>
		   		
		</div>
		   	

	

	<!-- jQuery Easing -->
	<script src="/answer/Public/js/bootstrap.min.js"></script>
	<!-- Main -->
	<script src="/answer/Public/js/main.js"></script>
	<script src="/answer/Public/js/common.js"></script>
	</body>
</html>