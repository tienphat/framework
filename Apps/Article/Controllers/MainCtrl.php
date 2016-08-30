<?php

namespace Apps\Article\Controllers;

use Libs\Controller;

class MainCtrl extends Controller{
    
    
    function index()
    {
        $pk = $this->req->get('pk');
        
        $title = $this->req->post('title');
        
        echo 'a';
    }
    
}
