<?php
namespace Orbit\src\controller;
use Orbit\libs\core\Controller;

class WelcomeController extends Controller{

    
    public function index(){

        $this->loader->render('ACCUEIL',"home");
    }

    
}
?>