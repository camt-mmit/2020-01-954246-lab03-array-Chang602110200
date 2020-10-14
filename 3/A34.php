<?php
/* Name:Chang hongxiang  ID:602110200  Wechat name:Chang */

$sum=0;$score=[];
$number=0;$i=0;
while(true)
{
  echo"input score ".($i+1)." ('e' for end of data): ";
  $score[$i] = fgets(STDIN);
  if($score[$i]=='e')
  break;
  if($score[$i]=='e')
printf(" no data");
  $sum+=$score[$i];
  $i=$i+1;
}
$number=$i;
$average=$sum/$number;
echo"The average score for ";
for($i=0;$j<=$number-1;$i++)
{
  echo $score[$i];
  if($i==$number-2)
  {echo "and";}
  else if($i!=$number-2 && $i != $number-1)
  {echo ",";}
}
echo "=".$average;