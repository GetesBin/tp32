<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title></title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="/thinkphp323/index.php/home/Index/index">首页</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		    <?php if(!session('email')){ ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/login">登录<span class="sr-only">(current)</span></a>
		      </li>
		    <?php }else{ ?>
		    <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/yourself">个人中心<span class="sr-only">(current)</span></a>
		      </li>
		    <?php } ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/singup">注册<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/tasklist">任务列表<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/outlogin">退出登录<span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		
	    <table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">排名</th>
		      <th scope="col">任务名称</th>
		      <th scope="col">任务奖励</th>
		      <th scope="col">操作</th>
		    </tr>
		  </thead>
		  <tbody>
		<?php if(is_array($info)): foreach($info as $k=>$val): ?><tr>
		      <th scope="row" class="bianhao<?php echo ($k+1); ?>"><?php echo ($k+1); ?></th>
		      <td style="text-align:center;"><?php echo ($val['taskname']); ?></td>
		      <td style="text-align:center;"><?php echo ($val['money']); ?></td>
		      <td style="text-align:center;">
		       <a id="accept" href="/thinkphp323/index.php/home/index/acceptTask?id=<?php echo ($k+1); ?>" class="btn btn-primary">接受</a>
		      </td>
		    </tr><?php endforeach; endif; ?>
		  </tbody>
		</table>
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<!-- <script src="http://www.jq22.com/jquery/jquery-2.1.1.js"></script> style='pointer-events: none;'-->
		<!-- <script type="text/javascript">
			str = <?php echo ($data); ?>
			for (var i = 0; i <= <?php echo ($data); ?>.length; i++) {
				if(str.indexOf($(".bianhao"+i).val() != -1)){

				};
			}
		</script> -->
		<!-- <script type="text/javascript">Uncaught SyntaxError: Unexpected token :
			function accept(id){
				$.ajax(function(){
					type:"post",
					url:"/thinkphp323/index.php/home/index/acceptTask",
					data:id,
					dataType:"json",
					success:function(data){
						alert(data)
					},
					error:function(err){
						alert(err)
					}
				});
			}
		</script> -->
	</body>
</html>