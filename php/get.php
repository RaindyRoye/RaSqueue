<?php
include("squirrel.class.php");
$smq = new Squirrel('127.0.0.1', 6061);
$size = $smq->size();
echo "The SquirrelMQ size: $size";
?>
