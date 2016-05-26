<?php
namespace Home\Controller;
use Think\Controller;
use Component\Page;

class IndexController extends Controller {
/*     public function index(){
        $this->display();
    } */
    /**
     * 用户登录
     */
    public function index()
    {
        $_id=$_GET['id'];
        if ($_id=='login'){
        // 判断提交方式
        if (IS_POST) {
            // 实例化User对象
            $user = D('user'); 
            // 自动验证 创建数据集
            if (!$data = $user->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($user->getError());
            }
            // 组合查询条件
            // 组合查询条件
            $where = array();
            $where['useremail'] = $data['useremail'];
            $result = $user->where($where)->field('useremail,username,password,lastdate,lastip,loginnum ')->find();
            //echo "<pre>";
            //print_r($result);
            // 验证用户名 对比 密码
            if ($result && $result['password'] == $result['password']) {
                // 存储session
                session('useremail', $result['useremail']);          // 当前用户email
                session('username', $result['username']);   // 当前用户名
                session('lastdate', $result['lastdate']);   // 上一次登录时间
               // session('lastip', $result['lastip']);       // 上一次登录ip
                // 更新用户登录信息
                $condition['useremail'] = session('useremail');
                
                $update['lastip']=get_client_ip();
                session('lastip', $update['lastip']);
                $update['lastdate']=date("Y:m:d H:i:s");
                
                M('user')->where($condition)->save($update);//更新登录时间和IP
                M('user')->where($condition)->setInc('loginnum');   // 登录次数加 1
                
                $this->success('登录成功,正跳转至系统首页...', U('Index/main'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
        }else{//注册
            /**
             * 用户注册
             */
            // 判断提交方式 做不同处理
            if (IS_POST) {
                // 实例化User对象
                $user = D('user');
                // 自动验证 创建数据集
                if (!$data = $user->create()) {
                    // 防止输出中文乱码
                    header("Content-type: text/html; charset=utf-8");
                    exit($user->getError());
                }
                //插入数据库
                if ($id = $user->add($data)) {
                    $this->success('注册成功，请登录', U('Index/index'), 2);
                } else {
                    $this->error('注册失败');
                }
            } else {
                $this->display();
            }
        }
    }


    /**
     * 用户注销
     */
    public function logout()
    {
        // 清楚所有session
        //echo __CONTROLLER__;
        session(null);
        redirect(U('Index/index'), 2, '正在退出登录...');
    }
    /**
     * 验证码
     */
    public function verify()
    {
        // 实例化Verify对象
        $verify = new \Think\Verify();
        // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
    }
    
    //主页
    public function main(){
        $user=M('user');
        $contion['useremail']=$_SESSION['useremail'];
        $date=$user->where($contion)->find();
        $this->assign('date',$date);
        
        //输出帖子
        $message=D('Message');
        $total=$message->count();
        $per=4;
        $page=new Page($total,$per);
        $sql="select * from message order by mestime DESC ".$page->limit;
        $info=$message->query($sql);
        //show_bug($info);
        
        //得出分页
        $pagelist=$page->fpage();
        $this->assign('info',$info);
        $this->assign('pagelist',$pagelist);
        
        //近期焦点
        $sql2="select max(mesread) as max from message";
        $result=$message->query($sql2);
        $max=$result[0]['max'];
        $map['mesread']=$max;
        $focus=$message->where($map)->find();
        $this->assign('focus',$focus);
        $this->display();
    }
    
    
    
    
    
    
    
    
    
    
}
