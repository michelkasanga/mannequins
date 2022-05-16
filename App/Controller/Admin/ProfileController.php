<?php 
namespace App\Controller\Admin;

class ProfileController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadClass('Auth');
        
    }
    public function profile()
    {
        $user = $this->Auth->find($_SESSION['auth']);
        $this->render("pages.admin.pages.profile",compact('user'),"admin/default");
    }
}