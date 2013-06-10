<?php
/**
 * Created by JetBrains PhpStorm.
 * User: hrishikesh
 * Date: 9/6/13
 * Time: 12:17 PM
 * To change this template use File | Settings | File Templates.
 */

//namespace Wrapper;

include_once "../index.php";

class DbWrapper {

    protected $config = array();

    public function __construct(){
        $arrConfig = parse_ini_file(CONFIG_FILE_PATH, true);
        $this->config = $arrConfig['database'];
    }

    /**
     * @param array $config
     */
    public function setDbConfig(array $config){
        $this->config = array_merge($this->config, $config);
    }

    /**
     * @return array
     */
    public function getDbConfig() {
        return $this->config;
    }
}

new \DbWrapper();