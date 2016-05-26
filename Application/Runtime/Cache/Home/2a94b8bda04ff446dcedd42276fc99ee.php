<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GuestBook登录界面</title>

<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>animate.css" />

<script type="text/javascript" src="<?php echo (JS_URL); ?>login.js"></script>
<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery.min.js"></script>	  
	  
</head>
 
<body>
	
<canvas id="christmasCanvas" style="top: 0px; left: 0px; z-index: 5000; position: fixed; pointer-events: none;" width="1285" height="100%"></canvas>

<script type="text/javascript">
	 var snow = function() {
    if(1==1) {
      $("body").append('<canvas id="christmasCanvas" style="top: 0px; left: 0px; z-index: 5000; position: fixed; pointer-events: none;"></canvas>');
      var b = document.getElementById("christmasCanvas"), a = b.getContext("2d"), d = window.innerWidth, c = window.innerHeight;
      b.width = d;
      b.height = c;
      for(var e = [], b = 0;b < 70;b++) {
        e.push({x:Math.random() * d, y:Math.random() * c, r:Math.random() * 4 + 1, d:Math.random() * 70})
      }
      var h = 0;
      window.intervral4Christmas = setInterval(function() {
        a.clearRect(0, 0, d, c);
        a.fillStyle = "rgba(255, 255, 255, 0.6)";
        a.shadowBlur = 5;
        a.shadowColor = "rgba(255, 255, 255, 0.9)";
        a.beginPath();
        for(var b = 0;b < 70;b++) {
          var f = e[b];
          a.moveTo(f.x, f.y);
          a.arc(f.x, f.y, f.r, 0, Math.PI * 2, !0)
        }
        a.fill();
        h += 0.01;
        for(b = 0;b < 70;b++) {
          if(f = e[b], f.y += Math.cos(h + f.d) + 1 + f.r / 2, f.x += Math.sin(h) * 2, f.x > d + 5 || f.x < -5 || f.y > c) {
            e[b] = b % 3 > 0 ? {x:Math.random() * d, y:-10, r:f.r, d:f.d} : Math.sin(h) > 0 ? {x:-5, y:Math.random() * c, r:f.r, d:f.d} : {x:d + 5, y:Math.random() * c, r:f.r, d:f.d}
          }
        }
      }, 70)
    }
  }
  snow();
</script>

<h2 align="center">GusetBook登陆界面</h2>

<div class="login_frame"></div>

<div class="LoginWindow">
	<div>
	<form action="/ProJ/ccblog/index.php/Home/Index/index.html?id=login" method="post">
		<div class="login">
			<p><input type="text" name="useremail" id="id" placeholder="用户账号" value=""></p>
			<p><input type="password" name="password" id="password" placeholder="登录密码" value=""></p>
			<p class="login-submit"><button type="submit" class="login-button" id ="submit" onClick="return user_input()">登录</button></p>
		</div>
	</form>
	<p class="registration  btn" id="regiest"><a href="javascript:void(0);">快速注册</a></p>
	</div>
</div>
	
<form action="/ProJ/ccblog/index.php/Home/Index/index.html?id=register" method="post">
<div class="box">
	<div class="regiest">
		<p><input type="text" id="username" name="useremail" placeholder="邮箱"></p>
		<p><input type="text" id="nickname" name="username" placeholder="用户名"></p>
		<p><input type="password" id="password" name="password" placeholder="密码" ></p>
		<p><input type="password" id="rpassword" name="rpassword" placeholder="确认密码"></p>
		<div id="btn2">
			<ul>
				<li><input type="button" value="关闭" class="colse"/></li>
				<li><input type="submit" value="提交" class="sumbmit"/></li>
			</ul>
		</div>
	</div>
</div>
</form>
<script type="text/javascript">
$(function(){
	$(".btn").click(function(){
	var left = ($(window).width()*(1-0.35)) /2;//box弹出框距离左边的额距离
	var height =  ($(window).height()*(1-0.5)) /2;
	
   $(".box").addClass("animated bounceIn").show().css({left:left,top:top});
   $(".opacity_bg").css("opacity","0.3").show();
   });
  
  
   $(".colse").click(function(){
	 
	var left=($(window).width()*(1-0.35))/2;
	var top=($(window).height()*(1-0.5))/2;
	$(".box").show().animate({
		width:"-$(window).width()*0.35",
		height:"-$(window).height()*0.5",
		left:"-"+left+"px",
		top:"-"+top+"px"
		},1000,function(){
			 var width1 = $(window).width()*0.35;
			 var height1 =$(window).height()*0.5;
			 console.log(width1);
			$(this).css({width:width1,height:height1}).hide();
		});

   });
});
</script>
<div style="text-align:center;">
<p>来源:<a href="http://www.ui3g.com/" target="_blank">ccblog</a></p>
</div>
</body>
</html>