var API_ROOT = "http://api.mallschool.com";
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
				'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-log-in"></span>登陆 </a>'+
				'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
				$('#top').html(html);
				window.location.href="/login";
			}
			$('#staffid').val(data);
			$.ajax({
				type:"GET",
				url:API_ROOT+"/Letsgo/user",
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
					'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-log-in"></span>登陆 </a>'+
					'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
					$('#top').html(html);
					window.location.href="/login";
				},
			});
		},
		error:function(data){
			var html = '<a style="margin-left:40px;" class="menu-left" href="/"><span class="glyphicon glyphicon-home"></span> 首 页</a> '+
			'<a style="margin-right:40px;" class="menu-right" href="/login"><span class="glyphicon glyphicon-log-in"></span>登陆 </a>'+
			'<a class="menu-right" href="/register"><span 	class="glyphicon glyphicon-edit"></span> 注册</a>';
			$('#top').html(html);
		},
	});
}