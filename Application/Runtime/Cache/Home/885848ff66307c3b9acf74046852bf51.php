<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>在此插入标题</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="/ProJ/ccblog/Public/css/jquery.Jcrop.min.css" media="all">
<link rel="stylesheet" type="text/css" href="/ProJ/ccblog/Public/js/uploadify-v3.1/uploadify.css" media="all">
<script type="text/javascript" src="/ProJ/ccblog/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/ProJ/ccblog/Public/js/uploadify-v3.1/jquery.uploadify-3.1.min.js"></script>
<script type="text/javascript" src="/ProJ/ccblog/Public/js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="/ProJ/ccblog/Public/js/ThinkBox/jquery.ThinkBox.js"></script>
<link rel="stylesheet" type="text/css" href="/ProJ/ccblog/Public/js/ThinkBox/css/ThinkBox.css" media="all">
<link rel="stylesheet" href="<?php echo (CSS_URL); ?>article.css" type="text/css" />
<style type="text/css">
.main{
	margin: 0 auto;
	padding: 15px;
	width: 750px;
	font-family: "microsoft yahei";
	background-color: #F5F5F5;
}
.cf:before,.cf:after {
	display: table;
	content: "";
	line-height: 0;
}
.cf:after {
	clear: both;
}
.cf {
	*zoom: 1;
}
.upload-area {
	position: relative;
	float: left;
	margin-right: 30px;
	width: 200px;
	height: 200px;
	background-color: #F5F5F5;
    border: 2px solid #E1E1E1;
}
.upload-area .file-tips {
	position: absolute;
	top: 90px;
	left: 0;
    padding: 0 15px;
    width: 170px;
    line-height: 1.4;
    font-size: 12px;
	color: #A8A8A3;
    text-align: center;
}
.userup-icon {
    display: inline-block;
    margin-right: 3px;
    width: 16px;
    height: 16px;
    vertical-align: -2px;
	background: url("/ProJ/ccblog/Public/img/userup_icon.png") no-repeat;
}
.uploadify-button {
	line-height: 120px!important;
	text-align: center;
}
.preview-area {
	float: left;
}
.tcrop {
    clear: right;
    font-size: 14px;
    font-weight: bold;
}
.update-pic .crop {
    background: url("/ProJ/ccblog/Public/img/mystery.png") no-repeat scroll center center #EEEEEE;
    float: left;
    margin-bottom: 20px;
    margin-top: 10px;
    overflow: hidden;
}
.crop100 {
    height: 100px;
    width: 100px;
}
.crop60 {
    height: 60px;
    margin-left: 20px;
    width: 60px;
}
.update-pic .save-pic {
    clear: left;
    margin-right: 20px;
}
.update-pic .uppic-btn {
    background-color: #348FD4;
    color: #FFFFFF;
    display: block;
    float: left;
    font-size: 16px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    vertical-align: middle;
    width: 89px;
}
.preview {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 11;
	width: 200px;
	height: 200px;
	overflow: hidden;
	background:#fff;
	display: none;
}
</style>
<script type="text/javascript">
function change(type)
{
 if (type =='1')
 {
  document.form1.action="<?php echo U('Self/cropImg');?>";

 }
 else if (type =='2')
 {
  document.form1.action="<?php echo U('Self/index');?>";
 }
 document.form1.submit();
}
//验证两次密码是否输入正确
function checkpwd(){
	var fpwd=document.getElementById("password");
	if(fpwd.value==""||fpwd.value.length<4||fpwd.value.length>20){
		window.alert("请输入4-20位用户密码！");
		fpwd.value="";
	}
	}
function rcheckpwd(){
	var fpwd=document.getElementById("password");
	var frpwd=document.getElementById("rpassword");
	if(frpwd.value==""||frpwd.value.length<4||frpwd.value.length>20){
		window.alert("请输入4-20位用户密码！");
		frpwd.value="";
		return false;
	}else if(frpwd.value!=fpwd.value){
		alert("两次输入密码不一致！");
		fpwd.value="";
		frpwd.value="";
		return false;
	}
	}
//验证邮箱格式是否正确
function checkemail(){
	var temp = document.getElementById("useremail");
	//对电子邮件的验证
	var myreg = /^([a-za-z0-9]+[_|\_|\.]?)*[a-za-z0-9]+@([a-za-z0-9]+[_|\_|\.]?)*[a-za-z0-9]+\.[a-za-z]{2,3}$/;
	if (!myreg.test(temp.value)) {
		alert('提示\n\n请输入有效的e_mail！');
		myreg.focus();
		return false;
	}
}
</script>
</head>
<body>
	<form action="" method="post" id="pic" name="form1" class="smart-green">
		<h1>
			修改个人信息 <span>谁没年轻过！</span>
		</h1>
		<label>
		<span>选择头像 :</span><br/>

