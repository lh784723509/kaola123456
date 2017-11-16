<?php
namespace app\home\controller;
header("content-type:text/html;charset=utf8");
use app\home\controller\Common;
use app\home\model\Products as ProModel;
class Products extends Common{
	public function product_list(){
		$products=new ProModel();
		$allcateid=$products->getallids(input('cateid'));
		$prolist=db('news')->where("cateid IN($allcateid)")->order("id desc")->paginate(3);
		$this->assign('prolist',$prolist);
		return $this->fetch();
	}
	public function product_details(){
		$res=db('news')->where('id',input('id'))->select();
		foreach($res as $k=>$v){
            $res[$k]['thumb']=explode(",",$v['thumb']);
        }
        // dump($res[$k]['thumb']);die;
		return $this->fetch();
	}	
}
 ?>