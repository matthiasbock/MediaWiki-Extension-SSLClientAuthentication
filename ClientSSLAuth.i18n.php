<?php

/**
 * MediaWiki extension to allow client SSL authentication.
 * Copyright (C) 2012 Tyler Romeo <tylerromeo@gmail.com>

 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$messages = array();

$messages['en'] = array(
	'sslauth-desc' => 'Allows users to upload SSL certificates to be used for authentication',
	'sslauth-title-enable' => 'Enable SSL Client Authentication',
	'sslauth-title-disable' => 'Disable SSL Client Authentication',
	'sslauth-enable' => 'Enable',
	'sslauth-disable' => 'Disable',
	'sslauth-cn' => 'Common name',
	'sslauth-email' => 'E-mail address',
	'sslauth-serial' => 'Serial number',
	'sslauth-response-enable' => 'SSL Authentication has been successfully enabled. Now whenever you connect to {{SITENAME}} over HTTPS with your client certificate, you will be automatically logged in.',
	'sslauth-response-disable' => 'SSL Authentication has been successfully disabled.',
	'sslauth-invalidrequest-title' => 'Invalid request',
	'sslauth-invalidrequest' => 'A valid SSL client certificate must be provided for this page to be useful.',
	'clientssl-legend' => 'SSL Authentication',
	'clientssl-text' => 'Use this page to enable/disable authentication with client SSL certificates.',
	'sslauth-prefs-name' => 'SSL Authentication',
	'sslauth-prefs-linktospecial' => 'Enable/Disable client certificates',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'sslauth-desc' => '{{desc|name=SSL Client Authentication|url=http://www.mediawiki.org/wiki/Extension:SSL_authentication}}',
	'sslauth-title-enable' => 'Title of Special:ClientSSL when ssl-auth is disabled and the user is enabling it.',
	'sslauth-title-disable' => 'Title of Special:ClientSSL when ssl-auth is enabled and the user is disabling it.',
	'sslauth-enable' => 'Label for the submit button when enabling. {{Identical|Enable}}',
	'sslauth-disable' => 'Label for the submit button when disabling. {{Identical|Disable}}',
	'sslauth-cn' => 'Label for the CN (Common Name) field of the SSL certificate.',
	'sslauth-email' => 'Label for the e-mail field of the SSL certificate.',
	'sslauth-serial' => 'Label for the serial number field of the SSL certificate.',
	'sslauth-response-enable' => 'Success message when SSL auth has been enabled.',
	'sslauth-response-disable' => 'Success message when SSL auth has been disabled.',
	'sslauth-invalidrequest-title' => 'Title of Special:ClientSSL when no SSL certificate has been given.',
	'sslauth-invalidrequest' => 'Message displayed on Special:ClientSSL when no SSL certificate has been given.',
	'clientssl-legend' => 'Title of the fieldset for the form on Special:ClientSSL.',
	'clientssl-text' => 'Prompt displayed on the client SSL form.',
	'sslauth-prefs-name' => 'Label for the preferences link to Special:ClientSSL (not the actual text for the link).',
	'sslauth-prefs-linktospecial' => 'Text for the preferences link to Special:ClientSSL.',
);

/** German (Deutsch)
 * @author Metalhead64
 */
