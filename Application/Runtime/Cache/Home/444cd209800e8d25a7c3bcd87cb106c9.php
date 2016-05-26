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
		<link rel="stylesheet" href="<?php echo (CSS_URL); ?>article.css" type="text/css" />
		
		<link href="<?php echo (CSS_URL); ?>bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo (CSS_URL); ?>self_style.css" rel="stylesheet" type="text/css" media="all" />
		
		<script type='text/javascript' src='<?php echo (JS_URL); ?>jquery.min.js'></script>
		<script src="<?php echo (JS_URL); ?>jquery.colorbox-min.js"></script>
		<style type="text/css">
			.content {
			    padding: 0px 20px;
			    background-color: #FFF;
			    border: 1px solid #EAEAEA;
			    border-radius: 4px;
			}
			.site-navbar{font-size:16px;}
		</style>
	</head>

	<body class="home blog site-layout-2 wpb-js-composer js-comp-ver-4.4.2 vc_responsive">
		<header class="header">
			<div class="container">
				<h1 class="logo"><a href="" title="小派头"><img src="<?php echo (IMG_URL); ?>logo.png">测试</a></h1>
				<div class="brand">小派头
					<br>http://www.talkiss.top
				</div>
				<ul class="site-nav site-navbar">
					<li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-44"><a href="<?php echo (INDEX_URL); ?>main">首页</a>
					</li>
					<li id="menu-item-204" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-204"><a href="<?php echo (MESSAGE_URL); ?>post"><i class="fa fa-video-camera"></i>我要发帖</a>
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
							<a href="#">关注本站 <i class="fa fa-angle-down"></i></a>
							<ul class="sub-menu">
								<li><a class="sns-wechat" href="#" title="" data-src="Images/IMG_0133.jpg"><i class="fa fa-wechat"></i>  测试导航 </a>
								</li>
								<li><a target="_blank" rel="external nofollow" href="#"><i class="fa fa-weibo"></i>  测试导航 </a>
								</li>
								<li><a target="_blank" rel="external nofollow" href="#"><i class="fa fa-tencent-weibo"></i>  测试导航 </a>
								</li>
								<li><a target="_blank" href="#"><i class="fa fa-rss"></i>  测试导航 </a>
								</li>
							</ul>
						</li>
					</ul>
					<a href="<?php echo (INDEX_URL); ?>logout" class="signin-loader">安全退出</a> &nbsp; &nbsp; <a href="person.html" class="signup-loader"><?php echo $_SESSION['username']."在线";?></a> &nbsp; &nbsp; <a href="#">当前IP：<?php echo ($date["lastip"]); ?></a>
				</div>
				<i class="fa fa-bars m-icon-nav"></i>
			</div>
		</header>
		<div class="site-search">
			<div class="container">
				<form method="get" class="site-search-form">
					<input class="search-input" name="s" type="text" placeholder="输入关键字" value="">
					<button class="search-btn" type="submit"><i class="fa fa-search"></i>
					</button>
				</form>
			</div>
		</div>
		<section class="container">
			<div class="content-wrap">
				<div class="content">
					<header class="article-header">
						<h1 class="article-title"><a href="#"><?php echo ($info['mestitle']); ?></a></h1>
						<div class="article-meta">
							<span class="item" style="font-size:20px;">关于talkiss站长自介</span>
						</div>
					</header>
					<article class="article-content">
						<p>
						<h3>◆◆◆Just for Me</h3>
						我是你们的站长，BIgBright!<br/>
						目前大三狗一枚，这个小网点可以说真正第一个属于我自己的拙劣作品。<br/>
						我觉得某些同学有些肤浅，因为PHP容易学，牛逼，找工作才喜欢，而我，，，，比你们更肤浅！<br/>
						<h3>◆◆◆About  Blog</h3>
						本来是想做一个分享的博客，可是一不小心加上了登录与注册，好吧我承认偏题太远。<br/>
						Email:taxkiss@163.com<br/>
						Github: https://github.com/taxkiss<br/>
						Techonyblog::http://www.cnblogs.com/imysql/<br/>
						㊣求职中
						</p>
						<p>&nbsp;</p>

					</article>
					<div class="article-tags">标签：<a href="#" rel="tag">不做大哥很多年</a><a href="#" rel="tag">站长</a><a href="#" rel="tag">傻X</a>
					</div>
					<div class="pads">
						<ul id="tags_related">
							<li> </li>
						</ul>
					</div>

				<!--start-contact-section-->
				<div class="contact-section" id="contact">
					<div class="container">
						<h3>contact Me</h3>
						<div class="contact-details">
							<form style="width:720px;height:200px;">
								<div class="col-md-6 contact-left">
									<input type="text" class="text" value="Name *"
										onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'Name *';}">
									<input type="text" class="text" value="Email *"
										onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'Email *';}">
									<input type="text" class="text" value="phone *"
										onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'Phone *';}">
								</div>
								<div class="col-md-6 contact-right">
									<textarea value="Message" onfocus="this.value = '';"
										onblur="if (this.value == '') {this.value = 'Message';}">Message *</textarea>
									<input type="submit" value="Send Message" />
								</div>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>



				<div class="title" id="comments">
						<h3>评论？ <small>法律规定站长是不能被评论的</small></h3></div>

				</div>
			</div>

			<aside class="sidebar">
				<div class="widget widget_ui_posts">
					<h3>最新发布</h3>
					<ul>
						<li><a target="_blank" href="#"><span class="thumbnail"><img data-src="Images/5672312129115-1-220x114.jpg" class="thumb" src="Images/5672312129115-1-220x114.jpg" style="display: block;"></span><span class="text">前端程序员的15个jQuery小技巧</span><span class="muted">2016-01-20</span><span class="muted">评论()</span></a>
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