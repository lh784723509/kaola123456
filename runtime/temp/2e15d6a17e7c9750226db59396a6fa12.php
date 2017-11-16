<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"E:\software\wamp\www\milk\public/../application/home\view\index\index.html";i:1505133384;s:76:"E:\software\wamp\www\milk\public/../application/home\view\public\header.html";i:1505391976;s:74:"E:\software\wamp\www\milk\public/../application/home\view\public\foot.html";i:1505044302;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="__HOME__/css/bootstrap.min.css">
	<link rel="stylesheet" href="__HOME__/css/index.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.nav_second li:last-child a{
			border-bottom:none;
		}
		.cat li:nth-child(5) ul{
		display:none;
		}
		.cat li:nth-child(5):hover ul{
			background:white;
			display:block;
		}
	</style>
</head>
<body>
	<!-- 导航栏 -->
	<div class="container header">
		<div class="row">
			<div class="col-md-8">
				<div class="navbar-header logo">
					<img src="__HOME__/images/logo.png" alt="">
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="nav nav-tabs fr login">
						<li>
							<?php if(\think\Session::get('res.name')): ?>
							<a href="<?php echo url('index/index'); ?>"><?php echo \think\Session::get('res.name'); ?>,您好！</a>
							<?php else: ?><a href="<?php echo url('index/dologin'); ?>">登录</a>
							<?php endif; ?>
						</li>
						<li><a href="">|</a></li>
						<li>
							<?php if(\think\Session::get('res.name')): ?>
							<a href="<?php echo url('index/loginout'); ?>">退出</a>
							<?php else: ?><a href="<?php echo url('index/register'); ?>">注册</a>
							<?php endif; ?>
						</li>
					</div>
				</div>
				<div class="row">
					<form class="navbar-form navbar-right">
						<div class="form-group">
						<input type="text" class="form-control" placeholder="请输出商品名称">
						<button class="btn btn-default" type="submit">搜索</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- 菜单栏-->
	<div class="container menu">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-10" style="position:relative">
				<ul class="nav nav-justified cat">
					<li><a href="<?php echo url('index/index'); ?>">首页</a></li>
					<?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
					<li>
						<a href="<?php if($cate['children'] != 0): ?>http://127.0.0.1/milk/public/index.php/home/index/index
						<?php else: ?>http://127.0.0.1/milk/public/index.php/home/<?php if($cate['id']==41): ?>recruit<?php endif; if($cate['id']==43): ?>contact<?php endif; ?>/<?php if($cate['id']==41): ?>recruit<?php endif; if($cate['id']==43): ?>contact<?php endif; ?>/cateid/<?php echo $cate['id']; endif; ?>"><?php echo $cate['cate_name']; ?></a>
						<?php if($cate['children'] != 0): ?>
						<ul class="nav_second">
							<?php foreach($cate['children'] as $v2): ?>
							<li><a href="http://127.0.0.1/milk/public/index.php/home/<?php if($cate['id']==39): ?>about<?php endif; if($cate['id']==40): ?>products<?php endif; if($cate['id']==42): ?>news<?php endif; ?>/
						<?php if($v2['id']==44||$v2['id']==45||$v2['id']==46||$v2['id']==47): ?>about<?php endif; if($v2['id']==48||$v2['id']==49||$v2['id']==50||$v2['id']==51||$v2['id']==52||$v2['id']==53||$v2['id']==54): ?>product_list<?php endif; if($v2['id']==57||$v2['id']==58||$v2['id']==59): ?>news_list<?php endif; ?>
						/cateid/<?php echo $v2['id']; ?>"><?php echo $v2['cate_name']; ?></a></li>
							<?php endforeach; ?>
						</ul>
						<?php endif; ?>
					</li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>

<!-- 主体部分 -->
	<div class="container">
<!-- banner图片 -->
		<div class="row">
			<div id="banner">
				<img src="__HOME__/images/1.jpg" alt="">
				<ol>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ol>
				<div id="page">
					<a href="javascript:void(0)">上一页</a>
					<a href="javascript:void(0)">下一页</a>
				</div>
			</div>
		</div>
