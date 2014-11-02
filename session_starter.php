<?php
include ('/lib/session_mysql.php'); #saves sessions in db!
session_cache_limiter ('private_no_expire, must-revalidate');
//ini_set('session.cookie_lifetime','315360000'); # TEN YEARS!
//ini_set('session.cookie_lifetime','30'); # TEN YEARS!
// with session.cookie_lifetime set to default the session times out when the browser quits

ini_set('session.use_trans_sid','off'); #so it doesn't try parsing through every link!

require_once("/lib/pn_library.php");

if (!$GLOBALS['pageinitiated']) session_start();
if (isset($_REQUEST['_SESSION'])) die("Please don't mess with the sesh.");
?>