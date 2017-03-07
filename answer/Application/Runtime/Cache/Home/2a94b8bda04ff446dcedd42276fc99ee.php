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
		<div class="body">
		   		<div class="cover"></div>
		   		<div id="content" class="row">
		   			<h2 class="page-header">
		   				<a href="javascript:void(0)"><li class="glyphicon glyphicon-circle-arrow-left pre_btn"></li></a>
		   				<a href="javascript:void(0)"><li class="glyphicon glyphicon-circle-arrow-right next_btn"></li></a>
		   			</h2>
		   			<input type="hidden" value="1" class="id" >
		   			<input type="hidden" value="<?php echo ($res[awe_mark]); ?>" class="mark">
		   			<input type="hidden" value="<?php echo ($res[real_res]); ?>" class="real">
		   			<h3><?php echo ($res['awe_tit']); ?></h3>

						<div class="answer_btn">
							<botton class="btn btn-default" attr="resa">A：<span><?php echo ($res['resa']); ?></span></botton>
		   					<botton class="btn btn-default" attr="resb">B：<span><?php echo ($res['resb']); ?></span></botton><br/>
		   					<?php if($res['resc'] != ''): ?><botton class="btn btn-default" attr="resc">C：<span><?php echo ($res['resc']); ?></span></botton><?php endif; ?>
		   					<?php if($res['resd'] != ''): ?><botton class="btn btn-default" attr="resd">D：<span><?php echo ($res['resd']); ?></span></botton><?php endif; ?>
		   					<?php if($res['rese'] != ''): ?><botton class="btn btn-default" attr="resd">E：<span><?php echo ($res['rese']); ?></span></botton><?php endif; ?>		   					
						</div>
							<p class="navbar-text" style="display: block;width:95%;">第<i>1</i>/<?php echo ($count); ?>题</p>
							<div class="progress">
	  							<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" >
	   							 <span class="sr-only">20% Complete</span>
	  							</div>
							</div>
						<div class="alert"></div>
		   		</div>
		</div>
		<div class="config"><a href="/answer/index.php/admin/listshow" class="glyphicon glyphicon-cog"></a></div> 	

	
	<!-- jQuery -->
	<script src="/answer/Public/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/answer/Public/js/bootstrap.min.js"></script>
	<!-- Main -->
	<script src="/answer/Public/js/main.js"></script>
	<script src="/answer/Public/js/common.js"></script>
	</body>
</html>