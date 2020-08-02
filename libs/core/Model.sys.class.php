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
 *          
 *  AUTHOR : MOHAMED GUEYE [Orbit Turner] - Email: orbitturner@gmail.com - Country: Senegal
 */
namespace Orbit\libs\core;

use Orbit\libs\engine\Err_Manager;
use PDOException;

// use Orbit\libs\core\DAO;

abstract class Model 
{
    protected $db;
    
    // ========[CONSTRUCTOR SETS]========
    public function __construct()
    {
        require 'config/db.conf.php';
        
        if ($choix == 'ORM') {
            require "bootstrap.php";
            try {
                $this->db = $entityManager;
            } catch (PDOException $th) {
                $this->db = null;
            }  
        }elseif ($choix == 'DB') {
            require_once "DAO.sys.class.php";
            $connection = new DAO();
            $this->db = $connection->dbConnector();
        }else {
            $error = new Err_Manager();
            $message = "Merci de Vérifier la Configuration du Fichier [db.conf.php].<br/>Il se situe dans: votreProjet/config/";
            $error->messageError($message);
        }
        // var_dump($this->db);
    }
    
}
