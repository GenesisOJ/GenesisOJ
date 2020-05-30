 <div id="topBar">
    <div style="padding-left: 10px;">
      <div id="devPanel" style="display: inline-block; padding-left: 15px; font-size: 14px; height: 100%;">
        <div id="devPanelCheats">
          <font size="5" face="verdana" color="blue"><a href="/" onclick="">GenesisOJ</a></font>
           |
          <a href="/problem/list.php" onclick="">题目列表</a>
           |
          <a href="#" onclick="">讨论</a>
		   |
          <a href="#" onclick="">比赛</a>
        </div>
      </div>
    </div>
    <div id="headerLinks" style="position: absolute; top: 0; right: 10px; float: right;">
      <div class="links-block" style="padding-top:3px;display:inline-block;">
        <a href="/faq.php" onclick="">关于我们</a>
         |
        <a href="#" onclick="">排行榜</a>
        <?php if($_COOKIE["uid"]=="") { ?>
         |
        <a href="/auth/login.php" onclick="">登入</a>
         |
        <a href="/auth/register.php" onclick="">注册</a>
        <?php } ?>
      </div>
    </div>
  </div>
