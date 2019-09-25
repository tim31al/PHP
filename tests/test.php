<?php

use EmailVerifier\Checker\BasicChecker;
use EmailVerifier\EmailVerifier;
use EmailVerifier\Exceptions\EmailIsNotExists;
use EmailVerifier\Exceptions\EmailIsNotValid;
use EmailVerifier\Validator\BasicValidator;

require_once __DIR__ . '/../vendor/autoload.php';

$emailsToCheck = ['admin@gmailwhichisnotexists.com', 'invalidemail.com', 'admin@gmail.com'];
foreach ($emailsToCheck as $email) {
    try {
        $emailVerifier = new EmailVerifier(
            new BasicValidator(),
            new BasicChecker()
        );

        if($emailVerifier->isCorrect($email)) {
            echo "Email {$email} is valid";
        }
    } catch (EmailIsNotExists $exception) {
        echo "Email {$email} is not exists";
    } catch (EmailIsNotValid $exception) {
        echo "Email {$email} is not valid";
    }
    echo PHP_EOL;
}