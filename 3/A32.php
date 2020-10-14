<?php
/* Name:Chang hongxiang
  ID:602110200
  Wechat name:Chang
  */
echo"input number of data:";
$number = fgets(STDIN);
for($i=1;$i<=$number;$i++)
{
  echo"input score".($i).":";
  $score[$i] = fgets(STDIN);
  $sum+=$score[$i];
}
$average=$sum/$number;
echo"The average score for ";
for($i=1;$i<=$number;$i++)
{echo $score[$i].", ";}
echo "=".$average;
