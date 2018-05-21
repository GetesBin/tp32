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
		        <a class="nav-link" href="/thinkphp323/index.php/home/Index/store">我的商城<span class="sr-only">(current)</span></a>
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
<!--   <link rel="stylesheet" href="/thinkphp323/Public/css/custom.css">
  <link rel="stylesheet" href="/thinkphp323/Public/css/iosOverlay.css">
  <link rel="stylesheet" href="/thinkphp323/Public/css/prettify.css"> -->
		<div class="jumbotron">
		  <h1 class="display-4">个人中心</h1>
		  <p class="lead">你可以看到自己的积分.</p>
		  <hr class="my-4">
		  <p class="lead">我的积分: <span style="font-size: 25px;"><b><?php echo ($money); ?></b></span></p>
		</div>
		<input type="hidden" class="info" value="<?php echo ($info['0']); ?>">
		<?php if(is_array($info)): foreach($info as $k=>$val): ?><div class="container" style="margin-top: 2%;">
		    <div class="row">
			    <div class="col" style="padding-top: 1%;">
			      <?php echo ($val['taskname']); ?>
			    </div>
			    <div class="col-6" style="padding-top: 1%;">
				    <div class="progress">
					   <div class="progress-bar" id="p<?php echo ($val['id']); ?>" role="progressbar" style="width: 0%;color:black;" >0%</div>
					</div>
			    </div>
			    <div class="col" style="text-align: center;">
			      <button type="button" class="btn btn-outline-primary" id="pbar<?php echo ($val['id']); ?>" onclick="pbar(<?php echo ($val['id']); ?>,<?php echo ($val['money']); ?>)">签到 +<?php echo ($val['money']); ?></button>
			    </div>
		    </div>
		</div><?php endforeach; endif; ?>
		<div class="jumbotron" style="display: none;">
		  <h1 class="lead" style="text-align:center;">暂无任务, <span onclick="go()">点击去接任务</span></h1>
		</div>
		<!-- <button id="checkMark" class="btn">完成任务</button> -->
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- 	<script src="/thinkphp323/Public/js/iosOverlay.js"></script>
		<script src="/thinkphp323/Public/js/spin.min.js"></script>
		<script src="/thinkphp323/Public/js/prettify.js"></script>
		<script src="/thinkphp323/Public/js/custom.js"></script> -->
		<script src="/thinkphp323/Public/js/jquery.min.js"></script>
		<script type="text/javascript">
			$(function (){
				if($(".info").val() == ''){
					$(".container").css("display","none");
					$(".jumbotron").css("display","block");
				}
			})
			function pbar(k,money){
				$("#p"+k).css("width","100%");
				$("#p"+k).css("color","white");
				$("#p"+k).html("100%");
				$("#pbar"+k).attr("class","btn btn-outline-primary disabled");
				$.ajax({
				    type: 'POST',
				    async:false,
				    // timeout : 1500,
				    url: "/thinkphp323/index.php/home/index/saveTask",
				    data: {id:k,money:money},
				    success: function(data){
				    	// window.location.href = window.location.href;
				    	// history.go(0);
				    },
				});
				setTimeout(function(){  //使用  setTimeout（）方法设定定时2000毫秒
					window.location.reload();//页面刷新
				},1000);
			}
			function go(){
				window.location.href = "/thinkphp323/index.php/home/index/tasklist";
			}
		</script>
	</body>
</html>