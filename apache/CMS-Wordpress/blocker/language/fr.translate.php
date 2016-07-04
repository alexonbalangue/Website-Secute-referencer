<?php 

$lang = array();

$lang['error_400_title'] = '400 Demande incorrecte!'; 
$lang['error_400_desc'] = 'Votre navigateur (ou votre proxy) a envoy&eacute; une demande que ce serveur n\'a pas comprise.'; 
$lang['error_401_title'] = '401 Autorisation requise!'; 
$lang['error_401_desc'] = 'Ce server n\'a pas &eacute;t&eacute; en mesure de v&eacute;rifier que vous &ecirc;tes autoris&eacute; &agrave; acc&eacute;der &agrave; cette URL. Vous avez ou bien fourni des coordonn&eacute;es erron&eacute;es (p.ex. mot de passe inexact) ou bien votre navigateur ne parvient pas &agrave; fournir les donn&eacute;es exactes.'; 
$lang['error_403_title'] = '403 Acc&egrave;s interdit!'; 
$lang['error_403_desc'] = 'Vous n\'avez pas le droit d\'acc&eacute;der au r&eacute;pertoire demand&eacute;. Soit il n\'y a pas de document index soit le r&eacute;pertoire est prot&eacute;g&eacute;.'; 
$lang['error_404_title'] = '404 Objet non trouv&eacute;!'; 
$lang['error_404_desc'] = 'L\'URL demand&eacute;e n\'a pas pu &ecirc;tre trouv&eacute;e sur ce serveur.'; 
$lang['error_405_title'] = '405 M&eacute;thode interdite!'; 
$lang['error_405_desc'] = 'La m&eacute;thode n\'est pas utilisable pour l\'URL demand&eacute;e.'; 
$lang['error_408_title'] = '408 Requ&ecirc;te trop longue !'; 
$lang['error_408_desc'] = 'Le serveur a ferm&eacute; la connection car le navigateur n\'a pas fini la requ&ecirc;te dans le temps sp&eacute;cifi&eacute;'; 
$lang['error_410_title'] = '410 Cette ressource n\existe plus!'; 
$lang['error_410_desc'] = 'L\'URL demand&eacute;e n\'est plus accessible sur ce serveur et il n\'y a pas d\'adresse de redirection.'; 
$lang['error_411_title'] = '411 Longueur du contenu ill&eacute;gal!'; 
$lang['error_411_desc'] = 'Une requ&ecirc;te utilisant la m&eacute;thode n&eacute;cessite un en-t&ecirc;te <code>Content-Length</code> (indiquant la longueur) valable.'; 
$lang['error_412_title'] = '412 Pr&eacute;condition n&eacute;gative!'; 
$lang['error_412_desc'] = 'La pr&eacute;condition pour l\'URL demand&eacute; a &eacute;t&eacute; &eacute;valu&eacute;e n&eacute;gativement.'; 
$lang['error_413_title'] = '413 Volume de la demande trop grand!'; 
$lang['error_413_desc'] = 'La m&eacute;thode n\'autorise pas le transfert de ces donn&eacute;es ou bien le volume des donn&eacute;es exc&egrave;de la limite de capacit&eacute;.'; 
$lang['error_414_title'] = '414 L\'URI demandee est trop longue!'; 
$lang['error_414_desc'] = 'La longueur de l\'URL demand&eacute;e exc&egrave;de la limite de capacit&egrave; pour ce serveur. Nous ne pouvons donner suite &agrave; votre requ&ecirc;te.'; 
$lang['error_415_title'] = '415 Type de m&eacute;dia invalide!'; 
$lang['error_415_desc'] = 'Le serveur ne supporte pas le type de m&eacute;dia utilis&eacute; dans votre requ&ecirc;te.'; 
$lang['error_500_title'] = '500 Erreur du serveur!'; 
$lang['error_500_desc'] = 'Le serveur a &eacute;t&eacute; victime d\'une erreur interne et n\'a pas &eacute;t&eacute; capable de faire aboutir votre requ&ecirc;te.'; 
$lang['error_501_title'] = '501 La requ&ecirc;te ne peut &ecirc;tre effectu&eacute;e!'; 
$lang['error_501_desc'] = 'Le serveur n\'est pas en mesure d\'effectuer l\'action demand&eacute;e par le navigateur.'; 
$lang['error_502_title'] = '502 Gateway incorrecte!'; 
$lang['error_502_desc'] = 'Le serveur proxy a re&ccedil;u une r&eacute;ponse incorrecte de la part d\'un serveur sup&eacute;rieur.'; 
$lang['error_503_title'] = '503 Service inaccessible!'; 
$lang['error_503_desc'] = 'En raison de travaux de maintenance ou de probl&egrave;mes de capacit&eacute; le serveur n\'est pas en mesure de r&eacute;pondre &agrave; votre requ&ecirc;te pour l\'instant. Veuillez r&eacute;essayer plus tard.'; 
$lang['error_504_title'] = '504 GATEWAY TIMEOUT'; 
$lang['error_504_desc'] = 'The upstream server failed to send a request in the time allowed by the server.'; 
$lang['error_506_title'] = '506 La variante varie elle-m&ecirc;me!'; 
$lang['error_506_desc'] = 'Une variante pour l\'entit&eacute; demand&eacute;e est elle-m&ecirc;me une ressource n&eacute;gociable. L\'acc&egrave;s est impossible.'; 



$lang['hacker_blockfile_title'] = 'Accès un fichier non autoris&eacute;'; 
$lang['hacker_blockfile_desc'] = 'Tentative d\'accès à un fichier dont l\'accès est strictement interdit depuis une URL'; 
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