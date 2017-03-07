<?php
	namespace Home\Model;
	use Think\Model;
	class AdminContentModel extends Model{
		private $_db = '';
		public function __construct(){
			$this->_db = M('result');
		}
		public function getInsertById($data){
			return $this->_db->add($data);
		}
		public function getDeleteById($id){
			if(!$id || !isset($id)){
				E('id号获取失败');
			}
			return $this->_db->where('aswer_id='.$id)->delete();
		}
	}


?>