<?php

include_once('validator.php');

class PasswordValidator extends Validator {
	protected $pattern = "/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/";
}

$passwordValidator = new PasswordValidator;
$passwordValidator->isValid($_SESSION['pass']);