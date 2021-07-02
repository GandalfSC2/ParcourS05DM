<?php

namespace Sonic\Controllers;

class MainController extends CoreController {

    public function homepage ()
    {
        $this->show('home');
    }

    public function createurpage ()
    {
        $this->show('createur');
    }


    

}