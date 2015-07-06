<?php
include('squirrel.class.php');

$squirrel = new Squirrel('127.0.0.1',6061);

$start = time();

for ($i = 0; $i < 100000; $i++)
	$squirrel->push_tail("-->NO number[$i] record");

$end = time();
echo $end - $start;
?>
