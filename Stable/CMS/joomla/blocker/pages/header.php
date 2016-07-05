
<!doctype html>
<html<?php if($amp == 'yes'){ echo ' amp'; } ?> lang="<?php echo $lang_file; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="robots" content="nofollow, noindex, noarchive, nosnippet">
        <meta name="description" content="<?php echo $desc; ?>">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/<?php echo __FONTAWESOMEVERSION__; ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/<?php echo __BOOSTRAPVERSION__; ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME']; ?>/assets/bs3.3.6.min.css">
		<?php if($amp == 'yes'){ ?>
			<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
			<script async src="https://cdn.ampproject.org/v0.js"></script>
			<link rel="amphtml" href="https://<?php echo $_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; ?>">
		<?php } else { ?>
			<link rel="canonical" href="//<?php echo $_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; ?>">
		<?php } ?>

    </head>
    <body>