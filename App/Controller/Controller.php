<?php 
namespace App\Controller;

class Controller
{
    protected $viewPath;

    public function __construct()
    {
        $this->viewPath=ROOT.'/App/View/';
    }
    public function render($view,$variables=[],string $template)
    {
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/'.$template.'.php'); 
    }
    public function loadClass($class_name)
    {
        $this->$class_name = \App\App::getTable($class_name);
    }

}