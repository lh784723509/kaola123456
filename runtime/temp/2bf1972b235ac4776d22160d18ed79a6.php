<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\software\wamp\www\milk\public/../application/admin\view\news\news_manage.html";i:1505382484;}*/ ?>
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
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">新闻列表</a></div>
		<div class="public-content">
			<div class="public-content-cont two-col">
				<table class="public-cont-table">
					<tr>
						<th style="width:10%">ID</th>
						<th style="width:10%">标题</th>
						<th style="width:20%">作者</th>
						<th style="width:20%">所属栏目</th>
						<th style="width:20%">缩略图</th>
						<th style="width:20%">操作</th>
					</tr>
					<?php if(is_array($newsres) || $newsres instanceof \think\Collection || $newsres instanceof \think\Paginator): $i = 0; $__LIST__ = $newsres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$news): $mod = ($i % 2 );++$i;?>
					<tr>
						<td><?php echo $news['id']; ?></td>
						<td><?php echo mb_substr($news['title'],0,9,"utf-8"); if(strlen($news['title'])>9): ?>...<?php endif; ?>
						</td>
						<td><?php echo $news['author']; ?></td>	
						<td><?php echo $news['cate_name']; ?></td>
						<td>
							<?php if($news['thumb'] != ''): foreach($news['thumb'] as $v): ?>
							<img src="<?php echo $v; ?>" alt="" style="width:80px">
							<?php endforeach; else: ?>暂无缩略图
							<?php endif; ?>
						</td>
						<td>
							<div class="table-fun">
								<a href="<?php echo url('news_update',['id'=>$news['id']]); ?>">修改</a>
								<a href="<?php echo url('news_delete',['id'=>$news['id']]); ?>">删除</a>
							</div>
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
				<div id="page">
				</div>
			</div>
		</div>
	</div>
</body>
</html>