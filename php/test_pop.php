<?php
include('squirrel.class.php');

$squirrel = new Squirrel();
$tmp = NULL;

$start = time();

for ($i = 0; $i < 100000; $i++){
	$tmp = $squirrel->pop_head();
#	print $tmp;
#	$size = $squirrel->size();
#	if ($size == 0 ) exit;
	}

$end = time();
echo $end - $start;
?>
