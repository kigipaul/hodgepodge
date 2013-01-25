<?php

$t1 = true;
$t2 = 1;
$t3 = 0;

/*echo "Start use if = 1\n====\n";
for($x = 0 ;$x<10;$x++){
$t3=0;
$time=microtime(true);
for($i = 0 ;$i < 100000000;$i++){
	if($t2 == 1){
		$t3++;
	}
}
$time = round(microtime(true) - $time,8);

echo "\tUse $time s\n";
}
echo "Stop use if = 1\n";*/
echo "Start use if true\n====\n";

for($x = 0 ;$x<10;$x++){
$t3=0;
$time=microtime(true);
for($i = 0 ;$i < 100000000;$i++){
	if($t1){
		$t3++;
	}
}
$time = round(microtime(true) - $time,8);

echo "\tUse $time s\n";
}


?>