<div class="main">
<!-- 修改头像 -->
<!-- <form action="<?php echo U('Index/cropImg');?>" method="post" id="pic" class="update-pic cf"> -->
<div class="update-pic cf">
	<div class="upload-area">
		<input type="file" id="user-pic">
		<div class="file-tips">支持JPG,PNG,GIF，图片小于1MB，尺寸不小于100*100,真实高清头像更受欢迎！</div>
		<div class="preview hidden" id="preview-hidden"></div>
	</div>
	<div class="preview-area">
		<input type="hidden" id="x" name="x" />
		<input type="hidden" id="y" name="y" />
		<input type="hidden" id="w" name="w" />
		<input type="hidden" id="h" name="h" />
		<input type="hidden" id='img_src' name='src'/>
		<div class="tcrop">头像预览</div>
		<div class="crop crop100"><img id="crop-preview-100" src="" alt=""></div>
		<div class="crop crop60"><img id="crop-preview-60" src="" alt=""></div>
		<a class="uppic-btn save-pic" href="javascript:;" onClick="change(1)">保存</a>
		<a class="uppic-btn reupload-img" href="javascript:$('#user-pic').uploadify('cancel','*');">重新上传</a>
	</div>
	</div>
<!-- </form> -->
<!-- /修改头像 -->

<!-- 展示头像 -->
<div style="margin: 20px 0 10px;">
	<h2>头像展示：</h2>
<!-- 	<div style="margin-bottom: 10px;">
		<span style="vertical-align: top">临时图片：</span>
		<img style="max-width: 750px;" src="/ProJ/ccblog/Avatar/temp.jpg" title="临时图片"/>
	</div> -->
	<div>
		<span style="vertical-align: top">图像效果：</span>
		<img src="/ProJ/ccblog/Avatar/<?php echo (session('useremail')); ?>/avatar_100.jpg" title="100*100"/><!-- +++++++注意 -->
   <!-- <img src="/ProJ/ccblog/$_SESSION[useremail]/Avatar/avatar_60.jpg" title="60*60"/>
		<img src="/ProJ/ccblog/$_SESSION[useremail]/Avatar/avatar_30.jpg" title="30*30"/> -->
	</div>
</div>
<!-- /展示头像 -->
</div>
		
		</label>
		<label>
		<span style="font-size:20px;font-weight: bolder;">个性电话 :</span>
		<input id="name" type="text" name="usertel" value="<?php echo ($useri["usertel"]); ?>" placeholder="<?php echo ($useri["usertel"]); ?>" />
		</label>
		<label>
		<span style="font-size:20px;font-weight: bolder;">修改密码 :</span>
		<input type="password" id="password" name="password" placeholder="Your New Password" onblur="checkpwd()" />
		</label>
		<label>
		<span style="font-size:20px;font-weight: bolder;">重复密码 :</span>
		<input type="password" id="rpassword" name="rpassword" placeholder="Your New Password" onblur="rcheckpwd()" />
		</label>
		<label>
		<span style="font-size:20px;font-weight: bolder;">你的昵称 :</span>
		<input id="name" type="text" name="username" value="<?php echo ($useri["username"]); ?>" placeholder="<?php echo ($useri["username"]); ?>" />
		</label>
		<label>
		<span style="font-size:20px;font-weight: bolder;">你的邮箱 :</span>
		<input type="text" name="useremail" value="<?php echo ($useri["useremail"]); ?>" placeholder="<?php echo ($useri["useremail"]); ?>" id="useremail" onblur="checkemail()"/>
		</label>
		<label style="font-size:20px;font-weight: bolder;"> <span>个性签名 :</span> <textarea id="message"
				name="usertags" placeholder="<?php echo ($useri["usertags"]); ?>"><?php echo ($useri["usertags"]); ?></textarea>
		</label> <label> <span>&nbsp;</span> 
		<input type="button" class="button" value="send" onClick="change(2);submit()" />　　　　　　　　　　　　　　　　　　　　
		<input type="button" class="button" value="back" onClick="javascript:window.location.href='<?php echo (INDEX_URL); ?>/main'"/>
		</label>
	</form>
	
	
