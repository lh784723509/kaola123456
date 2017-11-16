<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\software\wamp\www\milk\public/../application/index\view\index\index.html";i:1505346283;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div><a href="<?php echo url('home/index/index'); ?>">前台</a></div>
	<div><a href="<?php echo url('admin/index/index'); ?>">后台</a></div>
	<div style="border:1px solid red">
		<?php if(is_array($arr) || $arr instanceof \think\Collection || $arr instanceof \think\Paginator): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
			<?php echo $value['0']; ?>
			<?php echo $value['1']; foreach($value['3'] as $k=>$v): ?>
				<?php echo $v; endforeach; endforeach; endif; else: echo "" ;endif; ?>
	</div>
</body>
</html>