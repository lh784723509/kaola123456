<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
        if(session("res")==null){
            return $this->fetch("index/login");
        }else{
            static $c;
            session("counter")?($c=session("counter")+1):$c;
            session("counter",$c);
            return $this->fetch("index/index");
        }
    }
    public function dologin(){
        $data=input("post.");
        // dump($data);
        $res_code= $this->validate($data,[
        'checkcode'=>'require|captcha']);
        // dump($res_code);
        if($res_code !== true ){
            return $this->fetch('index/login',['res' => $res_code,]);
        }
        $res= Db::name('admin')->where('name',input('post.username'))->find();
        // dump($res);
        if($res){
            if($res['password'] == md5(input('post.password'))){
                session("res",$res);
                return $this->redirect("index/index");
            }else{
                return $this->fetch('index/login',['res' => "密码错误",]);
            }
        }else{
            return $this->fetch('index/login',['res' => '用户名错误',]);
        } 
    }
    public function main(){
         return $this->fetch("index/main");
    }
}
