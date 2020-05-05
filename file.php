<?php
$h="input.txt";
$f =fopen($h,"r");//opens the file for reading operation only
/*$f =fopen($h,"r+");//opens the file for both reading and writing
$f =fopen($h,"w");//opens the file for writing operation only place the filepointer at the begining of the file if the file doesn't exist its try to create a new file.  
$f =fopen($h,"w+");//opens the file for writing and reading operation  place the filepointer at the begining of the file if the file doesn't exist its try to create a new file.
$f =fopen($h,"a");//opens the file for writing operation only place the filepointer at the end of the file if the file doesn't exist its try to create a new file.  
$f =fopen($h,"a+");//opens the file for writing and reading operation  place the filepointer at the end of the file if the file doesn't exist its try to create a new file.*/
 if( $f == false ) {
            echo ( "Error in opening file" );
            exit();
         }
$size=filesize($h);
$content=fread($f,$size);
fclose($f);
echo $size;
echo "<p>".$content."</p>";
?>
