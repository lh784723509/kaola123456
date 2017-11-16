<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Carousel extends Common
{
    public function carousel_manage()
    {
     	$res=Db::name("carousel")->paginate(1);
     	//dump($res);
        return $this->fetch("carousel/carousel_manage",["res"=>$res]);
    }
    public function carousel_add()
    {
	  	if(request()->isPost()){
	  		//判断是否得到值
	  		$data=input("post.");
	  		//获取表单上传文件
	  		$file = request()->file('image');
	  		//判断表单上传是否成功
	  		if(is_object($file)){
		  		$info = $file->move("./static/upload");
	  			// dump($info);
	  			// 判断移动到框架应用根目录/public/uploads/ 目录下是否成功
	  			if(is_object($info)){
	  				//得到保存路径
					$path=$info->getSaveName();	
					$data['path']=$path;
					$data['addtime']=time();
					// dump($data);
					$res=Db::name('carousel')->insert($data);
					if($res){
						return $this->redirect("carousel/carousel_manage");
					}
	  			}
	  		}
	  	}else{
	  		return $this->fetch("carousel/carousel_add");
	  	}
	}
	public function carousel_delete(){
		$id=input('get.id');
		$res=DB::name('carousel')->delete($id);
		if($res){
			$this->success("图片删除成功",url("carousel/carousel_manage"));
		}else{
			$this->error("删除失败");
		}
	}
	public function carousel_update(){
        $id=input('get.id');
        // dump($id);
        $res=Db::name('carousel')->where('id',$id)->find();
        // dump($res);
        return $this->fetch("carousel/carousel_update",["result"=>$res]);
    }
    public function carousel_update_action(){
        if(request()->isPost()){
	        $data=input('post.');
	        // dump($res);
	        $file = request()->file('image');
	        //判断表单上传是否成功
	  		if(is_object($file)){
		  		$info = $file->move("./static/upload");
	  			// dump($info);
	  			// 判断移动到框架应用根目录/public/uploads/ 目录下是否成功
	  			if(is_object($info)){
	  				//得到保存路径
					$path=$info->getSaveName();	
					$data['path']=$path;
					$data['addtime']=time();
					// dump($data);
					$res=Db::name('carousel')->update($data);
					if($res){
						return $this->redirect("carousel/carousel_manage");
					}else{return $this->error("数据库修改失败");} 
	  			}else{return $this->error("上传图片保存失败");}
	  		}else{return $this->error("上传图片失败");}   	
        }else{return $this->error("表单提交方式有误");}
    }
}
