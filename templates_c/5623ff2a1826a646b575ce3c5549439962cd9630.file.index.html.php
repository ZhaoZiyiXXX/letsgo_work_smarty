<?php /* Smarty version Smarty-3.1.19, created on 2015-01-09 16:03:50
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:306235493b734d1d104-22791927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5623ff2a1826a646b575ce3c5549439962cd9630' => 
    array (
      0 => 'templates\\index.html',
      1 => 1420790393,
      2 => 'file',
    ),
    '7943b5739e6469335dfd7ed5b4e54da5b096b7bf' => 
    array (
      0 => 'templates\\layout.html',
      1 => 1420543892,
      2 => 'file',
    ),
    '5811db6a4e061d23cc5f37d8e87eb9bf0a693f97' => 
    array (
      0 => 'templates\\base.html',
      1 => 1420790581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306235493b734d1d104-22791927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5493b734d7ad24_84248349',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5493b734d7ad24_84248349')) {function content_5493b734d7ad24_84248349($_smarty_tpl) {?><!DOCTYPE html>
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
	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 menu">
			<ul class="nav nav-pills nav-stacked" role="tablist" id="leftmenu">
				<!-- 公共菜单 -->
				<p>公共菜单</p>
				<li class="active"><a href="/index.php">公告栏</a></li>
				<li><a href="#" >个人信息</a></li>
				<li><a href="#">修改信息</a></li>
				<li><a href="#">查询他人信息</a></li>
				<hr />
				<p>教材团购</p>
				<li><a href="/book/">教材预定</a></li>
				<li><a href="/book/order">查看购物车</a></li>
				<li><a href="/user/order">我的订单</a></li>
				<li><a href="#">教材签收</a></li>
				<li><a href="#">我的退货</a></li>
				<li><a href="#">退书资源池</a></li>
				<li><a href="#">教材结账</a></li>
				<hr />
				<p>财务相关</p>
				<li><a href="#">我的账户</a></li>
				<li><a href="#">提交报销</a></li>
				<hr />
				<!-- 喵校园业务相关菜单 -->
				<p>喵校园</p>
				<li><a href="#">快速链接编辑</a></li>
				<li><a href="#">校区关注人数</a></li>
				<li><a href="#">预留1</a></li>
				<li><a href="#">预留2</a></li>
				<hr />
				<!-- 校区主管菜单 -->
				<p>校区主管</p>
				<li><a href="#">校区订单</a></li>
				<li><a href="#">财务审批</a></li>
				<hr />
				<!-- 超级管理员菜单 -->
				<p>管理员功能</p>
				<li><a href="#">供应商数据录入</a></li>
				<li><a href="#">供应商数据分配</a></li>
				<li><a href="#">注册审批</a></li>
				<li><a href="#">发货状态修改</a></li>
			</ul>
	    </div>
		<div class="col-lg-10 col-md-10 col-sm-9 col-xs-8 ">
			
<script src="/static/js/baiduTemplate.js"></script>
<script>
$(document).ready(function(){
	checkuserlogin();
	$.ajax({
		type:"GET",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/notices",
		dataType:"json",
		data:{},
		success:function(data){
			if(data.result ==0){
				var bt=baidu.template;
				var html=bt('t:search_result',data);
				$("#result").html(html);
			}
		},
		error:function(data){
		},
	});
});
</script>
<style>
th,td{
	font-size:14px;
	text-align:center;
}

</style>
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="title">
				<p>公告栏</p>
			</div>
			<table class="table table-bordered">
			<thead>
				<tr>
					<th class="title">发布时间</th>
					<th>主题</th>
				</tr>
			</thead>
			<tbody id="result">
			</tbody>

			</table>
		</div>
	</div>
<script id='t:search_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
				<tr>
					<td><<?php ?>%=data[i].releaseTime%<?php ?>></td>
					<td class="tal"><<?php ?>%=data[i].title%<?php ?>></td>
				</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>

		</div>
	</div>
</div>

</body>

</html><?php }} ?>
