<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"E:\software\wamp\www\milk\public/../application/admin\view\index\index.html";i:1505267791;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="__ADMIN__/css/reset.css">
	<link rel="stylesheet" href="__ADMIN__/css/public.css">	
</head>
<body>
<div class="public-header-warrp">
	<div class="public-header">
		<div class="content">
			<div class="public-header-logo"><a href=""><h3>君乐宝后台管理系统</h3></a></div>
			<div class="public-header-admin fr">
				<p class="admin-name"><?php echo \think\Session::get('res')['name']; ?>管理员 您好！</p>
				<div class="public-header-fun fr">
					<a href="<?php echo url('admin/loginout'); ?>" class="public-header-loginout">安全退出</a>	
					<a href="<?php echo url('admin/edite_password',array('id'=>\think\Session::get('res.id'))); ?>" class="public-header-man">修改密码</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
	<div class="content">
	<!-- 内容模块头 -->
		<div class="public-ifame-header">
			<ul>
				<li class="ifame-item logo">
					<div class="item-warrp">
						<a href="#"><i>君乐宝</i>
							<h3 class="logo-title">WorldVentures</h3>
							<p class="logo-des">创建于 2017/9/1 10:10:10</p>
						</a>
					</div>
				</li>
				<li class="ifame-item"><div class="item-warrp"><span>注册时间：<?php echo date("Y-m-d",\think\Request::instance()->server('request_time')); ?><br>VIP有效期:3年</span></div></li>
				<li class="ifame-item"><div class="item-warrp" style="border:none"><span>网站浏览量：<?php echo \think\Session::get('counter'); ?></span></div></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div class="clearfix"></div>
		<!-- 左侧导航栏 -->
		<div class="public-ifame-leftnav">
			<div class="public-title-warrp">
				<div class="public-ifame-title ">
					<a href="">首页</a>
				</div>
			</div>
			<ul class="left-nav-list">
			<!-- 管理员管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">管理员管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="<?php echo url('admin/admin_manage'); ?>" target="content">管理员管理</a>|<a href="<?php echo url('admin/admin_add'); ?>" target="content">添加</a></li>
						</ul>
					</div>
				</li>
			<!-- 会员管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">会员管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="<?php echo url('member/member_manage'); ?>" target="content">会员管理</a>
						</ul>
					</div>
				</li>
			<!-- 轮播图管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">轮播图管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li class="active"><a href="<?php echo url('carousel/carousel_add'); ?>" target="content">添加轮播图</a></li>
							<li><a href="<?php echo url('carousel/carousel_manage'); ?>" target="content">轮播图管理</a></li>
						</ul>
					</div>
				</li>
			<!-- 企业版块管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">企业板块管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li class="active"><a href="<?php echo url('manage/manage_add'); ?>" target="content">添加板块</a></li>
							<li><a href="<?php echo url('manage/manage_manage'); ?>" target="content">板块管理</a></li>
						</ul>
					</div>
				</li>
			<!-- 友情链接 -->
				<li class="public-ifame-item">
					<a href="javascript:;">友情链接管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="<?php echo url('link/link_manage'); ?>" target="content">友情链接管理</a>|<a href="<?php echo url('link/link_add'); ?>" target="content">添加</a></li>
						</ul>
					</div>
				</li>
			<!-- 新闻管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">新闻管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li>
							<a href="<?php echo url('news/news_manage'); ?>" target="content">新闻列表</a>
							|<a href="<?php echo url('news/news_add'); ?>" target="content">添加</a>
							</li>
						</ul>
					</div>
				</li>
			<!--栏目管理-->
				<li class="public-ifame-item">
					<a href="javascript:;">栏目</a>
					<div class="ifame-item-sub">
						<ul>
							<li>
							<a href="<?php echo url('cate/cate_manage'); ?>" target="content">栏目列表</a>
							|<a href="<?php echo url('cate/cate_add'); ?>" target="content">添加</a>
							</li>
						</ul>
					</div>
				</li>
			<!-- 配置管理 -->
				<li class="public-ifame-item">
					<a href="javascript:;">配置管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="<?php echo url('conf/conf_manage'); ?>" target="content">配置管理</a>|<a href="<?php echo url('conf/conf_add'); ?>" target="content">添加</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<!-- 右侧内容展示部分 -->
		<div class="public-ifame-content">
		<iframe name="content" src="<?php echo url('index/main'); ?>" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>
		</div>
	</div>
</div>
<script src="__ADMIN__/js/jquery.min.js"></script>
<script>
$().ready(function(){
	var item = $(".public-ifame-item");

	for(var i=0; i < item.length; i++){
		$(item[i]).on('click',function(){
			$(".ifame-item-sub").hide();
			if($(this.lastElementChild).css('display') == 'block'){
				$(this.lastElementChild).hide()
				$(".ifame-item-sub li").removeClass("active");
			}else{
				$(this.lastElementChild).show();
				$(".ifame-item-sub li").on('click',function(){
					$(".ifame-item-sub li").removeClass("active");
					$(this).addClass("active");
				});
			}
		});
	}
});
</script>
</body>
</html>