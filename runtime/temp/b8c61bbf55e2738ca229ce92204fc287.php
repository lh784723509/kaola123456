<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\software\wamp\www\milk\public/../application/admin\view\cate\cate_add.html";i:1505217223;}*/ ?>
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
			<div class="public-content-header">
				<h3>添加分类</h3>
			</div>
			<div class="public-content-cont">
				<form action="<?php echo url("","",true,false);?>" method='post'>
					<div class="form-group">
						<label for="">上级栏目</label>
						<select name="pid" class="form-select">
							<option value="0">顶级分类</option>
							<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $v['id']; ?>"><?php if($v['level'] != 0): ?>|<?php endif; ?>
									<?php echo str_repeat("_",$v['level']*4); ?><?php echo $v['cate_name']; ?>
								</option>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
					<div class="form-group mt0">
						<label for="">栏目名称</label>
						<input type="text" class="form-input-txt" name="cate_name">
					</div>
					<div class="form-group mt0">
						<label for="">栏目类型</label>
						<input type="radio" name='type' checked value="1">文章列表
						<input type="radio" name='type' value="2">单页
						<input type="radio" name='type' value="3">图片列表
					</div>
					<div class="form-group" style="margin-left:150px;">
					<input type="submit" class="sub-btn" value="提  交" />
					<input type="reset" class="sub-btn" value="重  置" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>