<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function index()
    {
        $this->display("index");
    }
    public function login()
    {
    	$this->display("login");
    }
    public function savelogin()
    {
        $usertable = M("user");
        $password = MD5($_POST['password']);
        $data = $usertable->where("email = '".$_POST['email']."'")->find();
        if(!empty($data) && $password == $data['password']){
            session("email",$data['email']);
            $this->success("登录成功","index");
        }else{
            $this->error("登录失败 帐号密码不正确");
        }
    }
    public function singup()
    {
    	$this->display("singup");
    }
    public function addUser()
    {
    	$code = rand("100000","999999");
    	$password = $_POST['password'];
    	$data = array("email"=>$_POST['email'],"code"=>$code,"password"=>$password);
    	session("data",$data);
    	$content = "验证码为: ".$code;
    	if(SendMail($_POST['email'],"验证码",$content)){
            $this->success('发送成功！',"submitcode");
    	}else{
            $this->error('发送失败');
        }
    }
    public function submitcode()
    {
    	$email = session("data");
    	$this->assign("email",$email['email']);
		$this->display("submitcode");
    }
    public function savecode()
    {
        $data = session("data");
    	if((int)$_POST['code'] == (int)$data['code']){
    		$usertable = M("user");
    		$info = array("email"=>$data['email'],"password"=>MD5($data['password']));
    		$status = $usertable->add($info);
    		if($status){
                session(null);
    			$this->success("注册成功","login");
    		}
    	}else{
    		$this->error("验证码错误");
    	}
    }
    public function outlogin()
    {
        session(null);
        $this->success("退出成功");
    }
    public function yourself()
    {
        $user = M("user");
        $task = M("tasklist");
        $email = session("email");
        $data = $user->where("email = '".$email."'")->find();
        $rdata = trim($data['tasklist'],",");
        $arr = explode(",",$rdata);
        $tasklist = $task->select();
        $info = array();
        foreach($arr as $k=>$v){
            $info[] = $tasklist[(int)$v-1];
        }
        $this->assign("info",$info);
        $this->assign("money",$data['money']);
        $this->display("yourself");
    }
    public function tasklist()
    {
        $task = M("tasklist");
        $user = M("user");
        $data = $user->where("email = '".session("email")."'")->field("tasklist")->find();
        $info = $task->select();
        $this->assign("info",$info);
        $this->assign("data",$data['tasklist']);
        $this->display("tasklist");
    }
    public function acceptTask()
    {
        $user = M("user");
        $taskid = $_GET['id'];
        $email = session("email");
        $s = $user->where("email = '".$email."' and tasklist like '%".$taskid."%'")->find();
        if(!empty($s)){
            $this->error("已经接取该任务");
        }
        $tasklist = $user->where("email = '".$email."'")->field("tasklist")->find();
        if(empty($tasklist['tasklist'])){
            $t = $taskid.",";
        }else{
            $t = $tasklist['tasklist'].$taskid. ",";
        }
        $data['tasklist'] = $t;
        $status = $user->where("email = '".$email."'")->save($data);
        if($status){
            $this->success("接受成功");
        }else{
            $this->error("接受成功~");
        }
    }
    public function saveTask()
    {
        $id = $_POST['id'];
        $money = $_POST['money'];
        $user = M("user");
        $email = session("email");
        $data = $user->where("email = '".$email."'")->find();
        $rdata = trim($data['tasklist'],",");
        $arr = explode(",",$rdata);
        $str = array("tasklist"=>"");
        $str['money'] = (int)$data['money']+(int)$money;
        foreach ($arr as $key => $value) {
            if($value != $id){
                $str['tasklist'] .= $value.",";
            }
        }
        $status = $user->where("email = '".$email."'")->save($str);
    }
    public function store()
    {
        $store = M("store");
        $user = M("user");
        $data = $store->select();
        $email = session("email");
        $money = $user->where("email = '".$email."'")->field("money")->find();
        $this->assign("money",$money['money']);
        $this->assign("data",$data);
        $this->display("store");
    }
    public function buy()
    {
        $user = M("user");
        $email = session("email");
        $money = $user->where("email = '".$email."'")->field("money")->find();
        $m = (int)$money['money']-(int)$_POST['total'];
        $data = array();
        $data['money'] = $m;
        $status = $user->where("email = '".$email."'")->save($data);
        if($status){
            return true;
        }else{
            return false;
        }
    }
}
