<?php 
namespace App\Controller;
use App\Auth\AuthUser;
use App\App;

class Controller
{
    protected $viewPath;
    protected $template;

    protected function render($view,$variables=[], $template='')
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/'.$template.'.php'); 
    }
    protected function default($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/default.php'); 
    }
    protected function defaultAdmin($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/admin/default.php'); 
    }
    protected function default2($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/admin/default2.php'); 
    }
    protected function find($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/admin/find.php'); 
    }
    protected function find2($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/admin/find2.php'); 
    }
    protected function one($view,$variables=[])
    {
        
        ob_start(); 
        extract($variables);
        require($this->viewPath.str_replace('.','/',$view).'.php');
        $content = ob_get_clean();
        require($this->viewPath.'template/one.php'); 
    }

    public function forbidden()
    {
        header('Location:?src=5854a82bc4373373f08e11b4ba52e373bc3ccdc7');
        

    }

    protected function notFound()
    {
        header('Location:?src=a83d4bf9070ae6eb080b4cc7b2703e17a51172ae');
        
    }
}