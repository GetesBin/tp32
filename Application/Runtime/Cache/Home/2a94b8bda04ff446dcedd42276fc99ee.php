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
		    <a class="navbar-brand" href="/tp32/index.php/home/Index/index">首页</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		    <?php if(!session('email')){ ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/login">登录<span class="sr-only">(current)</span></a>
		      </li>
		    <?php }else{ ?>
		    <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/yourself">个人中心<span class="sr-only">(current)</span></a>
		      </li>
		    <?php } ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/singup">注册<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/tasklist">任务列表<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/store">我的商店<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/tp32/index.php/home/Index/outlogin">退出登录<span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img style="width:99%!important;margin-left: 4px;height: 92%;" class="d-block w-100" src="/tp32/Public/images/hh1.jpg" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img style="width:99%!important;margin-left: 4px;height: 92%;" class="d-block w-100" src="/tp32/Public/images/hh2.jpg" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img style="width:99%!important;margin-left: 4px;height: 92%;" class="d-block w-100" src="/tp32/Public/images/hh3.jpg" alt="Third slide">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">上一个</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">下一个</span>
		  </a>
		</div>
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript">
			document.oncontextmenu = function(){
			    event.returnValue = false;
			}
			// 或者直接返回整个事件
			document.oncontextmenu = function(){
			    return false;
			}
		</script>
	</body>
</html>