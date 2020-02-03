<?php
require_once('vendor/autoload.php');

Dotenv\Dotenv::createImmutable(__DIR__)->load();

$apiKey = getenv('MAILGUN_API_KEY');
$hostname = getenv('MAILGUN_HOSTNAME');
$domain = "https://api.mailgun.net/v3/$hostname";
$from = getenv('MAILGUN_FROM');
$recipient = 'al'
$mgClient = Mailgun\Mailgun::create($apiKey, $domain);

$result = $mgClient->messages()->send($hostname, [
	'from'  	=> $from,
	'to'		=> 'douwe@trafficsupply.nl',
	'subject' 	=> 'Testing new API',
	'text'		=> 'This is a test to see if the new API is quicker than the previous SMTP methods...'
]);

var_dump($result);


?>