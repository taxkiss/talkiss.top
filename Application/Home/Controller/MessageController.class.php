<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;

class MessageController extends Controller{
    public function post(){
        $user=D('Message');
        if (!empty($_POST)){
            //判断是否有文件上传，如果有就实例化Upload,把附件上传到服务器指定的位置，然后把附件的路径名得到，存入$_Post
            if (!empty($_FILES)){
                $config=array(
                    //附件保存的路径是：根目录+保存路径
                  'rootPath'=>'./Application/Public/' , //保存根目录
                  'savePath'=>'Upload/',//保存路径
                  'maxSize'=>3145728,
                );
                //实例化
                $upload=new \Think\Upload($config);
                //show_bug($_FILES);
                $result=$upload->uploadOne($_FILES['mespicture']);
                //show_bug($result);
                if (!$result){
                    show_bug($upload->getError());
                }else{//上传成功就保存路径到数据库
                    $mespicture=$result['savepath'].$result['savename'];
                    $_POST['mespicture']=$mespicture;//将图片保存在POST中
                }
            }
            
            $_POST['mestime']=date("Y:m:d H:i:s");
            $_POST['useremail']=$_SESSION['useremail'];
            
            //利用create方法收集表单数据,create()方法可以实现数据过滤
            $user->create();
            $result=$user->add();
           //$result=true;
            if (!$result){
                echo "添加商品信息失败！";
            }else{
                redirect('../Index/main');//自动跳转到主页面
            }
        }else{
            $this->display();
        }
    }
    
    //显示文章具体内容
    public function article(){
        if ($_GET['mesid']){
            session('mesid',$_GET['mesid']);
            $message=M('message');
            $condition['mesid']=$_GET['mesid'];
            if (($_SESSION['useremail']!=$_COOKIE['reademail'])|($_SESSION['mesid']!=$_COOKIE['mesid'])){
                $message->where($condition)->setInc('mesread');
            } 
            session('mesid',$condition['mesid']);
            $info=$message->where($condition)->find();
            //show_bug($info);
            
            $this->assign('info',$info);        
            
            
            //显示评论
            $comment=M('comment');
            $com['mesid']=$_SESSION['mesid'];
            $comments=$comment->where($com)->order('ctime desc')->select();
            $this->assign('comments',$comments);
            //show_bug($comments);
            $this->display();
           /*  cookie('reademail',$_SESSION['useremail'],10); */
        }
        
    }
    
    //发表评论
    public function comment(){
        $comment=D('comment');
        $date=$comment->create();
        $date['cuseremail']=$_SESSION['useremail'];
        $date['cusername']=$_SESSION['username'];
        $date['ctime']=date("Y:m:d H:i:s");
        $date['mesid']=$_SESSION['mesid'];
        if ($date){
            if ($result=$comment->add($date)){
                redirect("./article?mesid=$_SESSION[mesid]");
            }
        }
        //show_bug($date);
    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}