<!DOCTYPE html>
<html class="no-js" lang="zh">
<head>  
  <?php include "../template/header.php" ?>
</head>
<body>
<?php include "../template/menu.php" ?>
<div id="main" style="position:absolute;top:37px;left:5px;width:98%;">
<div style="float:left;width:1%;">&nbsp;</div>
<div style="float:left;width:68%;">
<?php if($_COOKIE["uid"]!='') { ?>
<h3>您已登入</h3>
<a href="/index.php">返回首页</a>
<?php } ?>
<?php if($_COOKIE["uid"]=='') { ?>
<h3>登入</h3>
<form action="login_.php" method="post">
用户名: <input type="text" name="name"><br/>
密码: <input type="password" name="password"><br/>
<?php include "../api/captcha.php" ?><input type="text" name="captcha"><br/>
<input type="submit" value="提交">
</form>
<?php } ?>
</div>
<div style="float:left;width:1%;">&nbsp;</div>
<div style="float:left;width:29%;"></div>
</div>