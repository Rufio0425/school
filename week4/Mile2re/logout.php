<?php 

include_once('myincludes.php');
session_destroy();

$msg = 'you are being logged out';
header('refresh:3; url=index.php');

?>

<div><?= $msg; ?></div>