<?php

	class connectionDB {

		// Hold the class instance.
		private $conn;
		
		public $host,$user,$pass,$name;
		
		// The db connection is established in the private constructor.
		public function __construct()
		{
			$this->getConfig();

			$this->conn = new PDO("mysql:host={$this->host};
			dbname={$this->name}", $this->user,$this->pass,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
		}
		
		public function getConnection()
		{
			return $this->conn;
		}

		// WEB.CONFIG example
		public function getConfig(){
			$xml =  simplexml_load_file("web.config") or die("Error: Cannot create object"); 

			$fullString = ($xml->connectionStrings->add[0]["connectionString"]);
			$strArr = explode(";", $fullString);

			$arrCount = count($strArr);
			$connArr[]="";
			
			for($x=0;$x<$arrCount-1;$x++){
				$aS = explode("=",$strArr[$x]);
				$connArr+=array(strtolower(trim($aS[0])) => trim($aS[1]));
			}
			
			$this->host = $connArr["server"];
			$this->name = $connArr["database"];
			$this->user = $connArr["user id"];
			$this->pass = $connArr["password"];
		}

	}


?>