<?php
namespace app\home\controller;
use app\home\controller\Common;
use think\Db;
class Index extends Common
{
    public function index()
    {
        return $this->fetch('index');
    }
     public function dologin()
    {
        if(request()->isPost()){
            $data=input('post.');
            //dump($data); 
            if(!input('post.username')){
                $this->error("用户名不能为空");
            }
            $res_code= $this->validate($data,[
        'checkcode'=>'require|captcha']);
            // dump($res_code);
            if($res_code !== true ){
               $this->error("验证码输入有误");
            }
            $res= Db::name('member')->where('name',input('post.username'))->find();
            //dump($res);
            if($res){
                if($res['state']==2){
                    $this->error("此用户因不符合规定已经禁用");
                }
                if(md5($data['password'])==$res['password']){
                    session('res',$res);
                    return $this->redirect('index');
                }else{
                    $this->error("输入密码有误");
                }
            }else{
                $this->error("用户名输入有误");
            }     
        }else{
            return $this->fetch('index/login');
        }
    }
      public function register()
    {
        if(request()->isPost()){
            $data=input('post.');
            // dump($data);
            //验证码判断
            $res_code= $this->validate($data,[
        'checkcode'=>'require|captcha']);
            if($res_code !== true ){
                $this->error("请输入正确的验证码");
            }
            //用户名的判断
            if(!preg_match("/^\w{5,20}$/",$data['name'])){
                $this->error("用户名输入格式错误");
            }else{
                $res= Db::name('member')->column('name');
                // dump($res);
                if(in_array($data['name'],$res)){
                    $this->error("此管理员名已存在");}
            }
            //密码判断
            if($data['password']!==$data['re_password']){
                $this->error("密码不一致");
            }
            //判断手机号码
            if(!preg_match("/^1[34578]\d{9}$/",$data['phone'])){
                $this->error("手机号码输入格式有误");
            }else{
                $res= Db::name('member')->column('phone');
                // dump($res);
                if(in_array($data['phone'],$res)){
                    $this->error("此电话号码已存在");} 
            }
            //组合插入数据表数组
        $data=['name'=>$data['name'],'password'=>md5($data['password']),'phone'=>$data['phone'],'state'=>1,'addtime'=>time()];
        // dump($data);
        // 插入数据表并判断
        $res= Db::name('member')->insert($data);
        // dump($res);
        if($res){
            $this->success("注册成功",'dologin');
        }else{
            $this->error('register');
        }
        }else{
           return $this->fetch('register'); 
        }
    }
    public function loginout(){
        session("res",null);
        return $this->fetch("index/login");
    }
    public function update(){
        if(request()->isPost()){
            $data=input('post.');
            //dump(input('post.'));
            //array (size=3)
  //'name' => string '' (length=0)
  //'password' => string '' (length=0)
  //'re_password' => string '' (length=0)
            $result=Db::name('member')->where('name',$data['name'])->find();
            if($result){
                if($data['password']==$data['re_password']){
                    $res=Db::name('member')->where('name',$data['name'])->setField('password',md5($data['password']));
                    if($res){
                        $this->success("修改密码成功",url('dologin'));
                    }else{
                        $this->error("修改密码失败");
                    }
                }else{
                    $this->error('两次输入密码不一致');
                }
            }else{
                $this->error("用户名不存在");
            }
        }else{
            return $this->fetch('update');
        }
    }
}
