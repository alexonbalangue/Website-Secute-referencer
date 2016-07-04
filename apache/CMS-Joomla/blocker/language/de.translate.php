<?php 

$lang = array();

$lang['error_400_title'] = '400 Fehlerhafte Anfrage!'; 
$lang['error_400_desc'] = 'Ihr Browser (oder Proxy) hat eine ung&uuml;ltige Anfrage gesendet, die vom Server nicht beantwortet werden kann.'; 
$lang['error_401_title'] = '401 Authentisierung fehlgeschlagen!'; 
$lang['error_401_desc'] = 'Der Server konnte nicht verifizieren, ob Sie autorisiert sind, auf den URL zuzugreifen. Entweder wurden falsche Referenzen (z.B. ein falsches Passwort) angegeben oder ihr Browser versteht nicht, wie die geforderten Referenzen zu &uuml;bermitteln sind.'; 
$lang['error_403_title'] = '403 Zugriff verweigert!'; 
$lang['error_403_desc'] = 'Der Zugriff auf das angeforderte Verzeichnis ist nicht m&ouml;glich. Entweder ist kein Index-Dokument vorhanden oder das Verzeichnis ist zugriffsgesch&uuml;tzt.'; 
$lang['error_404_title'] = '404 Objekt nicht gefunden!'; 
$lang['error_404_desc'] = 'Der angeforderte URL konnte auf dem Server nicht gefunden werden.'; 
$lang['error_405_title'] = '405 Methode nicht erlaubt!'; 
$lang['error_405_desc'] = 'Die Methode ist f&uuml;r den angeforderten URL nicht erlaubt.'; 
$lang['error_408_title'] = '408 Zeitlimit &uuml;berschritten!'; 
$lang['error_408_desc'] = 'Der Server konnte nicht mehr l&auml;nger auf die Beendigung der Browseranfrage warten; die Netzwerkverbindung wurde vom Server geschlossen.'; 
$lang['error_410_title'] = '410 Objekt nicht mehr verf&uuml;gbar!'; 
$lang['error_410_desc'] = 'Der angeforderte URL existiert auf dem Server nicht mehr und wurde dauerhaft entfernt. Eine Weiterleitungsadresse ist nicht verf&uuml;gbar.'; 
$lang['error_411_title'] = '411 Content-Length-Angabe fehlerhaft!'; 
$lang['error_411_desc'] = 'Die Anfrage kann nicht beantwortet werden. Bei Verwendung der Methode mu&szlig; ein korrekter <code>Content-Length</code>-Header angegeben werden. '; 
$lang['error_412_title'] = '412 Vorbedingung verfehlt!'; 
$lang['error_412_desc'] = 'Die f&uuml;r den Abruf der angeforderten URL notwendige Vorbedingung wurde nicht erf&uuml;llt.'; 
$lang['error_413_title'] = '413 &Uuml;bergebene Daten zu gro&szlig;!'; 
$lang['error_413_desc'] = 'Die bei der Anfrage &uuml;bermittelten Daten sind f&uuml;r die Methode nicht erlaubt oder die Datenmenge hat das Maximum &uuml;berschritten.'; 
$lang['error_414_title'] = '414 &Uuml;bergebener URI zu gro&szlig;!'; 
$lang['error_414_desc'] = 'Der bei der Anfrage &uuml;bermittelte URI &uuml;berschreitet die maximale L&auml;nge. Die Anfrage kann nicht ausgef&uuml;hrt werden.'; 
$lang['error_415_title'] = '415 Nicht unterst&uuml;tztes Format!'; 
$lang['error_415_desc'] = 'Das bei der Anfrage &uuml;bermittelte Format (Media Type) wird vom Server nicht unterst&uuml;tzt.'; 
$lang['error_500_title'] = '500 Serverfehler!'; 
$lang['error_500_desc'] = 'Die Anfrage kann nicht beantwortet werden, da im Server ein interner Fehler aufgetreten ist.'; 
$lang['error_501_title'] = '501 Anfrage nicht ausf&uuml;hrbar!'; 
$lang['error_501_desc'] = 'Die vom Browser angeforderte Aktion wird vom Server nicht unterst&uuml;tzt.'; 
$lang['error_502_title'] = '502 Fehlerhaftes Gateway!'; 
$lang['error_502_desc'] = 'Der Proxy-Server erhielt eine fehlerhafte Antwort eines &uuml;bergeordneten Servers oder Proxies.'; 
$lang['error_503_title'] = '503 Zugriff nicht m&ouml;glich!'; 
$lang['error_503_desc'] = 'Der Server ist derzeit nicht in der Lage die Anfrage zu bearbeiten. Entweder ist der Server derzeit &uuml;berlastet oder wegen Wartungsarbeiten nicht verf&uuml;gbar. Bitte versuchen Sie es sp&auml;ter wieder. '; 
$lang['error_504_title'] = '504 GATEWAY TIMEOUT'; 
$lang['error_504_desc'] = 'The upstream server failed to send a request in the time allowed by the server.'; 
$lang['error_506_title'] = '506 Variante ebenfalls ver&auml;nderlich!'; 
$lang['error_506_desc'] = 'Ein Zugriff auf das angeforderte Objekt bzw. einer Variante dieses Objektes ist nicht m&ouml;glich, da es ebenfalls ein variables Objekt darstellt.'; 



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

















?>