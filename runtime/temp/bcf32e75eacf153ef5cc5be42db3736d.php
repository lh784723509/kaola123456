<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"E:\software\wamp\www\milk\public/../application/admin\view\carousel\carousel_manage.html";i:1505188880;}*/ ?>
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
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">轮播图管理</a></div>
		<div class="public-content">
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:5%">编号</th>
						<th style="width:5%">图片名</th>
						<th style="width:20%">图片描述</th>
						<th style="width:20%">上传路径</th>
						<th style="width:20%">缩略图</th>
						<th style="width:10%">更新时间</th>
						<th style="width:20%">操作</th>
					</tr>
					<?php foreach($res as $v): ?>
						<tr>
							<td><?php echo $v['id']; ?></td>
							<td><?php echo $v['title']; ?></td>				
							<td><?php echo $v['content']; ?></td>
							<td><?php echo $v['path']; ?></td>
							<td><img class="thumb" src="__UPLOAD__/<?php echo $v['path']; ?>" /></td>
							<td><?php echo date('Y-m-d h:i:s',$v['addtime']); ?></td>
							<td>
								<div class="table-fun">
									<a href="carousel_update?id=<?php echo $v['id']; ?>">修改</a>
									<a href="carousel_delete?id=<?php echo $v['id']; ?>">删除</a>
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
				<div id="page">
					<?php echo $res->render(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>