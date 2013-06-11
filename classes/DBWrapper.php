<?php
/**
 * Created by Hrishikesh <hrishikesh.raverkar@gmail.com>.
 * Date: 12/6/13 2:55 AM
 */

include_once "DBConnector.php";
abstract class DBWrapper  {

    protected $db;

    public function __construct(){
        $this->db = DBConnector::getInstance()->getConnection();
    }

    /**
     * @param array | string $fields
     * @return mixed
     */
    abstract public function select($fields);

}

