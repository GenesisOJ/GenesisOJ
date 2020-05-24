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
<?php
if($_POST["captcha"]!=$_COOKIE["captcha"])
{
  echo "验证码错误！<br/>";
  echo "在3秒后跳转到注册界面";
  header("Refresh:3;url=register.php");
}
else
{
  $dbhost = 'localhost';  // mysql服务器主机地址
  $dbuser = 'root';       // mysql用户名
  $dbpass = 'rootroot';       // mysql用户名密码
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
  if(!$conn)
    die("连接失败!<br/>\n");
  mysqli_query($conn , "set names utf8");
  $name = $_POST["name"];
  $password = $_POST["password"];
  $sql = "INSERT INTO `user` ".
          "(name,password) ".
          "VALUES ".
          "('$name','$password')";
  mysqli_select_db( $conn, 'OJ' );
  $retval = mysqli_query( $conn, $sql );
  if(! $retval )
  {
    die("用户注册失败!\n可能是用户名重复，换个用户名试试？\n");
    header("Refresh:3;url=register.php");
  }
  else
  {
    echo "用户注册成功!\n";
    header("Refresh:3;url=/index.php");
  }
  mysqli_close($conn);
}
?>
</div>
<div style="float:left;width:1%;">&nbsp;</div>
<div style="float:left;width:29%;"></div>
</div>
