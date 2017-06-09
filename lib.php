<?php
Class MyLib {

	static function Gisset($source, $key, $default){

		if(isset($source[$key]) && !empty($source[$key])){
			return $source[$key];
		}else{
			return $default;
		}
	}

	static function GiExplode($type, $str, $del){
		$data = false;
		if(!empty($str)){
			$data = $type($del,$str);			
			return $data;
		}		
	}

	static function GiImplode($type, $str, $del){
		$data = false;		
		if(!empty($str) && is_array($str)){
			$data = $type($del,$str);			
			return $data;
		}		
	}
}
?>