<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"E:\software\wamp\www\milk\public/../application/admin\view\carousel\carousel_update.html";i:1504789377;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css" />
	<link rel="stylesheet" href="__ADMIN__/css/content.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">添加轮播图</a></div>
		<div class="public-content">
			<div class="public-content-cont">
			<form action="<?php echo url('carousel/carousel_update_action'); ?>" enctype="multipart/form-data" method="post">
				<div class="form-group">
					<!-- <label for="">图片名称</label> -->
					<input class="form-input-txt" type="hidden" name="id" value="<?php echo $result['id']; ?>" />
				</div>
				<div class="form-group">
					<label for="">图片名称</label>
					<input class="form-input-txt" type="text" name="title" value="<?php echo $result['title']; ?>" />
				</div>
				<div class="form-group">
					<label for="">图片描述</label>
					<textarea class="form-input-textara" type="text" name="content"><?php echo $result['content']; ?></textarea>
				</div>
				<div class="form-group">
					<label for="">图片上传</label>
					<input type="file" name="image" style="margin-top:8px"/>
				</div>
				<div class="form-group" style="margin-left:150px;margin-top:30px">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
				</div>
			</form>
			</div>
		</div>
	</div>
<script src="__ADMIN__/kingediter/kindeditor-all-min.js"></script>
<script>
	 KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
</script>
</body>
</html>