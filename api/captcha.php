<?php
$a=rand()%3;
$c=rand()%100;
$d=rand()%100;
if($a==0)
{
  echo $c."+".$d."=？";
  setcookie("captcha", $c+$d, time()+300, "/");
}
if($a==1)
{
  echo $c."-".$d."=？";
  setcookie("captcha", $c-$d, time()+300, "/");
}
if($a==2)
{
  echo $c."*".$d."=？";
  setcookie("captcha", $c*$d, time()+300, "/");
}
?>