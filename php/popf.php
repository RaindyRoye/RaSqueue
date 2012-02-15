<?php
$pos = 2;
include("squirrel.class.php");
$smq = new Squirrel('127.0.0.1', 6061);
$popget = $smq->get_head();
echo "The SquirrelMQ head is: $popget\r\n";
?>
