<?php 
namespace App\Controller\Admin;

use App\App;
use App\Auth\AuthUser;



class AppController extends \App\Controller\AppController
{
    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new AuthUser($app->getDb());
        if(!$auth->logged())
        {
            $this->forbidden();
        }
    }

}