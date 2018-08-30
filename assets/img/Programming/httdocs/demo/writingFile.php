
<?php

$file = "example.txt";
if ($handle= fopen($file, 'w')) {

fwrite($handle, "i love php and sublime text editor");

   fclose($handle);
}else {

	echo "the application cannot write";
}


?>