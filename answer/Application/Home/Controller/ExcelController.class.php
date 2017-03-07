<?php
	namespace Home\Controller;
	use think\Controller;
	class ExcelController extends Controller{
		public function exData(){
			$xlsName  = "User";
       	    $xlsCell  = array(
     	    array('aswer_id','序列号'),
     	    array('awe_tit','题目'),
    	    array('resa','A答案'),
            array('resb','B答案'),
            array('resc','C答案'),
            array('resd','D答案'),
            array('rese','E答案'),
            array('real_res','正确答案'),
     	    array('awe_mark','分值'),
        );
        	$xlsModel = M('result');
    
        	$xlsData  = $xlsModel->table(array('aswer_que'=>'que','aswer_result'=>'res'))->where('que.awe_id = res.aswer_id')->select();
          	exportExcel($xlsName,$xlsCell,$xlsData);

		}



		public function imData(){
			if (!empty($_FILES)) {
            import("@.ORG.Upload");
            $config=array( 
                'savePath'=>'upload/',
                'saveRule'=>'time',
                'rootPath'=>'./Public/'
            );
            $upload = new \Think\Upload($config); 
            $info = $upload->upload();
            if (!$info) {
                 $this->error($upload->getError());
            }
        
                Vendor('PHPExcel.IOFactory'); 
                $file_name='Public/'.$info['import']['savepath'].$info['import']['savename'];
                $objReader = \PHPExcel_IOFactory::createReader('Excel5');
                $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
                $sheet = $objPHPExcel->getSheet(0);
                $highestRow = $sheet->getHighestRow(); 
                $highestColumn = $sheet->getHighestColumn(); 
                for($i=2;$i<=$highestRow;$i++)
                {   
                    $data['awe_tit'] = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
                    $data['resa']= $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
                    $data['resb']= $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
                    $data['resc']= $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
                    $data['resd']= $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
                    $data['rese']= $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();
                    $data['real_res']= $objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue();
                    $data['awe_mark']= $objPHPExcel->getActiveSheet()->getCell("H".$i)->getValue();
                    $res = D('Admin')->getInsertById($data);
                    $data['aswer_id'] = $res;
                    D('AdminContent')->getInsertById($data);
         
                } 
                 $this->success('导入成功！');
        }else
            {
                $this->error("请选择上传的文件");
            }    
		}
	}

?>