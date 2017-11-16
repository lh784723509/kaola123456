<?php
namespace app\admin\controller;
use app\admin\controller\Common;
use think\Db;
class Manage extends Common
{
    public function manage_manage()
    {
     	$res=Db::name("manage")->paginate(1);
     	//dump($res);
        return $this->fetch("manage/manage_manage",["res"=>$res]);
    }
    public function manage_add()
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
					$res=Db::name('manage')->insert($data);
					if($res){
						return $this->redirect("manage/manage_manage");
					}
	  			}
	  		}
	  	}else{
	  		return $this->fetch("manage/manage_add");
	  	}
	}
	public function manage_delete(){
		$id=input('get.id');
		$res=DB::name('manage')->delete($id);
		if($res){
			$this->redirect("manage/manage_manage");
		}
	}
	public function manage_update(){
        $id=input('get.id');
        // dump($id);
        $res=Db::name('manage')->where('id',$id)->find();
        // dump($res);
        return $this->fetch("manage/manage_update",["result"=>$res]);
    }
    public function manage_update_action(){
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
					$res=Db::name('manage')->update($data);
					if($res){
						return $this->redirect("manage/manage_manage");
					}else{return $this->error("数据库修改失败");} 
	  			}else{return $this->error("上传图片保存失败");}
	  		}else{return $this->error("上传图片失败");}   	
        }else{return $this->error("表单提交方式有误");}
    }
}
