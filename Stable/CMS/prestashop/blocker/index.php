<?php
//config - Show debug display error output PHP Code
error_reporting(E_ALL);
ini_set("display_errors", 1);

include_once 'config/languages.php';
include_once 'config/template.php';


//pages views
if(isset($_GET['full'])){
	if($_GET['full'] == 'pages'){
		if(isset($_GET['error'])){
			if($_GET['error'] == '400'){
				$title = $lang['error_400_title'];
				$desc = $lang['error_400_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '401'){
				$title = $lang['error_401_title'];
				$desc = $lang['error_401_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '403'){
				$title = $lang['error_403_title'];
				$desc = $lang['error_403_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '404'){
				$title = $lang['error_404_title'];
				$desc = $lang['error_404_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '405'){
				$title = $lang['error_405_title'];
				$desc = $lang['error_405_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '408'){
				$title = $lang['error_408_title'];
				$desc = $lang['error_408_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '410'){
				$title = $lang['error_410_title'];
				$desc = $lang['error_410_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '411'){
				$title = $lang['error_411_title'];
				$desc = $lang['error_411_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '412'){
				$title = $lang['error_412_title'];
				$desc = $lang['error_412_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '413'){
				$title = $lang['error_413_title'];
				$desc = $lang['error_413_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '414'){
				$title = $lang['error_414_title'];
				$desc = $lang['error_414_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '415'){
				$title = $lang['error_415_title'];
				$desc = $lang['error_415_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '500'){
				$title = $lang['error_500_title'];
				$desc = $lang['error_500_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '502'){
				$title = $lang['error_502_title'];
				$desc = $lang['error_502_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '504'){
				$title = $lang['error_504_title'];
				$desc = $lang['error_504_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else if($_GET['error'] == '506'){
				$title = $lang['error_506_title'];
				$desc = $lang['error_506_desc'];
				include 'pages/header.php';
				include 'pages/error.php';
				include 'pages/footer.php';
			} else {
				header("Location: http://$my_domainname");
			}
		} else {
			header("Location: http://$my_domainname");
		}
	} else if($_GET['full'] == 'hosting'){
		if(isset($_GET['hacker'])){
			if($_GET['hacker'] == 'block-files'){
				$title = $lang['hacker_blockfile_title'];
				$desc = $lang['hacker_blockfile_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'easter-eggs'){
				$title = $lang['hacker_eastereggs_title'];
				$desc = $lang['hacker_eastereggs_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'detected-base64-encode'){
				$title = $lang['hacker_detectedbase64encode_title'];
				$desc = $lang['hacker_detectedbase64encode_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'local-files'){
				$title = $lang['hacker_localfiles_title'];
				$desc = $lang['hacker_localfiles_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'spam'){
				$title = $lang['hacker_spam_title'];
				$desc = $lang['hacker_spam_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'noaccess-folder-url'){
				$title = $lang['hacker_noaccessfolderurl_title'];
				$desc = $lang['hacker_noaccessfolderurl_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'create-ghosts-users'){
				$title = $lang['hacker_createghostsusers_title'];
				$desc = $lang['hacker_createghostsusers_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'filter-shell'){
				$title = $lang['hacker_filtershell_title'];
				$desc = $lang['hacker_filtershell_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'query-string'){
				$title = $lang['hacker_querystring_title'];
				$desc = $lang['hacker_querystring_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'sql-injection'){
				$title = $lang['hacker_sqlinjection_title'];
				$desc = $lang['hacker_sqlinjection_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'global-request'){
				$title = $lang['hacker_globalrequest_title'];
				$desc = $lang['hacker_globalrequest_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'request-http'){
				$title = $lang['hacker_requesthttp_title'];
				$desc = $lang['hacker_requesthttp_desc'];
				include 'pages/header.php';
				include 'pages/hacker.php';
				include 'pages/footer.php';
			} else if($_GET['hacker'] == 'hotlinking'){
				include 'pages/images.php';
			} else {
				header("Location: http://$my_domainname");
			}
		} else {
			header("Location: http://$my_domainname");
		}
	} else {
			header("Location: http://$my_domainname");
		}
}else{
	header("Location: http://$my_domainname");

} 
?>