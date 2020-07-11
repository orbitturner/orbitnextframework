<?php
/* === 🌌 WELCOME TO ORBIT NEXT FRAMEWORK 🌌 ===
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

//  =================================== ========|
//  # 🚧⚙ NEEDED FUNCTIONS ⚙🚧
//  ===========================================|
require_once  'config/default_launcher.php';
require_once  'config/db.conf.php';
require_once  'libs/routing.conf.php';
require_once  'src/routes/dir.php';

use Orbit\libs\engine\Err_Manager;
// --------------------------------------------|

class Autoloader{
  /**
         * JE RECUPERE LA CLASSE INSTANCIEE ET J'LA PASSE A LA FONCTION OAL
         */
        static function register(){
        spl_autoload_register([
            __CLASS__,'orbitautoload'
        ]);
    }

    //  =======================================================================|
    //  📜#  WILL AUTOMATICALLY LOAD EVERY FILE OF CLASSES OR OF THE SYSTEM 📜
    //  ======================================================================|
    static function orbitautoload($actualClass){
      /*ON RECUPERE LE CHEMIN ET ON ENLEVE LE ORBIT */
      (strpos($actualClass, 'Orbit\\') !== false) ? $actualClass = str_replace('Orbit'. '\\', '', $actualClass) : '';

      
    //  =======================================================================|
    //  📜#  LOAD CORE & ENGINE FILES FOR SYSTEM DEPENDENCIES  📜
    //  ======================================================================|
    if(file_exists("libs/core/".$actualClass.".sys.class.php")) {
        require_once "libs/core/".$actualClass.".sys.class.php";
    }
    if(file_exists("libs/engine/".$actualClass.".sys.class.php")) {
        require_once "libs/engine/".$actualClass.".sys.class.php";
    }
    // FOR SYSTEM NAMESPACES
    if(file_exists(str_replace("\\", "/", $actualClass.".sys.class.php"))){
      require_once str_replace("\\", "/", $actualClass.".sys.class.php");
    }
    //  =======================================================================|
    //  📜#  LOAD ALL FILES REAUIRED FOR DEV PURPOSE [In src/] 📜
    //  ======================================================================|
      else if(file_exists("src/entities/".$actualClass.".class.php")) {
        require_once "src/entities/".$actualClass.".class.php";
      } else if(file_exists("src/controller/".$actualClass.".class.php")) {
        require_once "src/controller/".$actualClass.".class.php";
      } else if(file_exists("src/model/".$actualClass.".class.php")) {
        require_once "src/model/".$actualClass.".class.php";
  
      } else if(file_exists("src/entities/".$actualClass.".php")) {
        require_once "src/entities/".$actualClass.".php";
      } else if(file_exists("src/controller/".$actualClass.".php")) {
        require_once "src/controller/".$actualClass.".php";
      } else if(file_exists("src/model/".$actualClass.".php")) {
        require_once "src/model/".$actualClass.".php";
    //  =======================================================================|
    //  📜# IN CASE OF NAMESPACES 📜
    //  ======================================================================|
      } else if(file_exists(str_replace("\\", "/", $actualClass.".class.php"))) {
        require_once str_replace("\\", "/", $actualClass.".class.php");
      } else if(file_exists(str_replace("\\", "/", $actualClass.".php"))) {
        require_once str_replace("\\", "/", $actualClass.".php");
      } else if(file_exists(str_replace("\\", "/", $actualClass.".lib.class.php"))) {
        require_once str_replace("\\", "/", $actualClass.".lib.class.php");
      } else
      {
        $message = "Le namespace <b>".$actualClass."</b> ne correspond pas à un chemin valide
                    dans votre application.
                    <br/> Ou encore vous vous êtes trompés sur l'Orthographe!!!!";
        require_once "libs/engine/Err_Manager.sys.class.php";
        $error = new Err_Manager();
        $error->messageError($message);
      }
    }
}
    //  =======================================================================|
    //  ❤#  AUTOLOADER INSPIRED FROM SAMANE MVC BY NGOR SECK ❤
    //  ❤#  WEBSITE: http://www.samanemvc.sn ❤
    //  ❤#  MAIL: ngorsecka@gmail.com ❤
    //  ❤#  MAIL: samanemvc@gmail.com ❤
    //  ❤#  GITHUB: https://github.com/ngorseckframework/samanemvc❤
    //  ======================================================================|
Autoloader::register();
?>
