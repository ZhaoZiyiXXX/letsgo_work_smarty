<?php /* Smarty version Smarty-3.1.19, created on 2015-01-07 13:37:17
         compiled from "templates\user\order.html" */ ?>
<?php /*%%SmartyHeaderCode:1576154abc7989388b5-34925089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b4ad4494878eee29c50dfaf8d084853486d325d' => 
    array (
      0 => 'templates\\user\\order.html',
      1 => 1420609037,
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
      1 => 1420608038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1576154abc7989388b5-34925089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54abc7989b1a40_40591961',
  'variables' => 
  array (
    'api_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54abc7989b1a40_40591961')) {function content_54abc7989b1a40_40591961($_smarty_tpl) {?><!DOCTYPE html>
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
</head>
<script>
function logout(){
	$.ajax({
		type:"POST",
		url:"/session.php",
		dataType:"json",
		data:{
			action:"delete",
		},
		success:function(data){
			window.location.href="/login";
		},
		error:function(data){
			window.location.href="/login";
		},
	});
}
function checkuserlogin(){
	$.ajax({
		type:"GET",
		url:"/session.php",
		dataType:"json",
		data:{
			action:"get",
		},
		success:function(data){
			if(0==data){
				var html = '<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> '+
				'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-question-sign"></span>登陆 </a>'+
				'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
				$('#top').html(html);
				window.location.href="/login";
			}
			$('#staffid').val(data);
			$.ajax({
				type:"GET",
				url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/Letsgo/user",
				dataType:"json",
				data:{
					staffid:data,
				},
				success:function(data){
					var html = '<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> '+
					'<a class="menu-right" onclick="logout()">退出登陆</a>'+
					'<a class="menu-right" href="/userinfo">欢迎你： '+data.data.name+'</a>';
					$('#top').html(html);
				},
				error:function(data){
					var html = '<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> '+
					'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-question-sign"></span>登陆 </a>'+
					'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
					$('#top').html(html);
					window.location.href="/login";
				},
			});
		},
		error:function(data){
			var html = '<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> '+
			'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-question-sign"></span>登陆 </a>'+
			'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
			$('#top').html(html);
		},
	});
}
</script>
<body>
	<input type="hidden" id="staffid"/>
	<div class="top" id="top">
		<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> 
		<a style="margin-right:40px;" class="menu-right" href="/login">登陆 </a>
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
function getorder(){
	$.ajax({
		type:"GET",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/orders",
		dataType:"json",
		data:{
			staffid:$('#staffid').val(),
		},
		success:function(data){
			if(data.result ==0){
				var i;
				for(i=0;i<data.data.length;i++){
					var date = new Date(data.data[i].orderTime*1000);
					Y = date.getFullYear() + '-';
					M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
					D = date.getDate() + ' ';
					h = date.getHours() + ':';
					m = date.getMinutes() + ':';
					s = date.getSeconds(); 
					data.data[i].orderTime =Y+M+D+h+m+s;
				}
				var bt=baidu.template;
				var html=bt('t:search_result',data);
				$("#result").html(html);
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}

function orderdetail(orderid){
	$.ajax({
		type:"GET",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/order",
		dataType:"json",
		data:{
			id:orderid,
		},
		success:function(data){
			if(data.result ==0){
				var bt=baidu.template;
				var html=bt('t:modal_result',data);
				$("#orderdetails").html(html);
				$('#ordersubmit').modal('show');
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}
$(document).ready(function(){
	checkuserlogin();
	setTimeout(getorder,300); 
});
</script>
<style>
th{
	text-align:center;
}
</style>
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="title">
				<p>我的订单</p>
			</div>
			<table class="table">
			<thead>
				<tr>
					<th>订单号</th>
					<th>订单名称</th>
					<th>送货地点</th>
					<th>提交时间</th>
					<th>备注</th>
					<th>详情</th>
				</tr>
			</thead>
			<tbody id="result">
			</tbody>
			</table>
		</div>
	</div>
<div class="modal fade" id="ordersubmit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="ordername"></h4>
      </div>
      <div class="modal-body">
        <table class="table">
	        <thead>
		        <tr>
			        <th>书名</th>
			        <th>作者</th>
			        <th>出版社</th>
			        <th>定价</th>
			        <th>数量</th>
		        </tr>
	        </thead>
	        <tbody id="orderdetails">
	        </tbody>
        </table>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script id='t:search_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
				<tr>
					<td><<?php ?>%=data[i].id%<?php ?>></td>
					<td><<?php ?>%=data[i].orderName%<?php ?>></td>
					<td><<?php ?>%=data[i].address%<?php ?>></td>
					<td><<?php ?>%=data[i].orderTime%<?php ?>></td>
					<td><<?php ?>%=data[i].remark%<?php ?>></td>
					<td><button onclick="orderdetail('<<?php ?>%=data[i].id%<?php ?>>')" class="btn btn-default">查看详情</button></td>
				</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>
<script id='t:modal_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
				<tr>
					<td><<?php ?>%=data[i].name%<?php ?>></td>
					<td><<?php ?>%=data[i].author%<?php ?>></td>
					<td><<?php ?>%=data[i].press%<?php ?>></td>
					<td><<?php ?>%=data[i].fixedPrice%<?php ?>></td>
					<td><<?php ?>%=data[i].count%<?php ?>></td>
				</tr>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>

		</div>
	</div>
</div>

</body>

</html><?php }} ?>
