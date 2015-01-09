<?php /* Smarty version Smarty-3.1.19, created on 2015-01-09 16:03:46
         compiled from "templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:819454a35c09f048d5-02077303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54d6a35a30d2eeee30642fb69720d4a19e1b471b' => 
    array (
      0 => 'templates\\login.html',
      1 => 1420608050,
      2 => 'file',
    ),
    '5811db6a4e061d23cc5f37d8e87eb9bf0a693f97' => 
    array (
      0 => 'templates\\base.html',
      1 => 1420790581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '819454a35c09f048d5-02077303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a35c0a037802_00096985',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a35c0a037802_00096985')) {function content_54a35c0a037802_00096985($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

<title>Letsgo内部办公系统</title>

<!-- Bootstrap -->
<link href="/static/css/bootstrap.min.css" 	rel="stylesheet">
<link href="/static/css/lib.css" rel="stylesheet">
<link href="/static/css/main.css" rel="stylesheet">

<!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/static/js/jquery-1.11.1.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/jquery.easing.1.3.js"></script>
<script src="/static/js/login.js"></script>
</head>
<body>
	<input type="hidden" id="staffid"/>
	<div class="top" id="top">
		<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> 
		<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-log-in"></span> 登陆 </a>
		<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>
	</div>
	
<script src="/static/js/md5.js"></script>
<script>
$(document).ready(function(){
	$('#submit').click(function(){
		$.ajax({
			type:"POST",
			url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/Letsgo/login",
			dataType:"json",
			data:{
				staffid:$('#username').val(),
				password:hex_md5($('#password').val()),
			},
			success:function(data){
				if(data.data.staffid){
					$.ajax({
						type:"POST",
						url:"/session.php",
						data:{
							action:"set",
							staffid:data.data.staffid,
						},
						success:function(data){
							window.location.href = "/";
						},
						error:function(data){
							alert("登陆出现异常，请重试1"+data);
						},
					});
				}else{
					alert("登陆出现异常，请重试2");
				}
			},
			error:function(data){
				alert("登陆出现异常，请重试3");
			},
		});
		return false;
	});
});
</script>
<style>
.loginbox{
	min-height:300px;
	margin:100px auto 0 auto;
}
.loginbtn{
	min-width:150px;
}
</style>
<div class="row">
	<div class="col-md-6 col-md-offset-3" >
		<div class="loginbox">
			<div class="row">
	   			<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-md-2 control-label">工号</label>
				    <div class="col-md-8">
				      <input type="text" class="form-control" id="username" name="username" placeholder="工号">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-md-2 control-label">密码</label>
				    <div class="col-md-8">
				      <input type="password" class="form-control" id="password" name="password" placeholder="密码">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit" class="btn btn-default loginbtn">登陆</button>
				    </div>
				  </div>
				</form>
			</div>
	   	</div>
	</div>
</div>

</body>

</html><?php }} ?>
