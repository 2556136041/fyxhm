<?php

class File {
	private $_dir;

	const EXT = '.txt';

	public function __construct() {
		$this->_dir = dirname(__FILE__) . '/files/';
	}
	public function cacheData($key, $value = '') {
		$filename = $this->_dir  . $key . self::EXT;

		if($value !== '') { // 将value值写入缓存
			if(is_null($value)) {
				return @unlink($filename);
			}
			$dir = dirname($filename);
			if(!is_dir($dir)) {
				mkdir($dir, 0777);
			}
			return file_put_contents($filename,json_encode($value));
		}

		if(!is_file($filename)) {
			return FALSE;
		} 
		$contents = file_get_contents($filename);
		return json_decode($contents, true);
		
	}
}

// $file = new File();

//echo $file->cacheData('test1');