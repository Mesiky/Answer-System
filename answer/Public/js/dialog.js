/**
*layer 弹出层封装库
*/ 

var dialog={
	//错误信息提示
    error: function(message) {
        layer.open({
    		anim:6,
            content:message,
            icon:2,
            // skin: 'layer-ext-seaning', //修改皮肤
            title : ['错误提示','font-family: Microsoft YaHei , Tahoma, Helvetica, Arial, sans-serif;font-size:16px;']
        });
    },
    //操作成功提示
    success:function(message,url){
    	layer.open({
    		content:message,
    		icon:1,
    		title:'操作提示',
           yes : function(){ //回调函数，在按下确定的时候执行跳转
                location.href=url; 
            },
    	})
    },
    //确认弹出框
    confirm : function(message, url) { 
        layer.open({
            content : message,
            icon:3,
            btn : ['是','否'],
            yes : function(){
                location.href=url;
            },
        });
    },
    //确认层
     toconfirm : function(message) {
        layer.open({
    		closeBtn:2,
    		anim:2,
            content : message,
            icon:3,
            btn : ['确定'],
        });
    },
    //加载层
     load:function(type,shade){
     	return  layer.load(type,shade);
     },
     //警告弹出层
    warn:function(message,url){
        layer.open({
            content:message,
            icon:7,
            area:'200px',
            closeBtn:0,
            title:'操作警告',
           yes : function(){ //回调函数，在按下确定的时候执行跳转
                location.href=url; 
            },
        })
    }
}
