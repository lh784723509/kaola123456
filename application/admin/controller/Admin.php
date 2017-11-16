<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Admin extends Common
{
    public function _initialize(){
      if(session("res")==null){
       $this->error("您尚未登录系统","index/dologin");
      }
    }
    public function admin_manage()
    {
      $list=DB::name('admin')->order('id desc')->paginate(2);//得到一个对象
      $role="role";
      $this->assign('list', $list);
      $this->assign('role', $role);
      return $this->fetch("admin/admin_manage");
    }
     public function admin_delete($id){
        if(session('res')['role']==1){
            $res=DB::name('admin')->delete($id);
            if($res){
               return $this->redirect("admin/admin_manage");
            }
        }else{
            return $this->redirect("admin/admin_manage"); 
        }
    }
    public function admin_add()
    {   
        if(session('res')['role']==1){
            if(request()->isPost()){
                $data=input('post.');
                if(!preg_match("/^\w{5,20}$/",$data['name'])){
                    return $this->error("用户名输入格式错误");
                }else{
                   $res= Db::name('admin')->column('name');
                   // dump($res);
                   if(in_array($data['name'],$res)){
                        return $this->error("此管理员名已存在");
                   }else{
                        $data['password']=md5($data['password']);
                        $res=DB::name('admin')->insert($data);
                        if($res){
                             return $this->redirect("admin/admin_manage");
                        }
                    }
                }
            }else{
                return $this->fetch("admin/admin_add");
            } 
        }else{
            $this->error("普通管理员无此权限");
        }
    }
    public function admin_update(){
      if(session('res')['role']==1){
       if(request()->isPost()){
           $data=input('post.');
           // dump($data);die; 
           if($data['password']){
              $data['password']=md5($data['password']);
              $res=Db::name('admin')->update($data);
               // dump($res);
              if($res){
                  $this->success("数据修改成功",url("admin/admin_manage"));
               }else{
                  return $this->error("数据修改失败");
               }
            }else{
              $this->error("密码不能为空");
            }
            return;
        }
        $id=input('get.id');
        // dump($id);
        $res=Db::name('admin')->field('id,name,role')->find($id);
        // dump($res);
          return $this->fetch("admin/admin_update",["result"=>$res]); 
      }else{
        $this->error("普通管理员无此权限");
      }
    }
    public function admin_search(){
      $keywords=input('keywords');
      if(preg_match("/超/",$keywords)){
        $serres=Db::name('admin')->where('id','like','%'.$keywords.'%')->whereOr('name','like','%'.$keywords.'%')->whereOr('role',1)->paginate(1,false,$config=['query'=>array('keywords'=>$keywords)]);
        // dump($serres);die;
      }elseif(preg_match("/普/",$keywords)){
        $serres=Db::name('admin')->where('id','like','%'.$keywords.'%')->whereOr('name','like','%'.$keywords.'%')->whereOr('role',2)->paginate(1,false,$config=['query'=>array('keywords'=>$keywords)]);
      }else{
        $serres=Db::name('admin')->where('id','like','%'.$keywords.'%')->whereOr('name','like','%'.$keywords.'%')->paginate(1,false,$config=['query'=>array('keywords'=>$keywords)]);
      }
      $role="role";
      $this->assign('keywords',$keywords);
      $this->assign('role', $role);
      $this->assign('serres',$serres);
      return $this->fetch('admin_search');  
    }
    public function loginout(){
        $res=session("res",null);
        //dump($res);die;返回值为null
        return $this->fetch("index/login");
    }
    public function edite_password($id){
       $result=Db('admin')->find($id);
       // dump($result);die;
       //dump(input("post."));die;
      if(request()->isPost()){
        $data=input('post.');
        //dump($data);die;
        if(!$data['name']){
          $this->error("用户名不能为空");
        }else{
          if(!$data['password']){
            $this->error("密码不能为空");
          }else{
            if($data['password']==$data['re_password']){
                $data['password']=md5($data['password']);
               //dump($data['password']);die;
                $res=Db::name('admin')->where('id',$id)->setField('password',$data['password']);
                //dump($res);die;
                if($res){
                  $this->success("密码修改成功",url('index/index'));
                }
            }else{
              $this->error("两次输入密码不一致");
            }
          }
        }
        return;
      }
      $this->assign('result',$result);
      return $this->fetch();
    }
}
