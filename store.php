<?php
$myfile =fopen("loginData.txt" , "a+");
$txt = "Product Data :" .$_POST['order']." -> Start date : ".$_POST['start'];
fwrite(myfile, $txt);
fclose($myfile);


?>
