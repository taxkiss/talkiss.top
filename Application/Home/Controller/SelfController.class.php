<?php
namespace Home\Controller;
use Think\Controller;
use Component\Page;
use Vendor\ThinkImage\ThinkImage;
use Think\Upload;

class SelfController extends Controller {
     public function index(){
        // 实例化User对象
        $user = D('user');
        if (IS_POST){
            $date=$user->create();
            $date['userpic']=$_SESSION['userpic'];
            foreach( $date as $k=>$v){
                if( !$v )
                    unset( $date[$k] );
            }
            //修改数据库
            if ($id = $user->save($data)) {
                $this->success('注册成功，请登录', U('Self/index'), 2);
            } else {
                $this->error('注册失败');
            } 
            //show_bug($date);
        }else{
        
            $where['useremail']=$_SESSION['useremail'];
            $useri=$user->where($where)->find();
            //show_bug($useri);
            $this->assign('useri',$useri);
            $this->display();
        }
        
    }
    
    public function baidumap(){
        $this->display();
    }
    
    public function update(){
        $user=M('user');
        $where['useremail']=$_SESSION['useremail'];
        $useri=$user->where($where)->find();
       // show_bug($useri);
        $this->assign('useri',$useri);
        $this->display();
       // echo __CONTROLLER__;
        //echo __ROOT__;
    }
    
    

//上传头像
	public function uploadImg(){////kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
		$upload = new Upload(C('UPLOAD_CONFIG'));	// 实例化上传类
		//头像目录地址
		//$path = './Avatar/';
		
		$path="./Avatar/".$_SESSION['useremail']."/";
		$path=iconv("utf-8", "gb2312", $path);
		if (!is_dir($path)){
		    mkdir($path);
		}
		if(!$upload->upload()) {						// 上传错误提示错误信息
			$this->ajaxReturn(array('status'=>0,'info'=>$upload->getErrorMsg()));
		}else{											// 上传成功 获取上传文件信息
			$temp_size = getimagesize($path.'temp.jpg');
			if($temp_size[0] < 100 || $temp_size[1] < 100){//判断宽和高是否符合头像要求
				$this->ajaxReturn(array('status'=>0,'info'=>'图片宽或高不得小于100px！'));
			}
			$this->ajaxReturn(array('status'=>1,'path'=>__ROOT__.'/Avatar/'.$_SESSION['useremail'].'/'.'temp.jpg'));
		}
	}

	//裁剪并保存用户头像
	public function cropImg(){
		//图片裁剪数据
		$params = I('post.');						//裁剪参数
		if(!isset($params) && empty($params)){
			$this->error('参数错误！');
		}
		//头像目录地址
		$path = './Avatar/'.$_SESSION['useremail'].'/';
		//要保存的图片
		$real_path = $path.'avatar.jpg';
		//临时图片地址
		$pic_path = $path.'temp.jpg';
		//实例化裁剪类
		$Think_img = new ThinkImage(THINKIMAGE_GD);
		//echo "OK";
		//裁剪原图得到选中区域
		$Think_img->open($pic_path)->crop($params['w'],$params['h'],$params['x'],$params['y'])->save($real_path);
		//生成缩略图
		$Think_img->open($real_path)->thumb(100,100, 1)->save($path.'avatar_100.jpg');
		$Think_img->open($real_path)->thumb(60,60, 1)->save($path.'avatar_60.jpg');
		$Think_img->open($real_path)->thumb(30,30, 1)->save($path.'avatar_30.jpg');
		//echo $path.'avatar_100.jpg';
		session('userpic',$path.'avatar_100.jpg');
		
	    $this->success('上传头像成功');
	}
    
     
}
