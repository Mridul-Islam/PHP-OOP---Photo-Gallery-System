<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Photo-Gallery-System');

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

require_once("includes/functions.php");
require_once("includes/new_config.php");
require_once("includes/database.php");
require_once("includes/user.php");
require_once("includes/session.php");
require_once("includes/db_object.php");
require_once("includes/photo.php");



?>