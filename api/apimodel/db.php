<?php

class Db {
	static private $_instance;
	static private $_connectSource;
	private $_dbConfig = array(
		'host' => 'bdm272871582.my3w.com',
		'user' => 'bdm272871582',
		'password' => '13088829771',
		'database' => 'bdm272871582_db',
	);

	private function __construct() {
	}

	static public function getInstance() {
		if(!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function connect() {
		if(!self::$_connectSource) {
			self::$_connectSource = @mysql_connect($this->_dbConfig['host'], $this->_dbConfig['user'], $this->_dbConfig['password']);	

			if(!self::$_connectSource) {
				throw new Exception('mysql connect error ' . mysql_error());
				//die('mysql connect error' . mysql_error());
			}
			
			mysql_select_db($this->_dbConfig['database'], self::$_connectSource);
			mysql_query("set names UTF8", self::$_connectSource);
		}
		return self::$_connectSource;
	}
}
// $connect = Db::getInstance()->connect();

// $sql = "select * from pro";
// $result = mysql_query($sql, $connect);
// echo mysql_num_rows($result);
// var_dump($connect);