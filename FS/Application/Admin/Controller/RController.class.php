<?php
namespace Admin\Controller;
use Think\Controller;
class RController extends Controller {
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("A/login"));
		}
    }
    public function edit($id=""){
        if (IS_POST) {
            $model = M("resource");
            if($model->create()){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize  = 3145728 ;// 设置附件上传大小
                $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg','doc','docx');// 设置附件上传类型
                $upload->rootPath = './Public';
                $upload->savePath =  '/uploads/';// 设置附件上传目录    
                $uploadPic = $upload->upload(); 
                if(!$uploadPic) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{                  
                    $data['id'] = I("post.id");
                    $data['title'] = I("post.title");
                    $data['path'] = __ROOT__.'/Public'.$uploadPic['path']['savepath'].$uploadPic['path']['savename'];
                    $data['author'] = I("post.author");
                    $data['publishTime'] = I("post.publishtime");
                    $data['summary'] = I("post.summary");
                    
                    $result = $model->filter('strip_tags')->save($data);
                    if($result !== false){
                        $this->success("修改成功", U("R/lists"));
                    }else{
                        $this->error($model->getError());
                    }
                }       
            }
        }
        else {
            if ($id == '') {
                exit("bad param!");
            }
            $resource = M("resource")->find($id);
            $this->assign("resource", $resource);
            $this->show();
        }
    }
    public function lists(){
        $resourceModel = D("resource");
        //页码
        $count  = $resourceModel->count();    //计算总数
        $Page   = new \Think\Page($count, 2);
        $resources   = $resourceModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id asc')->select();
        $page = $Page->show();
        $this->assign("page",$page);
        $this->assign("resource",$resources);
        
        $this->show();
    }
    public function del(){
        $id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if ($id == '') {
            exit("bad param!");
        }
        if(M("resource")->delete($id)){
            $this->success("删除成功！");
        }
    }
}

?>