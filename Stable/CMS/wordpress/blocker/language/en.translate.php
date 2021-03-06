<?php 

$lang = array();

$lang['error_400_title'] = '400 Bad request!'; 
$lang['error_400_desc'] = 'Your browser (or proxy) sent a request that this server could not understand.'; 
$lang['error_401_title'] = '401 Authentication required!'; 
$lang['error_401_desc'] = 'This server could not verify that you are authorized to access
    the URL. You either supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required.'; 
$lang['error_403_title'] = '403 Access forbidden!'; 
$lang['error_403_desc'] = 'You don\'t have permission to access the requested directory. There is either no index document or the directory is read-protected.'; 
$lang['error_404_title'] = '404 Object not found!'; 
$lang['error_404_desc'] = 'The requested URL was not found on this server.'; 
$lang['error_405_title'] = '405 Method not allowed!'; 
$lang['error_405_desc'] = 'The method is not allowed for the requested URL.'; 
$lang['error_408_title'] = '408 Request time-out!'; 
$lang['error_408_desc'] = 'The server closed the network connection because the browser didn\'t finish the request within the specified time.'; 
$lang['error_410_title'] = '410 Resource is no longer available!'; 
$lang['error_410_desc'] = 'The requested URL is no longer available on this server and there is no forwarding address.'; 
$lang['error_411_title'] = '411 Bad Content-Length!'; 
$lang['error_411_desc'] = 'A request with the method requires a valid <code>Content-Length</code> header.'; 
$lang['error_412_title'] = '412 Precondition failed!'; 
$lang['error_412_desc'] = 'The precondition on the request for the URL failed positive evaluation.'; 
$lang['error_413_title'] = '413 Request entity too large!'; 
$lang['error_413_desc'] = 'The method does not allow the data transmitted, or the data volume exceeds the capacity limit.'; 
$lang['error_414_title'] = '414 Submitted URI too large!'; 
$lang['error_414_desc'] = 'The length of the requested URL exceeds the capacity limit for this server. The request cannot be processed.'; 
$lang['error_415_title'] = '415 UNSUPPORTED MEDIA TYPE'; 
$lang['error_415_desc'] = 'Le serveur ne supporte pas le type de m&eacute;dia  utilis&eacute; dans votre requ&ecirc;te. '; 
$lang['error_500_title'] = '500 Server error!'; 
$lang['error_500_desc'] = 'The server encountered an internal error and was unable to complete your request.'; 
$lang['error_501_title'] = '501 Cannot process request!'; 
$lang['error_501_desc'] = 'The server does not support the action requested by the browser.'; 
$lang['error_502_title'] = '502 Bad Gateway!'; 
$lang['error_502_desc'] = 'The proxy server received an invalid response from an upstream server.'; 
$lang['error_503_title'] = '503 Service unavailable!'; 
$lang['error_503_desc'] = 'The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later.'; 
$lang['error_504_title'] = '504 GATEWAY TIMEOUT'; 
$lang['error_504_desc'] = 'The upstream server failed to send a request in the time allowed by the server.'; 
$lang['error_506_title'] = '506 Variant also varies!'; 
$lang['error_506_desc'] = 'A variant for the requested entity is itself a negotiable resource. Access not possible.'; 


$lang['hacker_blockfile_title'] = 'Accès un fichier non autoris&eacute;'; 
$lang['hacker_blockfile_desc'] = 'Tentative d\'accès à un fichier dont l\'accès est strictement interdit depuis une URL'; 
$lang['hacker_eastereggs_title'] = 'eastereggs'; 
$lang['hacker_eastereggs_desc'] = 'eastereggs'; 
$lang['hacker_detectedbase64encode_title'] = 'base64 encoded'; 
$lang['hacker_detectedbase64encode_desc'] = 'base64_encode détecté dans l\'URL'; 
$lang['hacker_localfiles_title'] = 'liste noire'; 
$lang['hacker_localfiles_desc'] = 'L\'URL contient des mots se trouvant dans la liste noire'; 
$lang['hacker_spam_title'] = 'spammer'; 
$lang['hacker_spam_desc'] = 'Êtes-vous un spammeur?'; 
$lang['hacker_noaccessfolderurl_title'] = 'accès aux dossiers non autoris&eacute;'; 
$lang['hacker_noaccessfolderurl_desc'] = 'Tentative d\'accès à un fichier/dossier dont l\'accès depuis une URL n\'est pas autorisé'; 
$lang['hacker_createghostsusers_title'] = 'aucun cr&eacute;ation utilisateur'; 
$lang['hacker_createghostsusers_desc'] = 'Aucune création d\'utilisateur ne peut se faire sur ce site web'; 
$lang['hacker_filtershell_title'] = 'Filtre SSH non autoris&eacute;'; 
$lang['hacker_filtershell_desc'] = 'Attaque de type shell détectée'; 
$lang['hacker_querystring_title'] = 'Query String'; 
$lang['hacker_querystring_desc'] = 'Appel à des fonctions comme ID de la session PHP et contient des caract&egrave;res non autoris&eacute; depuis l\'URL'; 
$lang['hacker_sqlinjection_title'] = 'Blocker injection SQL'; 
$lang['hacker_sqlinjection_desc'] = 'Tentative d\'injections SQL';
$lang['hacker_globalrequest_title'] = 'modifier les variables grobales ou la requête non autoris&eacute;'; 
$lang['hacker_globalrequest_desc'] = 'Tentative de modifier les variables globales ou de la requête web passée au serveur'; 
$lang['hacker_requesthttp_title'] = 'les requêtes HTTP'; 
$lang['hacker_requesthttp_desc'] = 'Ce type de requêtes est interdit'; 
$lang['hacker_hotlinking_title'] = 'hotlinking'; 
$lang['hacker_hotlinking_desc'] = '&copy; '.date('Y'); 
?>