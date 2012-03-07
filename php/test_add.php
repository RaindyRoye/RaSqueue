<?php
include('squirrel.class.php');

$squirrel = new Squirrel();

$start = time();

for ($i = 0; $i < 1000000; $i++)
	$squirrel->push_tail("-->NO number[$i] record");

$end = time();
echo $end - $start;
?>
