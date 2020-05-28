<!DOCTYPE html>
<html>
  <head>
    <?php include "./template/header.php" ?>
  </head>
  <body>
    <?php include "./template/menu.php" ?>
    <div id="main" style="position:absolute;top:37px;left:5px;width:98%;">
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:68%;">
        <div id="" style="border: 1px solid gray;"><?php include "./template/bulletin.php" ?></div>
      </div>
      <div style="float:left;width:1%;">&nbsp;</div>
      <div style="float:left;width:29%;">
        <div id="" style="border: 1px solid gray;">
        <?php 
          if($_COOKIE["uid"]!='')
            echo "欢迎您，".$_COOKIE["uname"];
          else
            echo "您还未登入";
        ?>
        </div>
      </div>
      <div style="float:left;width:100%;"><br/></div>
      <div id="footer" style="float:left;width:100%;border: 1px solid gray;"><center><?php include "./template/footer.php" ?></center></div>
    </div>
  </body>
</html>