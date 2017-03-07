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
		   			<table class="table table-bordered table-condensed text-center"  style="font-size:14px;color:#f6f6f6">
						<thead>
							<tr>
								<td>序列号</td>
								<td>题目</td>
								<td>A答案</td>
								<td>B答案</td>
								<td>C答案</td>
								<td>D答案</td>
								<td>E答案</td>
								<td>答案</td>
								<td>操作</td>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$res): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($res['aswer_id']); ?></td>
								<td width="30%"><?php echo ($res['awe_tit']); ?></td>
								<td><?php echo ($res['resa']); ?></td>
								<td><?php echo ($res['resb']); ?></td>
								<td><?php echo ($res['resc']); ?></td>
								<td><?php echo ($res['resd']); ?></td>
								<td><?php echo ($res['rese']); ?></td>
								<td><?php echo ($res['real_res']); ?></td>
								<td style="vertical-align: middle;"><a href="/answer/index.php/admin/del/id/<?php echo ($res['aswer_id']); ?>" class="glyphicon glyphicon-remove-circle"></a></td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
					<nav aria-label="Page navigation" class="nav_bar">
					  <ul class="pagination pagination-sm">
						<?php echo ($show); ?>
					  </ul>
					</nav> 	
		<div id="nav">
			<a href="/answer/index.php" class="glyphicon glyphicon-home"></a>
			<a href="/answer/index.php/admin" class="glyphicon glyphicon-edit"></a>
			<a href="/answer/index.php/admin/listshow" class="glyphicon glyphicon-th-large nav_atv"></a>
			<a href="/answer/index.php/admin/source" class="glyphicon glyphicon-new-window"></a>
		</div>
		</div>
		   	

	

	<!-- jQuery Easing -->
	<script src="/answer/Public/js/bootstrap.min.js"></script>
	<!-- Main -->
	<script src="/answer/Public/js/main.js"></script>
	<script src="/answer/Public/js/common.js"></script>
	</body>
</html>