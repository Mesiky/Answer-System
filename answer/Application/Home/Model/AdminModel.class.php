<?php
	namespace Home\Model;
	use Think\Model;
	class AdminModel extends Model{
		private $_db = '';
		public function __construct(){
			$this->_db = M('que');
		}
		public function getInsertById($data){
			return $this->_db->add($data);
		}
		public function getOnceData($id,$res){
			return $this->_db->table(array('aswer_que'=>'que','aswer_result'=>'res'))->where('awe_id = '.$id.' and que.awe_id = res.aswer_id')->find();
		}
		public function getCount(){
			return $this->_db->count();
		}
		public function getData($p,$pageSize){
			$offset = ($p-1)*$pageSize;
			return $this->_db->table(array('aswer_que'=>'que','aswer_result'=>'res'))->where('que.awe_id = res.aswer_id')->limit($offset,$pageSize)->select();
		}
		public function getDeleteById($id){
			if(!$id || !isset($id)){
				E('id号获取失败');
			}
			return $this->_db->where('awe_id='.$id)->delete();
		}
	}

?>