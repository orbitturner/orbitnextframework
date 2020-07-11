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
use Orbit\src\controller as Basecontroller;
use Orbit\libs\engine\Err_Manager;

class OrbitLauncher{
        public function __construct(){
			$error = new Err_Manager();
			/**
			 * Manage Url and Project Routing to Get Controllers from URL
			 */
			$boolUrl = false;
			if(isset($_GET['url'])){
				$boolUrl = true;
			}
			if(strlen($_SERVER["REQUEST_URI"]) != 1){
				$url = explode('/', substr($_SERVER['REQUEST_URI'],1));
				$controllerFile = 'src/controller/' . $url[0] . 'Controller.php';
                $controllerObject = $url[0]."Controller";
				if(file_exists($controllerFile)){
					$boolUrl = true;
				}
			}
			if($boolUrl == true){
				if(isset($_GET['url'])) {
                    $url = explode('/', $_GET['url']);
                } else {
                    $url = explode('/', substr($_SERVER['REQUEST_URI'],1));
				}
				
				$error->pageError($url[0]);

                $controllerFile = 'src/controller/' . $url[0] . 'Controller.php';
				$controllerObject = "Orbit\\src\\controller\\".$url[0]."Controller";

				if(file_exists($controllerFile)){
					// var_dump($controllerFile);
					// die();
					require_once $controllerFile;
					
					$controller = new $controllerObject();
                    //si la methode est saisie
                    if(isset($url[1])){
                        if($url[1] == ""){
                            $url[1] = "index";
                        }
                        if(method_exists($controller, $url[1])){
							$m =$url[1];
							require_once "DAO.sys.class.php";
                            $r = DAO::paramsMethods($controllerObject,$url[1]);
                            $params = $r->getParameters();
                            if(count($params)== 0)
                            {
                                $controller->$m();

                            }else{
                            	if(isset($url[2])){
	                                $controller->{$url[1]}($url[2]);
	                            }
	                            else{
	                                $msg = "la methode<b> ".$url[1]."()</b> a un parameter";
	                                $error->messageError($msg);
	                            }
	                        }
                        }else{
                            $msg = "La méthode <b>".$url[1]."()</b> n'existe pas dans le controller <b>".$url[0]."</b>!";
							$error->messageError($msg);
                        }
                    }else{
						if(method_exists($controller, "index")){
							$controller->{"index"}();
						}else{
							$msg = "La méthode <b>index()</b> n'existe pas dans le controller <b>".$url[0]."</b>!";
							$error->messageError($msg);
						}
					}
                }else{
                    $msg = "Le controller <b>" . $controllerObject . "</b> n'existe pas !";
					$error->messageError($msg);
                }

            }else{
				//============================================================================
				// 	# DEFAULT CONTROLLER MANAGER
				//============================================================================
				
				$controllerFile = 'src/controller/'.default_launcher_settings()['default_controller'].'.php';
				if(file_exists($controllerFile))
				{
					require_once $controllerFile;
					$controller = "Orbit\\src\\controller\\".default_launcher_settings()['default_controller'];

					$controller = new $controller();

				
					if(method_exists($controller, "index")){
						$controller->{"index"}();
					}else{
						$msg = "La methode <b>index()</b> n'existe pas dans le controller <b>".default_launcher_settings()['default_controller']."</b>!";
						$error->messageError($msg);
					}
                    
				}else{
					$msg = "Le controller welcome <b>" . default_launcher_settings()['default_controller'] . "</b> n'existe pas !";
					$msg = $msg. "<br/>Merci de bien faire la configuration du fichier <b>config/welcome_controller.php</b>!";
					$error->messageError($msg);
				}
            }
        }
		
	}
	//  =======================================================================|
    //  ❤#  BootStrap INSPIRED FROM SAMANE MVC BY NGOR SECK ❤
    //  ❤#  WEBSITE: http://www.samanemvc.sn ❤
    //  ❤#  MAIL: ngorsecka@gmail.com ❤
    //  ❤#  MAIL: samanemvc@gmail.com ❤
    //  ❤#  GITHUB: https://github.com/ngorseckframework/samanemvc❤
    //  ======================================================================|
?>