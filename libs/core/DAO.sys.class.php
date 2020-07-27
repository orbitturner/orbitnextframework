<?php
/* === WELCOME TO ORBIT NEXT FRAMEWORK  ===
 *                     
 *	  By :
 *
 *     ██████╗ ██████╗ ██████╗ ██╗████████╗    ████████╗██╗   ██╗██████╗ ███╗   ██╗███████╗██████╗ 
 *    ██╔═══██╗██╔══██╗██╔══██╗██║╚══██╔══╝    ╚══██╔══╝██║   ██║██╔══██╗████╗  ██║██╔════╝██╔══██╗
 *    ██║   ██║██████╔╝██████╔╝██║   ██║          ██║   ██║   ██║██████╔╝██╔██╗ ██║█████╗  ██████╔╝
 *    ██║   ██║██╔══██╗██╔══██╗██║   ██║          ██║   ██║   ██║██╔══██╗██║╚██╗██║██╔══╝  ██╔══██╗
 *    ╚██████╔╝██║  ██║██████╔╝██║   ██║          ██║   ╚██████╔╝██║  ██║██║ ╚████║███████╗██║  ██║
 *     ╚═════╝ ╚═╝  ╚═╝╚═════╝ ╚═╝   ╚═╝          ╚═╝    ╚═════╝ ╚═╝  ╚═╝╚═╝  ╚═══╝╚══════╝╚═╝  ╚═╝
 */
namespace Orbit\libs\core;

use Exception;
use Orbit\libs\engine\Err_Manager;
use PDO;
use ReflectionMethod;

// require_once ($_SERVER["DOCUMENT_ROOT"].'/TPDevWeb_SIMPLONP3/TP4_PHP_POO_V1/src/routes/dir.php');
	
	class DAO 
	{
		private $dsn;
		private $user;
		private $password; 

		/**
		 * Give Here Your Database Configs
		 */
		public function __construct()
		{
			require "config/db.conf.php";
			$this->dsn = "mysql:host=".$orm['host'].";dbname=".$orm['dbname'];
			$this->user = $orm['user'];
			$this->password = $orm['password'];
		}
		
		/** 
	* Database connector Function
	* @return PDO or NULL
	*/
		public function dbConnector(){
			try {
				$db = new PDO($this->dsn,
                                $this->user,
                                $this->password,
                                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				// $db = new PDO(
				// 	'mysql:host='.$this->host.';
				// 	dbname='.$this->dbName, 
				// 	$this->user, $this->password, 
				// 	array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', 
				// 	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
				echo '<script>console.log("CONNECTED TO SERVER DB SUCCESSFULLY")</script>';

			} catch (Exception $err) {
				$db = null;
				// $itMsg = $err->getCode();
				
				$erreur_base = $err->getMessage();
				if(substr($erreur_base, 0, 39) == "SQLSTATE[HY000] [1049] Unknown database")
				{   
					$error = new Err_Manager();
					$message = "BASE DE DONNEES INEXISTANTES DANS LA GALAXIE !</br> CREER LA D'ABORD !😁";
					$error->messageError($message);
					
				}
				else if(substr($erreur_base, 0, 22) == "SQLSTATE[HY000] [1045]" || substr($erreur_base, 0, 22) == "SQLSTATE[HY000] [1044]")
				{   
					$error = new Err_Manager();
					$message = "LES PARAMETRES DE CONNEXION USER et PASSWORD SONT INCORRECTES 😢";
					$error->messageError($message); 
					
				} else {
					$error = new Err_Manager();
					$message = $err->getMessage();
					$error->messageError($message);
					
				}

			}
			return $db;
		}

		/**
		 * PERMET D'AVOIR LES INFOS SUR LA METHODE D'UNE CLASSE
		 */
		static function paramsMethods($controller,$methode)
		{
			return new ReflectionMethod($controller,$methode);
		}
	}
	
	
?>