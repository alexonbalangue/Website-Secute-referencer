<?php 

$lang = array();

$lang['error_400_title'] = '400 &iexcl;Petici&oacute;n err&oacute;nea!'; 
$lang['error_400_desc'] = 'Su navegador (o proxy) ha enviado una petici&oacute;n que el servidor no ha podido entender.'; 
$lang['error_401_title'] = '401 &iexcl;Autentificaci&oacute;n requerida!'; 
$lang['error_401_desc'] = 'El servidor no puede certificar que usted est&eacute; autorizado para acceder a la URL. Ha podido suministrar informaci&oacute;n incorrecta (ej. contrase&ntilde;a no v&aacute;lida) o el navegador no sabe c&oacute;mo suministrar la informaci&oacute;n requerida.'; 
$lang['error_403_title'] = '403 &iexcl;Acceso prohibido!'; 
$lang['error_403_desc'] = 'Usted no tiene permiso para acceder al directorio solicitado. No existe un documento &iacute;ndice, o el directorio est&aacute; protegido contra lectura.'; 
$lang['error_404_title'] = '404 &iexcl;Objeto no localizado!'; 
$lang['error_404_desc'] = 'No se ha localizado la URL solicitada en este servidor.'; 
$lang['error_405_title'] = '405 &iexcl;M&eacute;todo no permitido!'; 
$lang['error_405_desc'] = 'No se permite el m&eacute;todo para la URL solicitada.'; 
$lang['error_408_title'] = '408 &iexcl;Tiempo de espera excedido!'; 
$lang['error_408_desc'] = 'El servidor ha cerrado la conexi&oacute;n de red debido a que el navegador no ha finalizado la solicitud dentro del tiempo permitido.'; 
$lang['error_410_title'] = '410 &iexcl;El recurso ya no est&aacute; disponible!'; 
$lang['error_410_desc'] = 'La URL solicitada ya no est&aacute; disponible en este servidor y no existe una direcci&oacute;n a la cual remitirle.'; 
$lang['error_411_title'] = '411 &iexcl;Error en la longitud del contenido!'; 
$lang['error_411_desc'] = 'Una petici&oacute;n con el m&eacute;todo requiere que el encabezado <code>Content-Length</code> sea v&aacute;lido.'; 
$lang['error_412_title'] = '412 &iexcl;Fallo en la pre-condici&oacute;on!'; 
$lang['error_412_desc'] = 'No se ha evaluado positivamente la pre-condici&oacute;n de la petici&oacute;n para la URL.'; 
$lang['error_413_title'] = '413 &iexcl;La entidad solicitada es demasiado grande!'; 
$lang['error_413_desc'] = 'El m&eacute;todono permite transmitir la informaci&oacute;n, o el volumen de la informaci&oacute;n excede los l&iacute;mites de capacidad del mismo.'; 
$lang['error_414_title'] = '414 &iexcl;El URI enviado es demasiado largo!'; 
$lang['error_414_desc'] = 'La longitud de la URL solicitada excede el l&iacute;mite de capacidad para este servidor. No se puede procesar la solicitud.'; 
$lang['error_415_title'] = '415 &iexcl;El tipo de medio no est&aacute; soportado!'; 
$lang['error_415_desc'] = 'El servidor no soporta el tipo de medio transmitido en la solicitud.'; 
$lang['error_500_title'] = '500 &iexcl;Error del servidor!'; 
$lang['error_500_desc'] = 'Se ha producido un error interno en el servidor y no se ha podido completar su solicitud.'; 
$lang['error_501_title'] = '501 &iexcl;No se puede procesar la petici&oacute;n!'; 
$lang['error_501_desc'] = 'El servidor no soporta la acci&oacute;n solicitada por el navegador.'; 
$lang['error_502_title'] = '502 &iexcl;Puerta de enlace err&oacute;nea!'; 
$lang['error_502_desc'] = 'El servidor proxy ha recibido; informaci&oacute;n no v&aacute;lida del servidor de origen.'; 
$lang['error_503_title'] = '503 &iexcl;Servicio no disponible!'; 
$lang['error_503_desc'] = 'El servidor no puede procesar su solicitud en este momento debido a tareas de mantenimiento o a problemas de capacidad. Por favor, int&eacute;ntelo de nuevo m&aacute;s tarde.'; 
$lang['error_504_title'] = '504 GATEWAY TIMEOUT'; 
$lang['error_504_desc'] = 'The upstream server failed to send a request in the time allowed by the server.'; 
$lang['error_506_title'] = '506 La variante tambi&eacute;n varia!'; 
$lang['error_506_desc'] = 'Una variante de la entidad solicitada es por si misma un recurso negociable. No es posible tener acceso a la entidad.'; 



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