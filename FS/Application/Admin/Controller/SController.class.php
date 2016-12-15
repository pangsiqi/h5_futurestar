<?php
namespace Admin\Controller;
use Think\Controller;
class SController extends Controller {
	public function __construct(){
    	parent::__construct();
		if(!isLogin()){
			$this->error("请先登录",U("A/login"));
		}
    }

    public function add(){

    	$this->display();
    }
    public function doAdd(){
    	if(!IS_POST){
            exit("bad request");
        }
        
        $subjectModel = D("subject");
        if(!$subjectModel->create()){
            $this->error($subjectModel->getError());
        }
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize  = 3145728 ;// 设置附件上传大小
        $upload->allowExts  = array('swf');// 设置附件上传类型
        $upload->rootPath = './Public';
        $upload->savePath =  '/uploads/';// 设置附件上传目录    
        $uploadPic = $upload->upload(); 
        if(!$uploadPic) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{                  
            $data['title'] = I("post.title");
            $data['href'] = __ROOT__.'/Public'.$uploadPic['href']['savepath'].$uploadPic['href']['savename'];
            $data['publisher'] = I("post.publisher");
            $data['publishTime'] = I("post.publishTime");
            $data['summary'] = I("post.summary");
            if($subjectModel->add($data)){
                $this->success("添加成功",U("lists"));
            }else{
                $this->error("添加失败");
            }
        }
    }

    public function lists(){
    	$subjectModel = D("subject");
        //页码
        $count  = $subjectModel->count();    //计算总数
        $Page   = new \Think\Page($count, 4);
        $subjects   = $subjectModel->limit($Page->firstRow. ',' . $Page->listRows)->order('id asc')->select();
        $page = $Page->show();
        $this->assign("page",$page);
        $this->assign("subject",$subjects);
        
        $this->show();
    }
    public function edit($id=""){
    	if (IS_POST) {
            $model = M("subject");
            if($model->create()){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize  = 3145728 ;// 设置附件上传大小
                $upload->allowExts  = array('swf');// 设置附件上传类型
                $upload->rootPath = './Public';
                $upload->savePath =  '/uploads/';// 设置附件上传目录    
                $uploadPic = $upload->upload(); 
                // dump($uploadPic);exit;
                if(!$uploadPic) {// 上传错误提示错误信息
                    $this->error($upload->getError());
                }else{                  
                    $data['id'] = I("post.id");
                    $data['title'] = I("post.title");
                    $data['href'] = __ROOT__.'/Public'.$uploadPic['href']['savepath'].$uploadPic['href']['savename'];
                    $data['publisher'] = I("post.publisher");
                    $data['updateTime'] = I("post.updatetime");
                    $data['summary'] = I("post.summary");
                    $result = $model->where("id='$id'")->save($data);
                    if($result !== false){
                        $this->success("修改成功", U("S/lists"));
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
            $subject = M("subject")->find($id);
            $this->assign("subject", $subject);
            $this->show();
        }
    }
    public function del(){
    	$id = isset($_GET['id']) ? intval($_GET['id']) : '';
        if ($id == '') {
            exit("bad param!");
        }
        if(M("subject")->delete($id)){
            $this->success("删除成功！");
        }
    }

}

?>