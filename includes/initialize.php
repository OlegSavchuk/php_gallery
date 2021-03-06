<?php
define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null:
    define("SITE_ROOT","/home/a7422059/public_html");
defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
require_once(LIB_PATH.DS.'config.php');
require_once(LIB_PATH.DS."functions.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."database.php");
require_once(LIB_PATH.DS."database_object.php");
require_once(LIB_PATH.DS."users.php");
require_once(LIB_PATH.DS."photographs.php");
require_once(LIB_PATH.DS."comment.php");
require_once(LIB_PATH.DS."pagination.php");
