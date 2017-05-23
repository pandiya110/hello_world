<?php
include('connection.php');
Class DBClass {

	static function getInstance() {
        static $Instance = false;
        if (!$Instance) {
            $Instance = new DBClass;
            return $Instance;
        } else {
            return $Instance;
        }
    }

    static function findTableName($className = 0){
		return 'Table name';
    }

    static function findTableColumns($tableName = 0){
    	$columns  = "SHOW COLUMNS FROM ". $tableName;
    	$result = mysql_query($columns);
    	$column_array = array();
    	while ($row = mysql_fetch_assoc($result)) {
    		$column_array[] = $row['Field'];
    	}
    	return $column_array;
    }
}
?>