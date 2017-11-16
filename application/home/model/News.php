<?php 
	namespace app\home\model;
	use think\Model;
	use app\home\model\Cate;
	class News extends Model{
		public function getallids($cateid){
			$cate=new Cate();
			$allcateid=$cate->getchildrenid($cateid);
			$allcateid[]=$cateid;
			//dump($allcateid);die;
			$strid=implode(",",$allcateid);
			return $strid;
		}
	}
 ?>