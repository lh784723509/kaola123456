<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Conf as ConfModel;
class Conf extends Controller
{
   public function conf_manage(){
    return $this->fetch();
   } 
   public function conf_add(){
    return $this->fetch();
   }
   public function conf_update(){
    return $this->fetch();
   }
   public function conf_delete(){
    
   }
}
