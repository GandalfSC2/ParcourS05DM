<?php 

namespace Sonic\Controllers;

use Sonic\Models\Character;

class CoreController {


    protected function show($viewName, $viewData = [])
    {

        global $router;
    
        extract($viewData);


        $absoluteURL = $_SERVER['BASE_URI'];

        $characterModel = new Character;
        $charaterList = $characterModel->findAll();


        require_once __DIR__.'/../views/layout/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/layout/footer.tpl.php';
    }
}