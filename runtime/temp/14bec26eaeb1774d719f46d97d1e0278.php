<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\software\wamp\www\milk\public/../application/admin\view\cate\cate_manage.html";i:1505178527;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台欢迎页</title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css" />
	<link rel="stylesheet" href="__ADMIN__/css/content.css" />
	<link rel="stylesheet" href="__ADMIN__/css/page.css" />
</head>
<body marginwidth="0" marginheight="0">
	<div class="container">
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">栏目列表</a></div>
		<div class="public-content">
			<div class="public-content-cont two-col">
				<form action="" method="post">
				<table class="public-cont-table">
					<tr>
						<th style="width:10%">ID</th>
						<th style="width:10%">排序</th>
						<th style="width:20%">栏目名称</th>
						<th style="width:20%">栏目类型</th>
						<th style="width:20%">上级栏目</th>
						<th style="width:20%">操作</th>
					</tr>
					<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
					<tr>
						<td><?php echo $cate['id']; ?></td>
						<td><input type="text" name="<?php echo $cate['id']; ?>" value="<?php echo $cate['sort']; ?>" style="width:30%"></td>
						<td style="text-align:left"><?php if($cate['level'] != 0): ?>|<?php endif; ?>
						<?php echo str_repeat("_",$cate['level']*4); ?>
						<?php echo $cate['cate_name']; ?>
						</td>			
						<td>
							<?php if($cate['type'] == 1): ?>
							文章列表<?php endif; if($cate['type'] == 2): ?>
							单页<?php endif; if($cate['type'] == 3): ?>
							图片列表<?php endif; ?>
						</td>
						<td><?php echo $cate['pid']; ?></td>
						<td>
							<div class="table-fun">
								<a href="<?php echo url('cate_update',array('id'=>$cate['id'])); ?>">修改</a>
								<a href="cate_delete?id=<?php echo $cate['id']; ?>">删除</a>
							</div>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
					<tr>
						<td style="width:10%"></td>
						<td style="width:10%"><input type="submit" value="提交" style="width:50%"></td>
						<td style="width:20%"></td>
						<td style="width:20%"></td>
						<td style="width:20%"></td>
						<td style="width:20%"></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>