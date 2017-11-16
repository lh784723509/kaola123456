<?php 
	namespace app\home\controller;
	header("content-type:text/html;charset=utf8");
	use think\Controller;
	class Common extends Controller{
		public function _initialize(){
			$this->getNavCates();
		}
		public function getNavCates(){
			$cateres=db('cate')->where(['pid'=>0])->select();
			//dump($cateres);die;
			foreach($cateres as $k=>$v){
				$children=db('cate')->where(array('pid'=>$v['id']))->select();
				//dump($children);die;
				if($children){
					$cateres[$k]['children']=$children;
				}else{
					$cateres[$k]['children']=0;
				}
			}
			//dump($cateres);die;
			$this->assign('cateres',$cateres);
		}
	}
 ?>