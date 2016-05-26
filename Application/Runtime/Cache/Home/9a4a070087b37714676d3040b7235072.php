<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="dns-prefetch" href="//apps.bdimg.com">
		<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-title" content="测试">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<title>某某博客</title>
		<meta name="keywords" content="某某博客">
		<meta name="description" content="某某博客">
		<link rel='stylesheet' href='<?php echo (CSS_URL); ?>bootstrap.min.css' type='text/css'/>
		<link rel='stylesheet' href='<?php echo (CSS_URL); ?>font-awesome.min.css' type='text/css'/>
		<link rel='stylesheet' id='_main-css' href='<?php echo (CSS_URL); ?>main.css' type='text/css'/>
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>colorbox.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>icealipay.css" type="text/css" />
		<script type='text/javascript' src='<?php echo (JS_URL); ?>jquery.min.js'></script>
		<script src="<?php echo (JS_URL); ?>jquery.colorbox-min.js"></script>
		<style>
			.site-navbar{font-size:16px;}
		</style>
	</head>

	<body class="home blog site-layout-2 wpb-js-composer js-comp-ver-4.4.2 vc_responsive">
		<header class="header">
			<div class="container">
				<h1 class="logo"><a href="index.html" title="某某博客"><img src="<?php echo (IMG_URL); ?>logo.png">测试</a></h1>
				<div class="brand">某某博客网站！
					<br>http://www.baidu.com
				</div>
				<ul class="site-nav site-navbar">
					<li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-44"><a href="<?php echo (INDEX_URL); ?>main">首页</a>
					</li>
					<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-204"><a href="/ProJ/ccblog/index.php/Home/Message/post"><i class="fa fa-video-camera"></i> 我要发帖 </a>
					</li>
					<li id="menu-item-47" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-47"><a href="/ProJ/ccblog/index.php/Home/Blog"><i class="fa fa-file-text-o"></i> 学无止境 </a>
					</li>
					<li id="menu-item-250" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-250"><a href="list.html"><i class="fa fa-barcode"></i> 测试导航 <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<li id="menu-item-368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-368"><a href="list.html"> 测试导航 </a>
							</li>
							<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251"><a href="list.html"> 测试导航 </a>
							</li>
							<li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290"><a href="list.html"> 测试导航 </a>
							</li>
						</ul>
					</li>
					<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="/ProJ/ccblog/index.php/Home/Person"><i class="fa fa-external-link"></i> 关于大亮 </a>
					</li>
				</ul>
				<div class="topbar">
					<ul class="site-nav topmenu">
						<li class="menusns">
							<a href="#">个人中心 <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
								<li><a class="sns-wechat" href="#" title="" data-src="<?php echo (IMG_URL); ?>IMG_0133.jpg"><i class="fa fa-wechat"></i>  个人信息 </a>
								</li>
								<li><a target="_blank" rel="external nofollow" href="#"><i class="fa fa-weibo"></i>我的帖子</a>
								</li>
								<li><a target="_blank" rel="external nofollow" href="#"><i class="fa fa-tencent-weibo"></i>  我的关注 </a>
								</li>
								<li><a target="_blank" href="#"><i class="fa fa-rss"></i>  权限设置 </a>
								</li>
							</ul>
						</li>
					</ul>
					<a href="<?php echo (INDEX_URL); ?>logout" class="signin-loader">安全退出</a> &nbsp; &nbsp; <a href="person.html" class="signup-loader"><?php echo $_SESSION['username']."在线";?></a> &nbsp; &nbsp; <a href="#">当前IP：<?php echo $_SESSION['lastip'];?></a>
				</div>
				<i class="fa fa-bars m-icon-nav"></i>
			</div>
		</header>

		<section class="container">
			<div class="content-wrap">
				<div class="content">
					<article class="excerpt excerpt-1">
						<form action="/ProJ/ccblog/index.php/Home/Message/post" method="post" enctype="multipart/form-data">
						<p>标题：<input type="text" name="mestitle"></p>
						<p>分类：<input type="radio" name="sex" value='IT前沿'>IT前沿&nbsp;&nbsp;&nbsp;
						         <input type="radio" name="sex" value='小生活'>小生活&nbsp;&nbsp;&nbsp;
						         <input type="radio" name="sex" value='最资讯'>最资讯&nbsp;&nbsp;&nbsp;
						         <input type="radio" name="sex" value='时尚调'>时尚调&nbsp;&nbsp;&nbsp;
						         <input type="radio" name="sex" value='心情窝'>心情窝&nbsp;&nbsp;&nbsp;
						         <input type="radio" name="sex" value='其他'>其他&nbsp;&nbsp;&nbsp;
						</p>
						<p>图片：<input type="file" name="mespicture"></p>
						<p>内容：<textarea rows="10" cols="60" name="message" style="resize:none;"></textarea></p>
						<p><input type="submit" value="提交">　　　<input type="reset" value="重置"></p>
						
						
						</form>
					</article>

				</div>
			</div>
			<aside class="sidebar">
				<div class="widget widget_categories" style="top: 0px;">
					<h3>分类</h3>
					<ul>
						<li class="cat-item cat-item-7"><a href="article.html" title="测试导航"> 测试导航 </a> (9)
						</li>
						<li class="cat-item cat-item-6"><a href="article.html" title="测试导航"> 测试导航 </a> (4)
						</li>
						<li class="cat-item cat-item-11 current-cat"><a href="article.html" title="测试导航">测试导航</a> (4)</li>
						<li class="cat-item cat-item-11"><a href="article.html" title="测试导航"> 测试导航 </a> (4)</li>
						<li class="cat-item cat-item-11"><a href="article.html" title="测试导航"> 测试导航 </a> (8)</li>
						<li class="cat-item cat-item-11"><a href="article.html" title="测试导航"> 测试导航 </a> (9)</li>
					</ul>
				</div>
				<div class="widget widget_ui_posts">
					<h3>热门文章</h3>
					<ul>
						<li><a target="_blank" href="article.html"><span class="thumbnail"><img data-src="<?php echo (IMG_URL); ?>5672312129115-1-220x114.jpg" class="thumb" src="<?php echo (IMG_URL); ?>5672312129115-1-220x114.jpg" style="display: block;"></span><span class="text">测试测试测试测试测试测试...</span><span class="muted">2015-04-17</span><span class="muted">评论(3)</span></a>
						</li>
					</ul>
				</div>
			</aside>
		</section>
		<style>
			.btn-lg, .btn-group-lg > .btn {
			    font-size: 12px;
			    border-radius: 4px;
			    padding: 5px 35px;
			}
		</style>
		<div class="branding branding-black">
			<div class="container">
				<h2>测试-专注IT技术分享！</h2>
				<a target="blank" class="btn btn-lg" href="#">关于我们</a><a target="blank" class="btn btn-lg" href="#">联系我们</a> </div>
		</div>
		<footer class="footer">
			<div class="container">
				<p>&copy; 2016 <a href="#">测试</a> &nbsp; <a href='#'>网站地图</a><a>|</a><a>京ICP备123456789号-1</a>
				</p>
			</div>
		</footer>
	</body>

</html>