<?php
require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$CONSUMER_KEY = 'WTVQeHq1s08SaSZPTU14by2o9';
$CONSUMER_SECRET = '6JppBIstzTrsmrokCB6nXYayuKP0IQ6p1Z8By8HAWw6gYpQbur';
$access_token = '';
$access_token_secret = '';

$connection = new TwitterOAuth(
	$CONSUMER_KEY,
	$CONSUMER_SECRET,
	$access_token,
	$access_token_secret
);
$content = $connection->get("account/verify_credentials");


$statuses = $connection->get("followers/list.json?cursor=-1&amp;screen_name=twitterdev&amp;skip_status=true&amp;include_user_entities=false");


echo "<hr>"
var_dump($statuses);
