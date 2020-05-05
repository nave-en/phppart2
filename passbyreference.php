<?php
function pass_by_reference(&$a)
{
    $a=$a+5;
    echo "value of the variable inside the function:$a\n";
}
$a=(int)readline();
pass_by_reference($a);
echo "value after calling the function:$a";
?>