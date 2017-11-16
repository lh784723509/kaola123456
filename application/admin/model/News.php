<?php 
	namespace app\admin\model;
	use think\Model;
	class News extends Model{
		//钩子函数或是事件的使用
		public static function init(){
			//funciton中的参数名称可以任意给
			News::event('before_insert',function($data){
				//dump($data);die;//$data是个对象
				if($_FILES['thumb']['tmp_name']){
                	$files=request()->file("thumb");
	                foreach($files as $file){
	                	 $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
	                	if($info){
	                	//注意路径的写法
	                    $thumb=DS . 'uploads'.'/'.$info->getSaveName();
	                    //$thumb="./uploads".$info->getSaveName();两者的效果不一样
	                   	$arr[]=$thumb;
	                	}
	                }
	                //dump($arr);die;
	                $data['thumb']=implode(",",$arr);
	                //dump($data['thumb']);die;
            	}
			});
			News::event('before_update',function($data){
				//测试此方法能否生效
				//echo 111;die;
				//dump($data);die;
				//dump($_FILES);die;
				if($_FILES['thumb']['tmp_name']){
					$files=request()->file("thumb");
					//dump($files);die;
					foreach($files as $file){
						$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                		if($info){
		                	//注意路径的写法
		                   $thumb=DS . 'uploads'.'/'.$info->getSaveName();
		                   $arr[]=$thumb;
                		}
					}
					$data['thumb']=implode(",",$arr);
					//dump($data['thumb']);die;
            	}
			});
			News::event('before_delete',function($data){
				//dump(input('id'));die;
				//结果一样
				//dump($data['thumb']);die;
				//dump($data->thumb);die;
				if($data->thumb){
					$arr=explode(",",$data->thumb);
					foreach($arr as $v){
						$thumbpath=$_SERVER['DOCUMENT_ROOT'].$v;
	     				if($data->thumb){
	    					unlink($thumbpath);
	     				}	
					}
				}
			});	
		}
	}
 ?>