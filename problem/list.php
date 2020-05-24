<!DOCTYPE html>
<html class="no-js" lang="zh">
<head>  
  <?php include "../template/header.php" ?>
</head>
<body>
<?php include "../template/menu.php" ?>
<?php 
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "OJ";
?>
    <div id="main" style="position:absolute;top:37px;left:5px;width:98%;">
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:68%;"><div>
<?php 
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT id,name FROM `problem`";
  $result = $conn->query($sql);
  $json = array();
  if ($result->num_rows > 0) 
  {
    while($row = $result->fetch_assoc()) 
    {
?>
      | <?php echo $row["id"]; ?> | <a href="./index.php?id=<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></a> | <br/>
<?php 
    }
  }
?>
      </div></div>
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:29%;"><div>
      </div></div>
    </div>
</body> 
</html>
