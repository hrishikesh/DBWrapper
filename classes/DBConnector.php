<?php
/**
 * Created by Hrishikesh <hrishikesh.raverkar@gmail.com>.
 * Date: 12/6/13 2:55 AM
 */

include_once "../index.php";
include_once "Singleton.php";
class DBConnector implements Singleton {

    private static $_instance;
    private $_pdo;
    protected $config = array();

    private function __construct(){
        $arrConfig = parse_ini_file(CONFIG_FILE_PATH, true);
        $this->config = $arrConfig['database'];
        try {
            $this->_pdo = new PDO("mysql:host={$this->config['host']};dbname={$this->config['database_name']}", "{$this->config['username']}", "{$this->config['password']}");
            $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    /**
     * @return DBConnector
     */
    public static function getInstance() {
        if(self::$_instance === null) {
            self::$_instance = new DBConnector();
        }
        return self::$_instance;
    }

    /**
     * @return PDO
     */
    public function getConnection() {
        return $this->_pdo;
    }
    /**
     * @return bool
     */
    public function __clone(){
        return false;
    }

    /**
     * @return bool
     */
    public function __wakeup(){
        return false;
    }

    /**
     * @param array $config
     * @return $this
     */
    public function setDbConfig(array $config){
        $this->config = array_merge($this->config, $config);
        return $this;
    }

    /**
     * @return array
     */
    public function getDbConfig() {
        return $this->config;
    }
}