$messages['de'] = array(
	'sslauth-desc' => 'Ermöglicht es Benutzern, SSL-Zertifikate zur Authentifizierung hochzuladen',
	'sslauth-title-enable' => 'SSL-Client-Authentifizierung aktivieren',
	'sslauth-title-disable' => 'SSL-Client-Authentifizierung deaktivieren',
	'sslauth-enable' => 'Aktivieren',
	'sslauth-disable' => 'Deaktivieren',
	'sslauth-cn' => 'Name',
	'sslauth-email' => 'E-Mail-Adresse',
	'sslauth-serial' => 'Seriennummer',
	'sslauth-response-enable' => 'Die SSL-Authentifizierung wurde erfolgreich aktiviert. Wenn sie diese Seite zuk&uuml;nftig in ihrem Browser &ouml;ffnen, werden sie automatisch angemeldet.',
	'sslauth-response-disable' => 'Die SSL-Authentifizierung wurde erfolgreich deaktiviert.',
	'sslauth-invalidrequest-title' => 'ClientSSL: Fehler',
	'sslauth-invalidrequest' => 'Kein SSL-Zertifikat bekommen. Entweder verf&uuml;gt ihr Browser nicht &uuml;ber ein Client-Zertifikat oder diese Seite ist nicht &uuml;ber https:// aufgerufen worden oder der Webserver ist nicht f&uuml;r Client-Zertifikate konfiguriert.',
	'clientssl-legend' => 'SSL-Authentifizierung',
	'clientssl-text' => 'Auf dieser Seite haben sie die M&ouml;glichkeit, eines ihrer lokalen Browser-Zertifikate auf den Server hochladen. Mit diesem Zertifikat werden sie zuk&uuml;nftig automatisch angemeldet.',
	'sslauth-prefs-name' => 'SSL-Authentifizierung',
	'sslauth-prefs-linktospecial' => 'Clientzertifikate aktivieren/deaktivieren',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'sslauth-desc' => 'Permite a los usuarios subir certificados SSL para usarlos en la autenticación',
	'sslauth-title-enable' => 'Activar la autenticación de cliente mediante SSL',
	'sslauth-title-disable' => 'Desactivar la autenticación de cliente mediante SSL',
	'sslauth-enable' => 'Activar',
	'sslauth-disable' => 'Desactivar',
	'sslauth-cn' => 'Nombre común',
	'sslauth-email' => 'Dirección de correo electrónico',
	'sslauth-serial' => 'Número de serie',
	'sslauth-response-enable' => 'La autenticación mediante SSL se ha activado correctamente. Ahora cuando se conecte a {{SITENAME}} mediante HTTPS con su certificado de cliente accederás al sistema automáticamente.',
	'sslauth-response-disable' => 'La autenticación mediante SSL se ha desactivado correctamente.',
	'sslauth-invalidrequest-title' => 'Solicitud inválida',
	'sslauth-invalidrequest' => 'Debe proporcionar un certificado válido de cliente SSL para que esta página sea útil.',
	'clientssl-legend' => 'Autenticación mediante SSL',
	'clientssl-text' => 'Utiliza esta página para activar o desactivar la autenticación mediante certificados de cliente SSL.',
	'sslauth-prefs-name' => 'Autenticación SSL',
	'sslauth-prefs-linktospecial' => 'Activar/desactivar certificados de cliente',
);

/** Finnish (suomi)
 * @author Nedergard
 */
$messages['fi'] = array(
	'sslauth-email' => 'Sähköpostiosoite',
);

/** French (français)
 * @author Crochet.david
 * @author Gomoko
 */
$messages['fr'] = array(
	'sslauth-desc' => "Permet aux utilisateurs de télécharger des certificats SSL à utiliser pour l'authentification",
	'sslauth-title-enable' => "Activer l'authentification client SSL",
	'sslauth-title-disable' => "Désactiver l'authentification client SSL",
	'sslauth-enable' => 'Activer',
	'sslauth-disable' => 'Désactiver',
	'sslauth-cn' => 'Nom usuel',
	'sslauth-email' => 'Adresse de courriel',
	'sslauth-serial' => 'Numéro de série',
	'sslauth-response-enable' => "L'authentification SSL a bien été activée. Désormais, quand vous vous connectez à {{SITENAME}} via HTTPS avec votre certificat client, vous serez automatiquement connecté.",
	'sslauth-response-disable' => "L'authentification SSL a bien été désactivée.",
	'sslauth-invalidrequest-title' => 'Requête non valide',
	'sslauth-invalidrequest' => "Un certificat client SSL valide doit être fourni pour cette page afin d'être utile.",
	'clientssl-legend' => 'Authentification SSL',
	'clientssl-text' => "Utiliser cette page en activant/désactivant l'authentification avec les certificats client SSL.",
	'sslauth-prefs-name' => 'Authentification SSL',
	'sslauth-prefs-linktospecial' => 'Activer/Désactiver les certificats client',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'sslauth-desc' => 'Permite aos usuarios cargar certificados SSL para usalos na autenticación',
	'sslauth-title-enable' => 'Activar a autenticación de cliente mediante SSL',
	'sslauth-title-disable' => 'Desactivar a autenticación de cliente mediante SSL',
	'sslauth-enable' => 'Activar',
	'sslauth-disable' => 'Desactivar',
	'sslauth-cn' => 'Nome común',
	'sslauth-email' => 'Enderezo de correo electrónico',
	'sslauth-serial' => 'Número de serie',
	'sslauth-response-enable' => 'A autenticación SSL activouse correctamente. Agora cando se conecte a {{SITENAME}} con HTTPS co seu certificado de cliente accederás ao sistema automaticamente.',
	'sslauth-response-disable' => 'A autenticación SSL desactivouse correctamente.',
	'sslauth-invalidrequest-title' => 'Solicitude inválida',
	'sslauth-invalidrequest' => 'Cómpre proporcionar un certificado de cliente SSL para que esta páxina sexa útil.',
	'clientssl-legend' => 'Autenticación SSL',
	'clientssl-text' => 'Utilice esta páxina para activar ou desactivar a autenticación cos certificados de cliente SSL.',
	'sslauth-prefs-name' => 'Autenticación SSL',
	'sslauth-prefs-linktospecial' => 'Activar ou desactivar os certificados de cliente',
);

