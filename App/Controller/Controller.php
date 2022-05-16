<?php 
namespace App\Controller;
use App\Auth\AuthUser;
use App\App;

class Controller
{
    protected $viewPath;
    protected $template;

    protected function render($view,$variables=[], $template)
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/'.$this->template = $template.'.php'); 
    }

    public function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        var_dump(sha1('demo'));
        die('Acces interdit');

    }

    protected function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('page introuvable');
    }
}