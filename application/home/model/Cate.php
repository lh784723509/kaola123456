<?php 
	namespace app\home\model;
	use think\Model;
	class Cate extends Model{
		public function getchildrenid($cateid){
			$cateres=$this->select();
			// dump($cateid);die;
			// dump($cateres);die;
			return $this->_getchildrenid($cateres,$cateid);
		}
		public function _getchildrenid($cateres,$pid){
			static $arr=array();
			foreach($cateres as $k=>$v){
				if($v['pid']==$pid){
					$arr[]=$v['id'];
					$this->_getchildrenid($cateres,$v['id']);
				}
			}
			return $arr;
		}
	}
 ?>