/** Hebrew (עברית)
 * @author חיים
 */
$messages['he'] = array(
	'sslauth-enable' => 'פעיל',
	'sslauth-disable' => 'כבוי',
	'sslauth-email' => 'כתובת דוא"ל',
	'sslauth-serial' => 'מספר סידורי',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sslauth-title-enable' => 'Klientowu SSL-awtentifikaciju zmóžnić',
	'sslauth-title-disable' => 'Klientowu SSL-awtentifikaciju znjemóžnić',
	'sslauth-enable' => 'Zmóžnić',
	'sslauth-disable' => 'Znjemóžnić',
	'sslauth-cn' => 'Powšitkowne mjeno',
	'sslauth-email' => 'E-mejlowa adresa',
	'sslauth-serial' => 'Serijowe čisło',
	'sslauth-response-disable' => 'SSL-awtentifikacija je so wuspěšnje znjemóžniła.',
	'sslauth-invalidrequest-title' => 'Njepłaćiwe naprašowanje',
	'clientssl-legend' => 'SSL-awtentifikacija',
	'sslauth-prefs-name' => 'SSL-awtentifikacija',
	'sslauth-prefs-linktospecial' => 'Klientowe certifikaty zmóžnić/znjemóžnić',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'sslauth-desc' => "Consente agli utenti di caricare i certificati SSL da utilizzare per l'autenticazione",
	'sslauth-title-enable' => 'Abilita autenticazione client SSL',
	'sslauth-title-disable' => 'Disabilita autenticazione client SSL',
	'sslauth-enable' => 'Abilita',
	'sslauth-disable' => 'Disabilita',
	'sslauth-cn' => 'Nome comune',
	'sslauth-email' => 'Indirizzo e-mail',
	'sslauth-serial' => 'Numero di serie',
	'sslauth-response-enable' => "L'autenticazione SSL è stata attivata con successo. Ora ogni volta che ti connetti a {{SITENAME}} su HTTPS con il tuo certificato client, verrà effettuato automaticamente l'accesso.",
	'sslauth-response-disable' => "L'autenticazione SSL è stata disabilitata con successo.",
	'sslauth-invalidrequest-title' => 'Richiesta non valida',
	'sslauth-invalidrequest' => 'Deve essere fornito un certificato client SSL valido per rendere utilizzabile questa pagina.',
	'clientssl-legend' => 'Autenticazione SSL',
	'clientssl-text' => "Utilizza questa pagina per attivare o disattivare l'autenticazione con certificati SSL client.",
	'sslauth-prefs-name' => 'Autenticazione SSL',
	'sslauth-prefs-linktospecial' => 'Attiva/disattiva certificati client',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'sslauth-desc' => '認証に使用する SSL 証明書を利用者がアップロードできるようにする',
	'sslauth-title-enable' => 'SSL クライアント認証を有効化',
	'sslauth-title-disable' => 'SSL クライアント認証を無効化',
	'sslauth-enable' => '有効化',
	'sslauth-disable' => '無効化',
	'sslauth-cn' => '一般名 (CN)',
	'sslauth-email' => 'メール アドレス',
	'sslauth-serial' => 'シリアル番号',
	'sslauth-response-enable' => 'SSL 認証を有効にしました。自分のクライアント証明書を使用して HTTPS で{{SITENAME}}に接続すれば常に自動ログインできるようになりました。',
	'sslauth-response-disable' => 'SSL 認証を無効にしました。',
	'sslauth-invalidrequest-title' => '無効なリクエスト',
	'sslauth-invalidrequest' => 'このページを有用なものにするために、有効な SSL クライアント証明書を指定してください。',
	'clientssl-legend' => 'SSL 認証',
	'clientssl-text' => 'このページでは、クライアント SSL 証明書での認証を有効化/無効化できます。',
	'sslauth-prefs-name' => 'SSL 認証',
	'sslauth-prefs-linktospecial' => 'クライアント証明書を有効化/無効化',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'sslauth-enable' => 'Aschalten',
	'sslauth-disable' => 'Ausschalten',
	'sslauth-cn' => 'Allgemengen Numm',
	'sslauth-email' => 'E-Mailadress',
	'sslauth-serial' => 'Seriennummer',
	'sslauth-invalidrequest-title' => 'Net-valabel Ufro',
	'clientssl-legend' => 'SSL-Authentifikatioun',
	'sslauth-prefs-name' => 'SSL-Authentifikatioun',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'sslauth-desc' => 'Овозможува корисниците да подигаат SSL-уверенија што ќе се користат за заверки',
	'sslauth-title-enable' => 'Овозможи заверка со SSL',
	'sslauth-title-disable' => 'Овнеозможи заверка со SSL',
	'sslauth-enable' => 'Овозможи',
	'sslauth-disable' => 'Оневозможи',
	'sslauth-cn' => 'Заедничко име',
	'sslauth-email' => 'Е-пошта',
	'sslauth-serial' => 'Сериски број',
	'sslauth-response-enable' => 'Заверката со SSL е успешно овозможена. Отсега ќе се најавувате автоматски кога ќе се поврзувате со {{SITENAME}} преку HTTPS со вашето клиентско уверение.',
	'sslauth-response-disable' => 'Заверката со SSL е успешно оневозможена.',
	'sslauth-invalidrequest-title' => 'Неважечко барање',
	'sslauth-invalidrequest' => 'Мора да поднесете важечко SSL-уверение за да страницава да биде од корист.',
	'clientssl-legend' => 'Заверка со SSL',
	'clientssl-text' => 'Со оваа страница се овозможуваат/оневозможуваат клиентски заверки со SSL-уверенија.',
	'sslauth-prefs-name' => 'Заверка со SSL',
	'sslauth-prefs-linktospecial' => 'Овозможи/Оневозможи клиентски уверенија',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'sslauth-desc' => 'Maakt het voor gebruikers SSL-certificaten te uploaden om die te gebruiken voor authenticatie',
	'sslauth-title-enable' => 'SSL Clientauthenticatie inschakelen',
	'sslauth-title-disable' => 'SSL Clientauthenticatie uitschakelen',
	'sslauth-enable' => 'Inschakelen',
	'sslauth-disable' => 'Uitschakelen',
	'sslauth-cn' => 'Algemene naam',
	'sslauth-email' => 'E-mailadres',
	'sslauth-serial' => 'Serienummer',
	'sslauth-response-enable' => 'SSL-verificatie is ingeschakeld. Als i verbindt met {{SITENAME}} via HTTPS met uw clientcertificaat, wordt u automatisch aangemeld.',
	'sslauth-response-disable' => 'SSL-verificatie is uitgeschakeld.',
	'sslauth-invalidrequest-title' => 'Ongeldige aanvraag',
	'sslauth-invalidrequest' => 'Er moet een geldig SSL clientcertificaat opgegeven worden voordat deze pagina nuttig is.',
	'clientssl-legend' => 'SSL-authenticatie',
	'clientssl-text' => 'Gebruik deze pagina om verificatie met SSL clientcertificaten in en uit te schakelen',
	'sslauth-prefs-name' => 'SSL-authenticatie',
	'sslauth-prefs-linktospecial' => 'Clientcertificaten in- of uitschakelen',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'sslauth-enable' => 'چارنول',
	'sslauth-disable' => 'ناچارنول',
	'sslauth-email' => 'برېښليک پته',
);

/** Tamil (தமிழ்)
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'sslauth-enable' => 'செயலாக்கு',
	'sslauth-cn' => 'பொதுப் பெயர்',
	'sslauth-email' => 'மின்னஞ்சல் முகவரி',
	'sslauth-serial' => 'தொடரிலக்கம்',
	'sslauth-invalidrequest-title' => 'செல்லுபடியாகாத வேண்டுகோள்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'sslauth-email' => 'ఈ-మెయిల్ చిరునామా',
	'sslauth-serial' => 'క్రమ సంఖ్య',
);

/** Ukrainian (українська)
 * @author Steve.rusyn
 */
$messages['uk'] = array(
	'sslauth-email' => 'Адреса електронної пошти',
);
