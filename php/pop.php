<?php
include("squirrel.class.php");
$smq = new Squirrel('127.0.0.1', 6061);
$popget = $smq->pop_head();
echo "The SquirrelMQ header is: $popget\r\n";
$poptail = $smq->pop_tail();
echo "The Tail is: $poptail\r\n";
?>
