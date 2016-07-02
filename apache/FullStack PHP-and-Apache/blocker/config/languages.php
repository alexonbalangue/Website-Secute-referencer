<?php

#Support only Option on PHP7, if using less PHP7 =< take out the option
session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true
]);
#supportPHP5.6
#session_start();
#header('Cache-control: private'); // IE 6 FIX

if(isset($_GET['lang'])){
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30));//Keep Cookie 30days is in browser
} else if(isSet($_SESSION['lang'])){
	$lang = $_SESSION['lang'];
} else if(isSet($_COOKIE['lang'])){
	$lang = $_COOKIE['lang'];
} else {
	$lang = 'en';
}
/** Other method
$languages = array('en','fr','de','es','it');

if(in_array($_GET['lang'], $languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}

define('__LANGS__', in_array($_SESSION['lang'], $languages) ? $_SESSION['lang'] : 'en');
foreach($languages as $language) { echo '<a href="?lang='.$language.'">'.$language.'</a>'; }
**/
switch ($lang) {
	case 'en': $lang_file = 'en'; break;
	case 'fr': $lang_file = 'fr'; break;
	case 'de': $lang_file = 'de'; break;
	case 'es': $lang_file = 'es'; break;
	case 'it': $lang_file = 'it'; break;
	default: $lang_file = 'en'; break;
}
include_once 'language/'.$lang_file.'.translate.php';

?>