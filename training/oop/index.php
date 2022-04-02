<?php
include 'auto.php';
include 'owner.php';

$owner = new Owner("MB", "S","black");
echo "Full info: ". $owner->getFullInfo();




?>