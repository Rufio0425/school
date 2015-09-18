<?php

include_once('validator.php');

class UsernameValidator extends Validator {
	protected $pattern = "/^[a-zA-Z]{5,}$/";
}