<?php
include('squirrel.class.php');

$squirrel = new Squirrel('192.168.1.44',6061);

$start = time();

for ($i = 0; $i < 100000; $i++)
	$squirrel->push_tail("-->NO number[$i] record");

$end = time();
echo $end - $start;
?>
