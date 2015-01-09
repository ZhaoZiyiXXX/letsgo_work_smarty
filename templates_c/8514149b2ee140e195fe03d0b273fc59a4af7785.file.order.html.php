<?php /* Smarty version Smarty-3.1.19, created on 2015-01-09 16:15:03
         compiled from "templates\book\order.html" */ ?>
<?php /*%%SmartyHeaderCode:1831154a28f6c13b6d1-90408385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8514149b2ee140e195fe03d0b273fc59a4af7785' => 
    array (
      0 => 'templates\\book\\order.html',
      1 => 1420791258,
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
  'nocache_hash' => '1831154a28f6c13b6d1-90408385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a28f6c1c03f6_50686617',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a28f6c1c03f6_50686617')) {function content_54a28f6c1c03f6_50686617($_smarty_tpl) {?><!DOCTYPE html>
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
$(document).ready(function(){
	checkuserlogin();
	setTimeout(getbookcarinfo,300); 
	
	$('li').click(function(){
		$('#campus').text($(this).text());
	});
	$('#submit').click(function(){
		$('#ordersubmit').modal('show');
	});
	
	$('#postorder').click(function(){
		if(!$('#ordername').val()){
			alert("必须填写订单名称");
			$('#ordername').focus();
			return;
		}
		//把订单详情准备到ordertails变量里
		var ordertails = new Array(); 
		$("td.test").each(function(n){
			ordertails[n] = $(this).attr('id')+"|"+$(this).html();
		  });
		
		$.ajax({
			type:"POST",
			url:"<?php echo $_smarty_tpl->tpl_vars['api_url']->value;?>
"+"/letsgo/order",
			dataType:"json",
			data:{
				ordername:$('#ordername').val(),
				mark:$('#mark').val(),
				place:$('#campus').text(),
				details:JSON.stringify(ordertails),
				staffid:$('#staffid').val(),
			},
			success:function(data){
				if(1000 != data.data){
					window.location.href = "/user/order";
				}else{
					alert("出错了，请在网络状态良好的情况下重试");
				}
			},
			error:function(data){
				alert("出错了，请在网络状态良好的情况下重试");
			},
		});
	});
});
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
				var html=bt('t:search_result',data);
				$("#result").html(html);
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}
function getbookcarinfo(){
	$.ajax({
		type:"GET",
		url:API_ROOT+"/letsgo/bookcars",
		dataType:"json",
		data:{
			staffid:$('#staffid').val(),
		},
		success:function(data){
			if(data.result ==0){
				var i;
				var temp;
				for(i = 0;i<data.data.length;i++){
					temp +="<tr><td>"+data.data[i].name+"</td><td>"+data.data[i].author+
					"</td><td>"+data.data[i].press+"</td><td>"+data.data[i].fixedPrice+
					"</td><td class=\"test\" id=\"bookid"+data.data[i].bookid+"\">0</td></tr>";
					$('#orderdetails').html(temp);
				}
				var bt=baidu.template;
				var html=bt('t:search_result',data);
				$("#result").html(html);
				$(".count").on('input',function(e){
					$('#'+ "bookid"+ $(this).attr('id')).html($(this).val());
				});
			}
		},
		error:function(data){
			alert("出错了，请联系系统管理员");
		},
	});
}
</script>
<style>
#orderdetails td{
	font-size:0.8em;
	text-align:center;
}
th{
	font-size:0.9em;
	text-align:center;
}

p.title{
	font-weight:bold;
}
p.campus{
	float:left;
	padding:5px;
	font-size:0.8em;
}


</style>
	<div class="row" style="text-align: center">
		<div id="box" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="title">
				<p>我的购物车</p>
			</div>
			<p>请特别注意：不需要提交的教材请删除，否则订单中会出现数量为0的信息，该问题需要过段时间解决</p>
			<div class="bookbox" id="result">
			</div>
			<button id="submit" type="submit" class="btn btn-default">生成订单</button>
		</div>
	</div>

<div class="modal fade" id="ordersubmit">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">填写订单信息</h4>
      </div>
      <div class="modal-body">
      	<p class="title">订单名称<input type="text" id="ordername" style="width:100%;"/></p>
      	<p class="title">订单备注<input type="text" id="mark" placeholder="&nbsp备注是给你自己看的" style="width:100%;"/></p>
      	<p class="title">送货地点</p>
      	<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="font-size:0.8em;">
		    切换送货地点
		    <span class="caret"></span>
		  </button>
		  <p  id="campus" class="campus">同济大学嘉定校区7号楼</p>
		  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">同济大学嘉定校区7号楼</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">同济大学嘉定校区19号楼</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">同济大学四平路校区南校区</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">同济大学四平路校区西南八楼</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">同济大学四平路校区西北四楼</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">上海财经大学国定路校区</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">上海财经大学武川路校区</a></li>
		    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">华东理工大学奉贤校区</a></li>
		  </ul>
		</div>
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
      <div class="modal-footer">
        <button id="postorder" type="button" class="btn btn-primary" >提交订单</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script id='t:search_result' type="text/template">
<!-- 模板部分 -->
<<?php ?>% for(var i = 0; i<data.length;i++){%<?php ?>>
				<div class="row mbookinbox">
					<div class="col-lg-2 col-md-2 col-sm-2">
						<img src="<<?php ?>%=data[i].imgpath%<?php ?>>" alt="" class="pic" />
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5">
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
					<div class="col-lg-3 col-md-3 col-sm-3" style="padding:30px;">
						数量<input class="count" id="<<?php ?>%=data[i].bookid%<?php ?>>" type="text" style="max-width:100px;margin-left:10px;"/>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2" style="padding:25px;">
						<button class="btn btn-default" onclick="deletefromcar('<<?php ?>%=data[i].bookid%<?php ?>>')">删除</button>
					</div>
				</div>
<<?php ?>%}%<?php ?>>
<!-- 模板结束 -->   
</script>

		</div>
	</div>
</div>

</body>

</html><?php }} ?>
