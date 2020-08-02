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

abstract class Controller 
{
    protected $loader;
    protected $modelName;
    protected $model;
    protected $entity;
    
    public function __construct()
    {
        if(!empty($this->modelName)) {
            $classEntity = $this->modelName;
            $classModel = "Orbit\\src\\model\\".$this->modelName;
            // This block will verify If The Model or The Entity of the Actual class exist
            try {
                $this->model = new $classModel;
                $this->entity = new $classEntity;
            } catch (\Throwable $th) {
                $error = new Err_Manager();
                $message = $th->getMessage().'<br/> Merci de créer l\'Entité et/ou le Modèle: '.$this->modelName;
                $error->messageError($message);
            }
            $this-> loader = new Renderer();
        } else {
            
            /* Instancie La Vue*/
            $this-> loader = new Renderer();
        }
    }
    
    
}


?>