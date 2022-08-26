<?php
require_once 'system/databases/DBConnection.class.php';

    class Dao {
        
        private $connection;
        private $tableName;
        private $fieldsName;
        private $fieldKey;
        
        
        function __construct($tableName, $fieldsName, $fieldKey){
            $this->setConnection(new DBConnection());
            $this->setTableName($tableName);
            $this->setFieldsName($fieldsName);
            $this->setFieldKey($fieldKey);
            
        }
        
        public function getConnection(){
            return $this->connection;
        }
        
        public function setConnection($connection){
            $this->connection = $connection;
            return $this;
        }
    
    public function getTableName(){
        return $this->tableName;
    }

    public function setTableName($tableName){
        $this->tableName = $tableName;
        return $this;
    }

    public function getFieldsName(){
        return $this->fieldsName;
    }

    public function setFieldsName($fieldsName){
        $this->fieldsName = $fieldsName;
        return $this;
    }

    public function getFieldKey(){
        return $this->fieldKey;
    }

    public function setFieldKey($fieldKey){
        $this->fieldKey = $fieldKey;
        return $this;
    }

}