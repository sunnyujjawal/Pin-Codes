<?php
$handle=opendir('js/');
$output=NULL;
if(file_exists($cache))
{
    echo 1;
    include($cache);
    
}
else{
    while(($file=readdir($handle)!=false))
{
    $output.=$file.'<br/>';
    
}
closedir($handle);
echo $output;

    $fh=fopen($cache,'w+')or die('error writing file');
    fwrite($fh,$output);
    fclose($fh);
    
}

?>