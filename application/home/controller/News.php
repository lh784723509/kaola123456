<?php
namespace app\home\controller;
header("content-type:text/html;charset=utf8");
use app\home\controller\Common;
use app\home\model\News as NewsModel;
	class News extends Common{
		public function news_list(){
			$news=new NewsModel();
			$res=db("cate")->where("id",input('cateid'))->field('pid')->select();//得到父id
			//得到所有的子id,据此得到cate_name
			$allcateid=$news->getallids($res[0]['pid']);
			$res1=db('cate')->field("cate_name")->where("id IN($allcateid)")->select();
			//查找所有的文章
			$res2=db('news')->where("cateid IN($allcateid)")->field("title,addtime,id")->order("id desc")->paginate(3);
			//dump($res2);die;
			$this->assign(['res'=>$res,'res1'=>$res1,'res2'=>$res2]);
			return $this->fetch();
		}
		public function news_details(){
			//dump(input('id'));die;
			$res=db('news')->where('id',input('id'))->select();
			//dump($res);die;
			$this->assign('res',$res);
			return $this->fetch();
		}
	}
 ?>