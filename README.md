MediaWiki-Extension-SSLClientAuthentication
===========================================

MediaWiki extension (fork) to allow for automatic login via browser certificates (PKCS#12)

Installation
============
  * update your MediaWiki database using the sql file: adds sslcerts table
  * make sure, your browser is configured to use a p12 certificate
  * login to MediaWiki, open user configuration page and activate SSL cert login
