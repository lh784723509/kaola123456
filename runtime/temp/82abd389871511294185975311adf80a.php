<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\software\wamp\www\milk\public/../application/admin\view\link\link_manage.html";i:1504870884;}*/ ?>
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
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">友情链接管理</a></div>
		<div class="public-content">
			<div class="public-content-cont">
				<table class="public-cont-table">
					<tr>
						<th style="width:20%">ID</th>
						<th style="width:20%">名称</th>
						<th style="width:30%">更新时间</th>
						<th style="width:30%">操作</th>
					</tr>
						<?php foreach($list as $v): ?>
						<tr>
							<td><?php echo $v['id']; ?></td>
							<td><?php echo $v['name']; ?></td>
							<td><?php echo date('Y-m-d H:i:s',$v['addtime']); ?></td>
							<td>
								<div class="table-fun">
									<a href="link_update?id=<?php echo $v['id']; ?>">修改</a>
									<a href="link_delete?id=<?php echo $v['id']; ?>">删除</a>
								</div>
							</td>
						</tr>
						<?php endforeach; ?>
				</table>
				<div id="page">
					<?php echo $list->render(); ?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>