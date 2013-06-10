<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hrishikesh
 * Date: 9/6/13
 * Time: 1:19 PM
 * To change this template use File | Settings | File Templates.
 */

/**
 * Use the DS to separate the directories in other defines
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}
if (!defined('ROOT')) {
    define('ROOT', dirname(__FILE__));
}


if (!defined('CLASSES_DIR')) {
    define('CLASSES_DIR', ROOT . '/classes' );
}
if (!defined('CONFIG_FILE_PATH')) {
    define('CONFIG_FILE_PATH', ROOT . '/config.ini' );
}
