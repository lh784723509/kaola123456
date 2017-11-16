<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Cate as CateModel;
use app\admin\model\News as NewsModel;
class Cate extends Common
{
    protected $beforeActionList = ['delsoncate'=>['only'=>'cate_delete']];
    public function cate_manage()
    {
        $cate=new CateModel();
        if(request()->isPost()){
            $data=input('post.');//得到一个数组
            foreach($data as $k=>$v){
                $cate->update(['id'=>$k,'sort'=>$v]);
            }
            $this->success("更新排序成功",url('cate_manage'));
            return;//只负责处理数据
        }
        $cateres=$cate->catetree();
        // dump($cateres);
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }
    public function cate_add(){
        $cate=new CateModel();
        if(request()->isPost()){
            //添加数据
            $add=$cate->save(input('post.'));//save既可以 进行添加，又可以进行修改//返回值为添加数据的条数
            //判断是否添加成功
            if($add){
                $this->success("添加栏目成功",url('cate_manage'));
            }else{
                $this->error('添加失败');
            }
        }
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch('cate_add');
    }
    public function cate_delete(){
        $del=db('cate')->delete(input('id'));
        if($del){
           $this->success('删除栏目成功',url('cate_manage'));
        }else{
            $this->error("删除栏目失败");
        }
    }
    public function delsoncate(){
        //前置方法中得到传递的input值
        $cateid=input('id');
        $cate=new CateModel();
        $sonids=$cate->getchildrenid($cateid);
        //dump($sonid);得到子类的id组成的数组
        $cateallid=$sonids;
        $cateallid[]=$cateid;
        foreach($cateallid as $k=>$v){
            $news=new NewsModel();
            $news->where(['cateid'=>$v])->delete();
        }
        if($sonids){
            $res=db('cate')->delete($sonids);//批量删除参数为一个数组
        }
    }
    public function cate_update($id){
        $cate=new CateModel();
        //判断是否是post表单提交过来的，此段代码负责数据的处理
        if(request()->isPost()){
            //修改数据
            $save=$cate->save(input('post.'),['id'=>input('id')]);
            //判断数据是否修改成功
            if($save){
                $this->success("修改栏目成功",url('cate_manage'));
            }else{
                $this->error("修改栏目失败");
            }
            return;
        }
        $cates=$cate->find($id);
        $cateres=$cate->catetree();
        $this->assign(array('cateres'=>$cateres,'cates'=>$cates));
        return $this->fetch();
    } 
}
