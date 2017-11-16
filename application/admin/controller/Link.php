<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Link extends Common
{
    public function link_manage()
    {
        $list=DB::name('link')->paginate(1);//得到一个对象
        // $role="role";
        $this->assign('list', $list);
        // $this->assign('role', $role);
        return $this->fetch("link/link_manage");
    }
    public function link_delete(){
        $id=input('get.id');
        $res=DB::name('link')->delete($id);
        // $result=DB::name('admin')->select();
        if($res){
           return $this->redirect("link/link_manage");
        }
    }
    public function link_add()
    {   
        if(request()->isPost()){
            $data=input('post.');
            $res= Db::name('link')->column('name');
            if(in_array($data['name'],$res)){
            return $this->error("此链接已存在");
            }else{
                $data['addtime']=time();
                $result=Db::name("link")->insert($data);
                if($result){
                    return $this->redirect('link_manage');
                }
            }
        }else{
            return $this->fetch('link_add');
        }          
    }
    public function link_update(){
        $id=input('get.id');
        // dump($id);
        $res=Db::name('link')->where('id',$id)->find();
        // dump($res);
        return $this->fetch("link/link_update",["result"=>$res]);
    }
    public function link_update_action(){
        if(request()->isPost()){
         $data=input('post.');
         // dump($data);
         $data['addtime']=time();
         $res=Db::name('link')->update($data);
         // dump($res);
         if($res){
            // $result=DB::name('admin')->select();
            return $this->redirect("link/link_manage");
         }else{
            return $this->error("数据修改失败");
         }
        }else{
            return $this->fetch('link/link_update');
        }
    }
}
