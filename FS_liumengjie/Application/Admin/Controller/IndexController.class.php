<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("A/login"));
		}
    }
    public function index(){
    	$teacher = M("teacher");
		$resources = M("resource");
		
		
		$teacherCount = $teacher->count();
		$resourcesCount = $resources->count();
		
		
		$this->assign("tc",$teacherCount);
		$this->assign("rc",$resourcesCount);
		
        $this->show();
    }
}