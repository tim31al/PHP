<?php

namespace Otus;

class App
{
	public string $message = '';
	public function run ($emails): void
	{
		if (!is_array($emails) || empty($emails)){
			throw new \Exception('Emails array is empty!');
		}

		foreach ($emails as $email){
			$this->verifyEmail($email);
			echo $this->message;
		}
	}

	public function verifyEmail($email): bool
	{
		if (!is_string($email) || $email == '') {
			$this->message = 'Invalid param - ' . $email . '<br>';
			return false;
		}

		if (!preg_match('/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/', $email)) {
			$this->message = 'String "' . $email . '" - is not email!<br>';
			return false;
		}

		$domain = substr(strrchr($email, "@"), 1);
		$res = getmxrr($domain, $mx_records);
		if (!$res || count($mx_records) == 0){
			$this->message = 'No MX for domain - "' . $domain . '"<br>';
			return false;
		}

		$this->message = 'Email "' . $email . '" - is valid!<br>';
		return true;
	}
}
