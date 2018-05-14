<?php if (!defined('THINK_PATH')) exit();?><html>
	<head>
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title></title>
	</head>
	<body>
		<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand" href="/thinkphp323/index.php/Home/Index/index">首页</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		    <?php if(!session('email')){ ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/Home/Index/login">登录<span class="sr-only">(current)</span></a>
		      </li>
		    <?php }else{ ?>
		    <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/Home/Index/yourself">个人中心<span class="sr-only">(current)</span></a>
		      </li>
		    <?php } ?>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/Home/Index/singup">注册<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/thinkphp323/index.php/Home/Index/outlogin">退出登录<span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		  </div>
		</nav>

		<div style="width:30%;height:40%;border:0px solid red;margin-left: 35%;margin-top: 10%">
		<form method="post" action="/thinkphp323/index.php/Home/Index/savelogin">
		  <div class="form-group">
		    <label for="exampleInputEmail1">邮箱</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="邮箱">
		    <small id="emailHelp" class="form-text text-muted">我们绝不会与其他人分享您的电子邮件。</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="密码">
		  </div>
		  <div class="form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">记住我</label>
		  </div>
		  <button type="submit" class="btn btn-primary">登录</button>
		</form>
		</div>
		<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>