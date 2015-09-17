<?php 
require('classes/UsernameValidator.php');
require('classes/PasswordValidator.php');

session_start();
// the ending '? >' php tag does not need to be here because there will not be any html in here, this still runs properly.