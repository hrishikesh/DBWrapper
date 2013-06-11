<?php
/**
 * Created by Hrishikesh <hrishikesh.raverkar@gmail.com>.
 * Date: 12/6/13 2:55 AM
 */

class Model extends DBWrapper{

    protected $tableName = '';
    protected $fromTable = array();
    protected $where = array();
    protected $groupBy = array();
    protected $orderBy = array();
    protected $limit = 0;
    protected $offset =0;


    /**
     * @param array|string $fields
     * @return mixed|void
     */
    public function select($fields) {

    }
}