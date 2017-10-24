<?php	
	$pino = $_GET["pino"];
	$i=0;
	system("gpio -g mode $pino out");
	while($i < 10){
		system("gpio -g write $pino 1");
		sleep(1.0);
		system("gpio -g write $pino 0");
		sleep(1.0);
		$i = $i+1;
	}
?>