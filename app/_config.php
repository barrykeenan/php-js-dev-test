<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\Core\Environment;
use SilverStripe\Dev\Debug;

// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

# Production config
$heroku_db = getenv('CLEARDB_DATABASE_URL');
if($heroku_db) {
	$parts = parse_url($heroku_db);
	Environment::setEnv('SS_DATABASE_SERVER', $parts['host']);
	Environment::setEnv('SS_DATABASE_NAME', trim($parts['path'], '/'));
	Environment::setEnv('SS_DATABASE_USERNAME', $parts['user']);
	Environment::setEnv('SS_DATABASE_PASSWORD', $parts['pass']);

	Environment::setEnv('SS_BASE_URL', 'http://hidden-ridge-43678.herokuapp.com');
}
