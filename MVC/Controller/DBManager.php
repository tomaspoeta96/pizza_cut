<?php
	class DBcnx{
		private static $db;
		private function __construct() {}
		private static function connect(){
			$host = "localhost";
			$user = "root";
			$pass = "root";
			$name = "pizza_cut";
			$dsn = "mysql:host=" . $host . ";dbname=" . $name . ";charset=utf8";
			try {
				self::$db = new PDO($dsn, $user, $pass);
			} catch(Exception $e) {
				echo "Oops, error en la página: " . $e->getMessage();
			}
		}
		public static function getConnection(){
			if(empty(self::$db)) {
				self::connect();
			}
			return self::$db;
		}
		public static function getStatement($query){
			return self::getConnection()->prepare($query);
		}
	}
