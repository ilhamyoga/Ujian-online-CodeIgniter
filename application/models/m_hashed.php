<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hashed extends CI_Model {

	public function hash_string($string)
	{
		$hashed_string = password_hash($string, PASSWORD_BCRYPT, ['cost'=>9]);
		return $hashed_string;
	}

	public function hash_verify($plain_text, $hashed_string)
	{
		$hashed_string = password_verify($plain_text, $hashed_string);
		return $hashed_string;
	}

}
