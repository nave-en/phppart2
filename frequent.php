<?php 
$fname="input.txt";
$file=fopen($fname,"r");
$size=filesize($fname);
$content=fread($file,$size);
$input=$ans=array();
$input=explode(" ",$content);
$ans=array_count_values($input);
arsort($ans);
$n=sizeof($ans);
$key=array_keys($ans);
$max=0;
for($i=0;$i<$n;$i++)
{
if($max==0)
{
$max=$ans[$key[$i]];
echo $key[$i];
echo"\n";
}
else if($max == $ans[$key[$i]])
{
	echo $key[$i];
	echo "\n";
}
}
?>