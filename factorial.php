<?php
function factorial($a)
{
    $temp=1;
    for($i=$a;$i>0;$i--)
    {
        $temp*=$i;
    }
    return $temp; 
}
$num=(int)readline();
if($num == 0)
echo "The factorial of $num :1";
else if($num<0)
echo "input error";
else{
$ans=factorial($num);
echo "the factorial of $num is:".$ans;
}
?>