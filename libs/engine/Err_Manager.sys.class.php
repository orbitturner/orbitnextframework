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
namespace Orbit\libs\engine;

//  =======================================================================|
//  📜#  🛑⛔ ERROR & RESTRICTION MANAGER CLASS ⛔🛑 📜
//  ======================================================================|
class Err_Manager{

    public function __construct(){
        
    }
    public function messageError($message)
    {
        require_once "OrbitErrMgrDisplay.php";
    }
    public function pageError($url)
    {
            switch ($url){
                case "config":
                    $this->exit404();
                    break;
                case "libs":
                    $this->exit404();
                    break;
                case "libs/engine":
                    $this->exit404();
                    break;
                case "libs/core":
                    $this->exit404();
                    break;
                case "public":
                    $this->exit404();
                    break;
                case "public/img":
                    $this->exit404();
                    break;
                case "public/css":
                    $this->exit404();
                    break;
                break;
                case "public/assets":
                    $this->exit404();
                case "public/OrbitErrMgr":
                    $this->exit404();
                case "public/js":
                    $this->exit404();
                    break;
                case "src":
                    $this->exit404();
                    break;
                case "src/controller":
                    $this->exit404();
                    break;
                case "src/model":
                    $this->exit404();
                    break;
                case "src/view":
                    $this->exit404();
                    break;
                case "src/entities":
                    $this->exit404();
                    break;
                case "templates_c":
                    $this->exit404();
                    break;
                case "vendor":
                    $this->exit404();
                    break;
            }
    }
    private function exit404()
    {
        global $_SERVER;
        header("HTTP/1.1 404 Not Found");
        
        require_once "OrbitErrMgrDisplay_404.php";
        exit();
    }
}
?>