<script type="text/javascript">
	$(function(){
		//上传头像(uploadify插件)
		$("#user-pic").uploadify({
			'queueSizeLimit' : 1,
			'removeTimeout' : 0.5,
			'preventCaching' : true,
			'multi'    : false,
			'swf' 			: '/ProJ/ccblog/Public/js/uploadify-v3.1/uploadify.swf',
			'uploader' 		: '<?php echo U("Self/uploadImg");?>',
			'buttonText' 	: '<i class="userup-icon"></i>上传头像',
			'width' 		: '200',
			'height' 		: '200',
			'fileTypeExts'	: '*.jpg; *.png; *.gif;',
			'onUploadSuccess' : function(file, data, response){
				//调试语句
				console.log(data);

				var data = $.parseJSON(data);
				if(data['status'] == 0){
					$.ThinkBox.error(data['info'],{'delayClose':3000});
					return;
				}
				var preview = $('.upload-area').children('#preview-hidden');
				preview.show().removeClass('hidden');
				//两个预览窗口赋值
				$('.crop').children('img').attr('src',data['path']+'?random='+Math.random());
				//隐藏表单赋值
				$('#img_src').val(data['path']);
				//绑定需要裁剪的图片
				var img = $('<img />');
				preview.append(img);
				preview.children('img').attr('src',data['path']+'?random='+Math.random());
				var crop_img = preview.children('img');
				crop_img.attr('id',"cropbox").show();
				var img = new Image();
				img.src = data['path']+'?random='+Math.random();
				//根据图片大小在画布里居中
				img.onload = function(){
					var img_height = 0;
					var img_width = 0;
					var real_height = img.height;
					var real_width = img.width;
					if(real_height > real_width && real_height > 200){
						var persent = real_height / 200;
						real_height = 200;
						real_width = real_width / persent;
					}else if(real_width > real_height && real_width > 200){
						var persent = real_width / 200;
						real_width = 200;
						real_height = real_height / persent;
					}
					if(real_height < 200){
						img_height = (200 - real_height)/2;
					}
					if(real_width < 200){
						img_width = (200 - real_width)/2;
					}
					preview.css({width:(200-img_width)+'px',height:(200-img_height)+'px'});
					preview.css({paddingTop:img_height+'px',paddingLeft:img_width+'px'});
				}
				//裁剪插件
				$('#cropbox').Jcrop({
		            bgColor:'#333',   //选区背景色
		            bgFade:true,      //选区背景渐显
		            fadeTime:1000,    //背景渐显时间
		            allowSelect:false, //是否可以选区，
		            allowResize:true, //是否可以调整选区大小
		            aspectRatio: 1,     //约束比例
		            minSize : [100,100],//可选最小大小
		            boxWidth : 200,		//画布宽度
		            boxHeight : 200,	//画布高度
		            onChange: showPreview,//改变时重置预览图
		            onSelect: showPreview,//选择时重置预览图
		            setSelect:[ 0, 0, 100, 100],//初始化时位置
		            onSelect: function (c){	//选择时动态赋值，该值是最终传给程序的参数！
			            $('#x').val(c.x);//需裁剪的左上角X轴坐标
			            $('#y').val(c.y);//需裁剪的左上角Y轴坐标
			            $('#w').val(c.w);//需裁剪的宽度
			            $('#h').val(c.h);//需裁剪的高度
		          }
		        });
				//提交裁剪好的图片
				$('.save-pic').click(function(){
					if($('#preview-hidden').html() == ''){
						$.ThinkBox.error('请先上传图片！');
					}else{
						//由于GD库裁剪gif图片很慢，所以长时间显示弹出框
						$.ThinkBox.success('图片处理中，请稍候……',{'delayClose':30000});
						$('#pic').submit();
					}
				});
				//重新上传,清空裁剪参数
				var i = 0;
				$('.reupload-img').click(function(){
					$('#preview-hidden').find('*').remove();
					$('#preview-hidden').hide().addClass('hidden').css({'padding-top':0,'padding-left':0});
				});
		     }
		});
		//预览图
		function showPreview(coords){
			var img_width = $('#cropbox').width();
			var img_height = $('#cropbox').height();
			  //根据包裹的容器宽高,设置被除数
			  var rx = 100 / coords.w;
			  var ry = 100 / coords.h;
			  $('#crop-preview-100').css({
			    width: Math.round(rx * img_width) + 'px',
			    height: Math.round(ry * img_height) + 'px',
			    marginLeft: '-' + Math.round(rx * coords.x) + 'px',
			    marginTop: '-' + Math.round(ry * coords.y) + 'px'
			  });
			  rx = 60 / coords.w;
			  ry = 60 / coords.h;
			  $('#crop-preview-60').css({
			    width: Math.round(rx * img_width) + 'px',
			    height: Math.round(ry * img_height) + 'px',
			    marginLeft: '-' + Math.round(rx * coords.x) + 'px',
			    marginTop: '-' + Math.round(ry * coords.y) + 'px'
			  });
		}
	})

</script>
</body>
</html>