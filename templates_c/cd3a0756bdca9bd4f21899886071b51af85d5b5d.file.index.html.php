<?php /* Smarty version Smarty-3.1.19, created on 2015-01-09 16:14:24
         compiled from "templates\book\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2295254a27972345ba6-15766040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd3a0756bdca9bd4f21899886071b51af85d5b5d' => 
    array (
      0 => 'templates\\book\\index.html',
      1 => 1420791262,
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
  'nocache_hash' => '2295254a27972345ba6-15766040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a279723b31b2_90939457',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a279723b31b2_90939457')) {function content_54a279723b31b2_90939457($_smarty_tpl) {?><!DOCTYPE html>
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
<link href="/static/css/buybook.css" rel="stylesheet">
<script>

function add2car(bookid){
	$.ajax({
		type:"POST",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/Bookcar",
		dataType:"json",
		data:{
			bookid:bookid,
		    staffid:$('#staffid').val(),
		    type:"new"
		},
		success:function(data){
			if(data.result ==0){
				var bt=baidu.template;
				var html=bt('t:bookcar_result',data);
				$("#bookcarresult").html(html);
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}

function deletefromcar(bookid){
	$.ajax({
		type:"POST",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/Bookcar",
		dataType:"json",
		data:{
			bookid:bookid,
		    staffid:$('#staffid').val(),
		    type:"delete",
		},
		success:function(data){
			if(data.result ==0){
				var bt=baidu.template;
				var html=bt('t:bookcar_result',data);
				$("#bookcarresult").html(html);
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}

$(document).ready(function(){
	checkuserlogin();
	$.ajax({
		type:"GET",
		url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/bookcars",
		dataType:"json",
		data:{
			staffid:$('#staffid').val(),
		},
		success:function(data){
			if(data.result ==0){
				var bt=baidu.template;
				var html=bt('t:bookcar_result',data);
				$("#bookcarresult").html(html);
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
	
	$("#nameclick").click(function(){
		$("#submit").text("按名称搜索");
	});

	$("#isbnclick").click(function(){
		$("#submit").text("按ISBN搜索");
	});

	$("#submit").click(function(){
		if("按ISBN搜索"==$("#submit").text()){
			$.ajax({
				type:"GET",
				url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/book",
				dataType:"json",
				data:{
					q:$("#search").val(),
				    type:"ISBN"
				},
				success:function(data){
					if(data.result ==0){
						var bt=baidu.template;
						var html=bt('t:search_result',data);
						$("#result").html(html);
					}
				},
				error:function(data){
					alert("出错了，请联系系统管理员");
				},
			});
		}else{
			$.ajax({
				type:"GET",
				url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/book",
				dataType:"json",
				data:{
					q:$("#search").val().replace(/ /g,"#"),
				    type:"123",
				    dataType : "json",
				},
				success:function(data){
					if(data.result ==0){
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
	});
});
</script>

	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="title">
				<p>教材预定</p>
			</div>
		<div class="col-lg-6 col-md-6">
		    <div class="input-group">
		      <input type="text" class="form-control" id="search">
		      <div class="input-group-btn">
	            <button id="submit" type="button" class="btn btn-default" tabindex="-1">按名称搜索</button>
	            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" tabindex="-1">
	              <span class="caret"></span>
	            </button>
	            <ul class="dropdown-menu dropdown-menu-right" role="menu" >
	              <li><a id="nameclick" href="#">按名称搜索</a></li>
	              <li><a id="isbnclick" href="#">按ISBN搜索</a></li>
	            </ul>
	          </div>
		    </div><!-- /input-group -->
			<div class="bookbox" id="result">
				
			</div>
		  </div><!-- /.col-lg-6 -->
		  <div class="col-lg-6 col-md-6 dpb">
		      <div class="panel panel-default car">
				<div class="panel-heading">
		    		<h3 class="panel-title">我的购物车</h3>
				</div>
				<div class="panel-body" >
					<table class="table"  id="bookcar">
					<thead>
			    		<tr>
			    			<th>书名</th>
			    			<th>出版社</th>
			    			<th>定价</th>
			    			<th>操作</th>
			    		</tr>
			    		</thead>
			    		<tbody id="bookcarresult">

			    		</tbody>
		    		</table>
		    	<button type="button" class="btn 	btn-info"  onclick="window.location='/book/order'">生成订单</button>
		  		</div>
			  </div>
		  </div>
		</div>
	</div>
<script id='t:search_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
				<div class="row mbookinbox">
					<div class="col-lg-2 col-md-2 col-sm-2">
						<img src="<<?php ?>%=data[i].imgpath%<?php ?>>" alt="" class="pic" />
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7">
						<p class="booktitle">
							<span ><<?php ?>%=data[i].name%<?php ?>></span>
						</p>
						<p class="search_book_author" > 
						<span class="search_now_price">&yen;<<?php ?>%=data[i].fixedPrice%<?php ?>></span>
						<span><<?php ?>%=data[i].author%<?php ?>></span>
						</p>
						<p class="search_book_author" > 
						<span > <<?php ?>%=data[i].isbn%<?php ?>></span>
						<span>  /<<?php ?>%=data[i].press%<?php ?>></span>
						</p>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<button type="button" class="btn btn-info flagsold  btn-block" onclick="add2car('<<?php ?>%=data[i].id%<?php ?>>')">加入购物车</button>
					</div>
				</div>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>
<script id='t:bookcar_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
	<tr>
		<td><<?php ?>%=data[i].name%<?php ?>></td>
		<td><<?php ?>%=data[i].press%<?php ?>></td>
		<td><<?php ?>%=data[i].fixedPrice%<?php ?>></td>
		<td><button class="btn btn-mini btn-default" onclick="deletefromcar('<<?php ?>%=data[i].bookid%<?php ?>>')">删除</button></td>
	</tr> 
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>

		</div>
	</div>
</div>

</body>

</html><?php }} ?>
