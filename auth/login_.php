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
  echo "在3秒后跳转到登入界面";
  header("Refresh:3;url=login.php");
}
else
{
  $servername = "localhost";
  $username = "root";
  $password = "rootroot";
  $dbname = "OJ";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("连接失败: " . $conn->connect_error);
  } 
  $sql = "SELECT id,name,password FROM `user`";
  $result = $conn->query($sql);
  $json = array();
  $xxx=false;
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if($row["name"]==$_POST["name"])
      if($row["password"]==$_POST["password"])
      {
        setcookie("uid", $row["id"], time()+18000, "/");
        setcookie("uname", $row["name"], time()+18000, "/");
        $xxx=true;
      }
  }
  }
  if($xxx)
  {
    echo "登入成功！<br/>在3秒后跳转到主页";
    header("Refresh:3;url=/index.php");
  }
  else
  {
    echo "登入失败！<br/>请检查账号密码<br/>在3秒后跳转到登入界面";
    header("Refresh:3;url=login.php");
  }
  $conn->close();
}
?>
</div>
<div style="float:left;width:1%;">&nbsp;</div>
<div style="float:left;width:29%;"></div>
</div>