<!-- 公司模块 -->
		<div class="row model">
			<div class="col-md-4">
				<div class="item">
					<div class="row">
						<div class="col-md-12"><h4 class="title">文化景区</h4></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="__HOME__/images/pop01.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="content">
								<p>
								君乐宝乳业文化景区
								全国首家集酸奶文化和牧 场文化于一体的乳业文化之旅。
								</p>
								<div class="pop_btn"><a href="">在线报名</a></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="item">
					<div class="row">
						<div class="col-md-12"><h4 class="title">文化景区</h4></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="__HOME__/images/pop01.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="content">
								<p>
								君乐宝乳业文化景区
								全国首家集酸奶文化和牧 场文化于一体的乳业文化之旅。
								</p>
								<div class="pop_btn"><a href="">在线报名</a></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-4">
				<div class="item">
					<div class="row">
						<div class="col-md-12"><h4 class="title">文化景区</h4></div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="__HOME__/images/pop01.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="content">
								<p>
								君乐宝乳业文化景区
								全国首家集酸奶文化和牧 场文化于一体的乳业文化之旅。
								</p>
								<div class="pop_btn"><a href="">在线报名</a></div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
<!-- 尾部分 -->
	<div class="container footer">
		<div class="row">
			<div class="list-group">
				<div class="list-group-item link">
					<span>友情链接</span>
					<a href="">支付宝 | </a>
					<a href="">微信 | </a>
					<a href="">淘宝 | </a>
					<a href="">君乐宝集团</a>
				</div>
				<div class="list-group-item info">
					<span>Copyright@2011石家庄君乐宝乳业集团 | </span>
					<span>Copyright © 2015-2025 | </span>
					<span> ICP备案：冀ICP备11023373号 | </span>
					<img src="__HOME__/images/beian.png" alt="">
					<a href="">冀公网安备 13011002000109号</a>
				</div>
			</div>
		</div>
	</div>
	<script>
	window.onload=function(){
	var oB=document.getElementById("banner");
	var oImg=oB.getElementsByTagName("img")[0];
	var oLi=oB.getElementsByTagName("li");
	var oA=oB.getElementsByTagName("a");
	var num=1;
	var time=null;
	function slide1(){
		if(num==10){
			num=1;
		}else{
			num++;
		}//经过此条件判断，num==2;
		oImg.src="__HOME__/images/"+num+".jpg";//修改属性
		for(var i=0;i<oLi.length;i++){
			if(i==num-1){
				oLi[i].className="current";
			}else{
				oLi[i].className="";
			}
		}
	}
	time=setInterval(slide1,2000);//定时器每2秒执行一次；
	function slide2(){
		if(num==10){
			num=10;
		}else{
			num--;
		}
	}
	oImg.src="__HOME__/images/"+num+".jpg";
	for(var i=0;i<oLi.length;i++){
		if(i==num-1){
			oLi[i].className="current";
		}else{
			oLi[i].className="";
		}
	}
	//手动轮播
	for(var i=0;i<oLi.length;i++){
		oLi[i].onclick=function(){
			for(var j=0;j<oLi.length;j++){
				if(oLi[j]===this){
					oLi[j].className="current";
					oImg.src="__HOME__/images/"+(j+1)+".jpg";
					num=j+1;
					
				}else{
					oLi[j].className="";
				}
			}
		}
	}
	//上一页
	oA[0].onclick=function(){
		slide2();				
	}
	//下一页
	oA[1].onclick=function(){
		slide1();				
	}
	//鼠标移入事件
	oB.onmouseover=function(){
		clearInterval(time);
		oA[0].style.display="block";
		oA[1].style.display="block";
	}
	//鼠标移事件出
	oB.onmouseout=function(){
		time=setInterval(slide1,2000);
		oA[0].style.display="none";
		oA[1].style.display="none";
	}
}
	</script>
</body>
</html>