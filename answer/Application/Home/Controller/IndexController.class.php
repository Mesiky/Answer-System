<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$id = $_POST['id'] ?intval($_POST['id']):1;
        $count = D('Admin')->getCount(); 
        if($count){
            if($_POST['type'] == 2){
               $res = $this->recursionUp($id,$type);
            }else{
                $res = $this->recursionDown($id);
            }
        }
    	if(isset($_POST['id'])){
            $data['index'] = $_POST['index'];
    		$data['res'] = $res;
    		$data['count'] = $count;
    		exit(json_encode($data));
    	}
    	$this->assign('count',$count);
    	$this->assign('res',$res);
        $this->display();
    }
    public function recursionDown($id,&$result = array()){  
    if (D('Admin')->getOnceData($id) == null){
        $id++;      
        $result[$id] = D('Admin')->getOnceData($id);
        $this->recursionDown($id,$result);
        
    }else{
        $result =  D('Admin')->getOnceData($id);
    }
    return $result;

    }
    public function recursionUp($id,&$result = array()){  
    if (D('Admin')->getOnceData($id) == null){
        $id--;        
        $result[$id] = D('Admin')->getOnceData($id);
        $this->recursionUp($id,$result);
        
    }else{
        $result =  D('Admin')->getOnceData($id);
    }
    return $result;

    }
}
