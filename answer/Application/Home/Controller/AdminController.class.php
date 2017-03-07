<?php
	namespace Home\Controller;
	use Think\Controller;
	use Think\Exception;
	class AdminController extends Controller{
		public function index(){
			$this->display();
		}
		public function add(){
			if(!$_POST['awe_tit'] || !isset($_POST['awe_tit'])){
				show(0,'问题不得为空');
			}
			if(!$_POST['resa'] || !isset($_POST['resa'])){
				show(0,'A答案不得为空');
			}
			if(!$_POST['resb'] || !isset($_POST['resb'])){
				show(0,'B答案不得为空');
			}
			if(!$_POST['real_res'] || !isset($_POST['real_res'])){
				show(0,'答案不得为空');
			}
			$_POST['awe_mark'] = intval($_POST['awe_mark']);
			$res = D('Admin')->getInsertById($_POST);
			if($res){
				$_POST['aswer_id'] = $res;
				$result = D('AdminContent')->getInsertById($_POST);
				if($result === false){
					show(0,'数据插入不完整');
				}else{
					show(1,'新增成功');
				}
			}else{
				show(0,'新增失败');
			}
		}
		public function listshow(){
			$p = isset($_GET['p']) ? intval($_GET['p']) : 1;
			$pageSize = 5;
			$res = D('Admin')->getData($p,$pageSize);
			$count = D('Admin')->getCount();
			$page = new \Think\Page($count,$pageSize);
			$show = $page->show();
			$this->assign('show',$show);
			$this->assign('res',$res);
			$this->display();
		}
		public function source(){	
			$this->display();
		}
		public function del(){
			$id = intval($_GET['id']);
			try{
				$res = D('Admin')->getDeleteById($id);
				if($res){
					$resC = D('AdminContent')->getDeleteById($id);
				}
			}catch(Exception $e){
				$this->error('操作失败');
			}
			if($resC !== false){
				$this->success('操作成功');
			}

		}



	}
