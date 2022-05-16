<?php 
namespace App\Controller;

use App\App;
use App\Auth\AuthUser;

class UserController extends AppController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function login()
    {
        $title = 'Connection';

        if(!empty($_POST)){
            $auth = new AuthUser(App::getInstance()->getDb());
            if($auth->login($_POST['username'],$_POST['userpass']))
            {
            header('Location:?src=admin');
            }else{
            header('Location:?src=home');
            }
        }
    
    
        $this->render('pages.connect',compact('title'),'connect');
    }
}