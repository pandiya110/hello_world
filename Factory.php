<?php
Class Factory {

	static function getClassName($className = 0){
		if(!empty($className)){
			if(class_exists($className)){
				$class =  $className
				$cmd = new $className();
				return $cmd;
			}else{
				return 'Class Not Exists';
			}			
		}
	}
}
?>