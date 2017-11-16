<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\software\wamp\www\milk\public/../application/admin\view\news\news_update.html";i:1505382573;}*/ ?>
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
		<div class="public-nav">您当前的位置：<a href="">管理首页</a>><a href="">修改新闻列表</a></div>
		<div class="public-content">
			<div class="public-content-cont">
				<form action="<?php echo url("","",true,false);?>" method='post' enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
					<div class="form-group">
						<label for="">标题</label>
						<input type="text" class="form-input-txt" name="title" value=<?php echo $result['title']; ?>>
					</div>
					<div class="form-group">
						<label for="">作者</label>
						<input type="text" class="form-input-txt" name="author" value=<?php echo $result['author']; ?>>
					</div>
					<div class="form-group">
						<label for="">关键词</label>
						<input type="text" class="form-input-txt" name="keywords" value=<?php echo $result['keywords']; ?>>
					</div>
					<div class="form-group">
						<label for="">描述</label>
						<textarea class="form-input-textara" type="text" name="desc"><?php echo $result['desc']; ?></textarea>
					</div>
					<div class="form-group">
						<label for="">缩略图</label>
						<input type="file" name="thumb[]" style="float:left;margin-top:8px"/>
						<input type="file" name="thumb[]" style="float:left;margin-top:8px"/>
						<input type="file" name="thumb[]" style="float:left;margin-top:8px"/>
						<?php if($result['thumb'] != ''): foreach($result['thumb'] as $route): if($route != ''): ?>
						<img  style="height:40px;float:left;margin-left:-80px" src="<?php echo $route; ?>" alt="">
						<?php endif; endforeach; else: ?><span style="display:inline-block;float:left;margin-left:-80px;margin-top:14px;color:red">暂无缩略图</span>
						<?php endif; ?>
					</div>
					<div class="form-group">
						<label for="">所属栏目</label>
						<select name="cateid" class="form-select">
							<option value="0">顶级分类</option>
							<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
								<option value="<?php echo $v['id']; ?>" <?php if($v['id']==$result['cateid']): ?>selected<?php endif; ?>><?php if($v['level'] != 0): ?>|<?php endif; ?>
									<?php echo str_repeat("_",$v['level']*4); ?><?php echo $v['cate_name']; ?>
								</option>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">内容</label>
						<textarea id="editor_id" name="content"  class="form-input-textara" style="width:700px;height:300px;">
							<?php echo $result['content']; ?>
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