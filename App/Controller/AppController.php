<?php 
namespace App\Controller;

class AppController extends Controller
{
    public function __construct()
    {
        $this->viewPath=ROOT.'/App/View/';
    }

    public function loadClass($class_name)
    {
        $this->$class_name = \App\App::getTable($class_name);
    }

}