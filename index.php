<?php

// OK, let's do this, please also read the other file
require_once('Oppertunity.php');
$oppertunity = new Oppertunity();

$oppertunity->setInterested(false);
$oppertunity->setWorkingHours(40);
$oppertunity->setWorkingHome(true);

echo $oppertunity->response();
// Please, tell me if you got this to run ;) There's an output