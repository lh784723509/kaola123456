<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\software\wamp\www\milk\public/../application/admin\view\news\news_add.html";i:1505392746;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css" />
	<link rel="stylesheet" href="__ADMIN__/css/public.css" />
	<link rel="stylesheet" href="__ADMIN__/css/content.css" />
</head>
<body>
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">添加修改分类</a></div>
		<div class="public-content">
			<div class="public-content-cont">
				<form action="<?php echo url("","",true,false);?>" method='post' enctype="multipart/form-data">
					<div class="form-group">
						<label for="">标题</label>
						<input type="text" class="form-input-txt" name="title">
					</div>
					<div class="form-group">
						<label for="">作者</label>
						<input type="text" class="form-input-txt" name="author">
					</div>
					<div class="form-group">
						<label for="">关键词</label>
						<input type="text" class="form-input-txt" name="keywords">
					</div>
					<div class="form-group">
						<label for="">描述</label>
						<textarea class="form-input-textara" type="text" name="desc"></textarea>
					</div>
					<div class="form-group">
						<label for="username">缩略图</label>
						<input type="file" name="thumb[]"  placeholder=""/>
						<input type="file" name="thumb[]"  placeholder=""/>
						<input type="file" name="thumb[]"  placeholder=""/>
					</div>
					<div class="form-group">
						<label for="">所属栏目</label>
						<select name="cateid" class="form-select">
							<option value="0">顶级分类</option>
							<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $v['id']; ?>"><?php if($v['level'] != 0): ?>|<?php endif; ?>
									<?php echo str_repeat("_",$v['level']*4); ?><?php echo $v['cate_name']; ?>
								</option>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">内容</label>
						<textarea id="editor_id" name="content"  class="form-input-textara" style="width:700px;height:300px;">
							&lt;strong&gt;HTML内容&lt;/strong&gt;
						</textarea> 
					</div>
					<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="__ADMIN__/kingediter/kindeditor-all-min.js"></script>
	<script src="__ADMIN__/js/laydate.js"></script>
	<script>
	KindEditor.ready(function(K) {
    	window.editor = K.create('#editor_id');
    });
	</script>
</body>
</html>