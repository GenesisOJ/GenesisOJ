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

function convertUrlQuery($query)
{
  $queryParts = explode('&', $query);
  $params = array();
  foreach ($queryParts as $param) {
    $item = explode('=', $param);
    $params[$item[0]] = $item[1];
  }
  return $params;
}
$url=convertUrlQuery($_SERVER["QUERY_STRING"]);
$id=$url["id"];
?>
<?php 
if($id!="")
{
  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT id,name,Description,Input,Output,SampleInput,SampleOutput,Hint FROM `problem`";
  $result = $conn->query($sql);
  $json = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
      if($id==$row["id"])
      {
        $name=$row["name"];
        $Description=$row["Description"];
        $Description=preg_replace("/</","&#60;",$Description);
        $Description=preg_replace("/>/","&#62;",$Description);
        $Description=preg_replace("/ /","&nbsp;",$Description);
        $Description=preg_replace("/\n/","<br>\n",$Description);
        $Input=$row["Input"];
        $Input=preg_replace("/</","&#60;",$Input);
        $Input=preg_replace("/>/","&#62;",$Input);
        $Input=preg_replace("/ /","&nbsp;",$Input);
        $Input=preg_replace("/\n/","<br>\n",$Input);
        $Output=$row["Output"];
        $Output=preg_replace("/</","&#60;",$Output);
        $Output=preg_replace("/>/","&#62;",$Output);
        $Output=preg_replace("/ /","&nbsp;",$Output);
        $Output=preg_replace("/\n/","<br>\n",$Output);
        $SampleInput=$row["SampleInput"];
        $SampleInput=preg_replace("/</","&#60;",$SampleInput);
        $SampleInput=preg_replace("/>/","&#62;",$SampleInput);
        $SampleInput=preg_replace("/ /","&nbsp;",$SampleInput);
        $SampleInput=preg_replace("/\n/","<br>\n",$SampleInput);
        $SampleOutput=$row["SampleOutput"];
        $SampleOutput=preg_replace("/</","&#60;",$SampleOutput);
        $SampleOutput=preg_replace("/>/","&#62;",$SampleOutput);
        $SampleOutput=preg_replace("/ /","&nbsp;",$SampleOutput);
        $SampleOutput=preg_replace("/\n/","<br>\n",$SampleOutput);
        $Hint=$row["Hint"];
        $Hint=preg_replace("/</","&#60;",$Hint);
        $Hint=preg_replace("/>/","&#62;",$Hint);
        $Hint=preg_replace("/ /","&nbsp;",$Hint);
        $Hint=preg_replace("/\n/","<br>\n",$Hint);
      }
    }
  }
?>

    <div id="main" style="position:absolute;top:37px;left:5px;width:98%;">
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:68%;"><div>
<div class="name">
  <h1><?php echo $name; ?></h1>
</div>
<div class="Description">
    <h3>Description</h3>
    <?php echo $Description;echo "\n"; ?>
</div>
<div class="Input">
    <h3>Input</h3>
    <?php echo $Input;echo "\n"; ?>
</div>
<div class="Output">
    <h3>blockquote</h3>
    <?php echo $Output;echo "\n"; ?>
</div>
<div class="SampleInput">
    <h3>SampleInput</h3>
    <?php echo $SampleInput;echo "\n"; ?>
</div>
<div class="SampleOutput">
    <h3>SampleOutput</h3>
    <?php echo $SampleOutput;echo "\n"; ?>
</div>
<div class="Hint">
    <h3>Hint</h3>
    <?php echo $Hint;echo "\n"; ?>
</div>
      </div></div>
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:29%;"><div>
        <b>时间限制：</b><br/>
        <b>空间限制：</b>
      </div></div>
    </div>
<?php }?>
</body> 
</html>
