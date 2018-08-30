
<?php

$file = "example.txt";
if ($handle= fopen($file, 'r')) {

echo fread($handle, filesize($file)); //each bite equals a character.

   fclose($handle);
}else {

	echo "the application cannot write";
}


?>