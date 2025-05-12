<?php
ini_set('display_errors', 'on');
session_start();

// Database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'db_event_management';

/*
// Alternate credentials (commented out)
$dbHost = 'localhost';
$dbUser = 'tousifkh_calenda';
$dbPass = 'ce=rgfq=C6LB';
$dbName = 'tousifkh_calendar';
*/

// Project data
$site_title = 'Online Banking - www.TechZoo.org';
$email_id = 'customerservice@hlbonline.pro';

$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot = str_replace(array($docRoot, 'library/config.php'), '', $thisFile);
$srvRoot = str_replace('library/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

// You can manually sanitize inputs later where necessary, or better: use prepared statements
require_once 'database.php';
require_once 'common.php';
?>
