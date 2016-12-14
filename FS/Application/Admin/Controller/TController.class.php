<?php
namespace Admin\Controller;
use Think\Controller;
class TController extends Controller {
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("A/login"));
		}
    }
    
    public function lists(){
  		$teacherModel = D("teacher");
		//页码
		$count  = $teacherModel->count();    //计算总数
		$Page   = new \Think\Page($count, 4);
		$teachers   = $teacherModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id asc')->select();
		$page = $Page->show();
		$this->assign("page",$page);
		$this->assign("teacher",$teachers);
    	
        $this->show();
    }
    
    public function edit($id=''){
		if (IS_POST) {
    		$model = D("teacher");
    		if($model->create()){
    			$result = $model->filter('strip_tags')->save($data);
				if($result !== false){
					$this->success("修改成功", U("T/lists"));
				}else{
					$this->error($model->getError());
				}
    		}
    	}
    	else {
    		if ($id == '') {
    			exit("bad param!");
    		}
    		$teacherInfo = D("teacher")->find($id);
    		$this->assign("teacher", $teacherInfo);
    		$this->display();
    	}
	}
	
	public function del() {
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
		if ($id == '') {
			exit("bad param!");
		}
		if(M("teacher")->delete($id)){
			$this->success("删除成功！");
		}
    }
}