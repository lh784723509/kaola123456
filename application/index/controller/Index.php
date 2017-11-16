<?php
	namespace app\index\controller;
	use think\Controller;
	class Index extends Controller{
		public function index(){
			$arr=array([10,20,30,"one"],[10,20,30,"one,two"],[10,20,30,"one,two,three"]);
			foreach($arr as $k=>$v){
				$arr[$k][3]=explode(",",$v[3]);
			}
			$this->assign(['arr'=>$arr]);
			return $this->fetch();
		}

	}
 ?>