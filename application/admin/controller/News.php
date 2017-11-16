<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use app\admin\model\Cate as CateModel;
use app\admin\model\News as NewsModel;
class News extends Common
{
     public function news_manage(){
        $newsres=db('news')->alias('a')->join('mk_cate b','a.cateid=b.id')->field('a.*,b.cate_name')->order("id desc")->select();
        //dump($newsres);die;
        foreach($newsres as $k=>$v){
            $newsres[$k]['thumb']=explode(",",$v['thumb']);
        }
        $this->assign(['newsres'=>$newsres]);
        return $this->fetch();
    }
    public function news_add(){
        if(request()->isPost()){
            $data=input('post.');
            $news=new NewsModel;
            //控制层添加图片方法
            // if($_FILES['thumb']['tmp_name']){
            //     $file=request()->file("thumb");
            //     $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            //     if($info){
            //         $thumb=ROOT_PATH . 'public' . DS . 'uploads'.'\\'.$info->getSaveName();
            //        $data['thumb']=$thumb;
            //     }
            // }
            // 方法二
            //使用钩子函数时，添加数据只能使用模型层的方法，用的比较多
            $data['addtime']=time();
            //dump($data);die;
            if($news->save($data)){
                $this->success("添加成功",url('news_manage'));
            }else{
                $this->error("添加失败");
            }
            return;
        }
        $cate=new CateModel();
        $cateres=$cate->catetree();
        $this->assign('cateres',$cateres);
        return $this->fetch();
    }
    public function news_update(){
        if(request()->isPost()){
            $data=input('post.');
            $news=new NewsModel();
            //dump($data);die;
            $res=$news->save($data,['id'=>$data['id']]);
            if($res){
                $this->success("修改成功",url('news_manage'));
            }else{
                $this->error("修改失败");
            }
           return;
        }
        $result=db('news')->find(input('id'));
        $result['thumb']=explode(",",$result['thumb']);
        //dump($result);die;
        $cate=new CateModel();
        $cateres=$cate->catetree();
        $this->assign(['cateres'=>$cateres,'result'=>$result]);
        return $this->fetch();
    }
    public function news_delete(){
        $res=NewsModel::destroy(input('id'));
        //dump($res);die;
        if($res){
            $this->success("删除成功",url('news_manage'));
        }else{
            $this->error("删除失败");
        }
    }
}
