$(function(){
	var height =$(window).height();
$('.body').css('height',height);
$('.cover').css('height',height);
	$('.aws_btn').click(function(){
		$.ajax({
			type:'post',
			url:'/answer/index.php/Admin/add',
			data:$('.aws_form').serializeArray(),
			success:function(response){
				var json = JSON.parse(response);
				if(json.status == 1){
					dialog.success(json.message,'/answer/');
				}else{
					dialog.error(json.message);
				}
			}
		})
	})
	var w = 0;
	function width(){
		$('.progress-bar').css('width',w+'%');
		w++;
		if(w > 105){
			for(var i=0;i<$('.btn').length;i++){
				if($('.btn').eq(i).attr('attr') == $('.real').val()){
					$('.btn').eq(i).attr('class','btn btn-success');
					$('.alert').html($('.btn').eq(i).html());
					clearInterval(index);
				}
			}
		}
	}
	var index = setInterval(width,120);
	/**
	*按钮效果
	*/
	$('.answer_btn').find('.btn').click(function(){
		if($(this).attr('attr') == $('.real').val()){
			$(this).attr('class','btn btn-success');
			$('.alert').html($(this).html());
		}else{
			$(this).attr('class','btn btn-danger');
		}
	})
	/**
	*下一题异步提交事件
	*/
$('.next_btn').click(function(){
		$id = parseFloat($('.id').val())+1;
		$index = parseInt($('#content').find('.navbar-text i').html())+1;
		ajaxPostData($id,1);
	})
/**
*上一题操作
*/
$('.pre_btn').click(function(){
		$id = parseFloat($('.id').val())-1;
		$index = $('#content').find('.navbar-text i').html()-1;
		ajaxPostData($id,2);
	})





function ajaxPostData($id,$type){
	clearInterval(index);
	$data = {id:$id,type:$type,index:$index};
	$('.progress-bar').css({
		display:'none',
		width:'0',
	});
	w =0;
	$('.btn').attr('class','btn btn-default');
	$('.alert').html(' ');
	$.ajax({
	type:'post',
	url:'/answer/index.php/Index',
	data:$data,
	success:function(response){
		var json = JSON.parse(response);
		$res = json.res;
		$count = json.count;
		$index = json.index;
		var $c = $('#content');
		$c.find('.id').val($res['awe_id']);
		$c.find('.real').val($res['real_res']);
		$c.find('h3').html($res['awe_tit']);
		 index = setInterval(width,120);
		 $('.progress-bar').css('display','block');
		$c.find('.navbar-text i').html($index);
		$.each($res,function(index,res){
			for(var i=0;i<$('.btn').length;i++){
				if($('.btn').eq(i).attr('attr') == index){
					$('.btn span').eq(i).html(res);
				}
			}
		})

	}
  })
}


})