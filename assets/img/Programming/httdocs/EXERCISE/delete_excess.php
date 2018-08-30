<?php 


$input = "kkkrr";

$str_ar = str_split($input);

print_r($str_ar);
//echo $input[17];

 $count = count($str_ar);
  $count2 = $count + 1;
   $n = 1;
    $delete = 0;

for ($i=0; $i < $count; $i++) { 
	$initial = $input[$i];

	while ($n < $count) {
		$next = $input[$n];

			if ($initial === $next) {
				$delete = $delete + 1;
			}  //if end

		$n++;
		break;
	}  //while end

} //for end

echo  "<h1>Delete " . $delete . " Characters!</h1>";


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>testing</title>
 </head>
 <body>
 <form>
 	<input type="submit" name="swaps">
 </form>
 </body>
 </html>
