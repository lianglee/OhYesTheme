<?php
header('Content-Type: image/jpeg');
$filehandler = new ElggFile();
$filehandler->owner_guid =  $user;
$filehandler->setFilename('ohyes/profilecover.jpg');
if ($filehandler->exists()){
	echo $filehandler->grabFile();
}
