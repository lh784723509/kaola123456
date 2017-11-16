<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\software\wamp\www\milk\public/../application/admin\view\cate\cate_update.html";i:1505217604;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="public-cont-left">
		<div class="public-cont-title">
			<h3>修改分类</h3>
		</div>
		<form action="<?php echo url("","",true,false);?>" method='post'>
		<input type="hidden" name='id' value="<?php echo $cates['id']; ?>">
		<div class="form-group">
			<label for="">上级栏目</label>
			<select name="pid" class="form-select">
				<option value="0">顶级分类</option>
				<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
					<option value="<?php echo $v['id']; ?>"<?php if($cates['pid'] == $v['id']): ?>selected<?php endif; ?>><?php if($v['level'] != 0): ?>|<?php endif; ?>
						<?php echo str_repeat("_",$v['level']*4); ?><?php echo $v['cate_name']; ?></option>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</select>
		</div>
		<div class="form-group mt0">
			<label for="">栏目名称</label>
			<input type="text" class="form-input-small" name="cate_name" value="<?php echo $cates['cate_name']; ?>">
		</div>
		<div class="form-group mt0">
			<label for="">栏目类型</label>
			<input type="radio" name='type'  value="1" <?php if($cates['type']==1): ?>checked<?php endif; ?>>文章列表
			<input type="radio" name='type' value="2" <?php if($cates['type']==2): ?>checked<?php endif; ?>>单页栏目
			<input type="radio" name='type' value="3" <?php if($cates['type']==3): ?>checked<?php endif; ?>>图片列表
		</div>
		<div class="form-group mt0" style="text-align:center;margin-top:15px;">
			<input type="submit" class="sub-btn" value="提   交">
		</div>
		</form>
	</div>
</body>
</html>