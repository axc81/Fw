<?php
define('ROOT', realpath(dirname(dirname(__FILE__))));		//path menuju anscript
define('DS', DIRECTORY_SEPARATOR);							//DIRECTORY_SEPARATOR init
define('BASE_URL', 'http://localhost/coffeelab/public');		//url harus sesuai dengan nama folder dalama server
define('DB_HOST', 'localhost');								//host database
define('DB_USER', 'root');									//username database
define('DB_PASSWORD', '');									//password database								
define('DB_NAME', 'coffeelab');									//nama database 


//confifg paypal
/* define('PAYPAL_URL', (PAYPAL_SANDBOX == true)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");*/

define('PAYPAL_ID', 'payiptest@gmail.com');
define('PAYPAL_SANDBOX', FALSE); //TRUE OR FALSE
define('PAYPAL_RETURN_URL', 'http://localhost/coffeelab/public/Payment/success');
define('PAYPAL_CANCEL_URL', 'http://localhost/coffeelab/public/Payment/cancel');
define('PAYPAL_NOTIFY_URL', 'http://localhost/coffeelab/public/Payment');
define('PAYPAL_CURRENCY', 'USD');
define('PAYPAL_URL', (PAYPAL_SANDBOX == FALSE)?"https://www.sandbox.paypal.com/cgi-bin/webscr":"https://www.paypal.com/cgi-bin/webscr");

