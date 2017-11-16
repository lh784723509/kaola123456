<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
      if(session("res")==null){
       $this->error("您尚未登录系统","index/dologin");
      }
    }
}
