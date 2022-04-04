<?php

//--------------------------------------------------------------------
// App Namespace
//--------------------------------------------------------------------
// This defines the default Namespace that is used throughout
// CodeIgniter to refer to the Application directory. Change
// this constant to change the namespace that all application
// classes should use.
//
// NOTE: changing this will require manually modifying the
// existing namespaces of App\* namespaced-classes.
//
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
|--------------------------------------------------------------------------
| Composer Path
|--------------------------------------------------------------------------
|
| The path that Composer's autoload file is expected to live. By default,
| the vendor folder is in the Root directory, but you can customize that here.
*/
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
|--------------------------------------------------------------------------
| Timing Constants
|--------------------------------------------------------------------------
|
| Provide simple ways to work with the myriad of PHP functions that
| require information to be in seconds.
*/
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2592000);
defined('YEAR')   || define('YEAR', 31536000);
defined('DECADE') || define('DECADE', 315360000);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// PROJECT
define('PROJECT', '7ech_admin');

// BASE URL
define('BASE_URL', 'http://localhost/projects/projects_php72/7ech_administration/7ech_admin');
// define('BASE_URL', 'http://18.138.204.246/ftp/projects_php72/7ech_administration/7ech_admin');

// BILLPLZ_URL
// define('BILLPLZ_URL', 'http://localhost/projects/projects_php72/charity365/billplz/index.php');
// define('BILLPLZ_URL', 'http://18.138.204.246/ftp/projects_php72/charity365/billplz/index.php');
// define('BILLPLZ_URL', 'https://charity365.org.my/billplz2/index.php');

// API URL
// define('API_URL', 'http://localhost/projects/projects_php72/charity365/api');
// define('API_URL', 'http://18.138.204.246/ftp/projects_php72/charity365/api');
// define('API_URL', 'https://charity365.org.my/api');

// CSS PATH
define('CSS_PATH', BASE_URL . '/assets/css');

// TOOL URL
define('TOOL_URL', BASE_URL. '/../tool');

// JS PATH
define('JS_PATH', BASE_URL . '/assets/js');

// IMG PATH
define('IMG_PATH', BASE_URL . '/assets/images');

// FONT PATH
define('FONT_PATH', BASE_URL . '/assets/fonts');

//EXTERNAL IMAGE PATH
// define('EXT_IMG', BASE_URL . '/img/');
define('EXT_IMG', 'http://18.138.204.246/ftp/projects_php72/7ech_administration/7ech_admin' . '/img/');

//UPLOAD IMAGE PATH
define('UPLOAD_IMG', __DIR__ . '../../../img/');

// PLUGIN PATH
define('PLUGIN_PATH', BASE_URL . '/assets/plugins');

// SCSS PATH
define('SCSS_PATH', BASE_URL . '/assets/scss');

// RECEIPT PATH
define('RECEIPT_PATH', __DIR__ . '../../../../img/receipt/');

// RECEIPT URL
define('RECEIPT_URL', BASE_URL . '/../img/receipt/');

// KYC_PATH
define('KYC_PATH', __DIR__ . '../../../../img/kyc/');

// KYC_URL
define('KYC_URL', BASE_URL . '/../img/kyc/');

// NEWS_URL
define('NEWS_PATH', __DIR__ . '../../../../img/news/');

// cookie exp in seconds
define('COOKIE_EXP', '31536000');


//db setting
// define('HOSTNAME', '18.138.204.246');
define('HOSTNAME', '18.138.204.246');
define('USER_NAME', 'i4d');
define('PASSWORD', 'i4d5028');
define('DATABASE', '7ech_admin');



//email setting
define('SMTP_USER', 'vigrab.global@gmail.com');
define('SMTP_NAME', 'ViGrab');
define('SMTP_PASS', 'Bargiv!@#$5028');
define('SMTP_USERNAME', 'vigrab');
define('SMTP_REPLY', 'support@vigrab.com');
define('SMTP_BCC', ['support@vigrab.com']);


// sms gateway
define('SMS_URL', TOOL_URL . '/onewaysms/index.php');
define('SMS123_API', '83278e2a1529e290da718677a188b9ce');
define('SMS123_URL', 'https://www.sms123.net/api/send.php?apiKey=' . SMS123_API . '&recipients=[RECIPIENTS]&messageContent=[MESSAGE]&referenceID=[CUSTOMREFERENCEID]');

// USER URL
// define('USER_URL', 'https://user-staging.vigrab.com');
define('USER_URL', 'http://localhost/projects/projects_php72/vigrab/user');

// idenfic 
// define('IDENFIC_URL', 'https://idenfic.com/dev/api/src/api/ext/search?account=');

/* SANBOX Billplz */
define('BILLPLZ_URL', 'https://www.billplz-sandbox.com/api/v3/bills');
define('BILLPLZ_APIKEY', '348e817d-2bfe-4e09-b685-b496a46e75bc');
define('BILLPLZ_COL_ID', 'gt7lpyo7');

/* Production Billplz*/
// define('BILLPLZ_URL', 'https://www.billplz.com/api/v3/bills');
// define('BILLPLZ_APIKEY', '0e8dc672-0185-4581-a7fe-2dbf30720ea3');
// define('BILLPLZ_COL_ID', 'cpr23e0v');

// Senang Pay Use Only 
define('SENANG_URL', 'https://sandbox.senangpay.my/payment/');
define('SENANG_MERCHANT', '524163418402151');
define('SENANG_SECRET_KEY', '4084-393');
// define('Senang_URL', 'https://app.senangpay.my/payment/');
