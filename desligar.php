<?php
	$pino = $_GET["pino"];
	system("gpio -g mode $pino out");
	system("gpio -g write $pino 0");

?>