<?php 
namespace App\Controller\Admin;

use App\App;
use App\Auth\AuthUser;

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
    public function signUp()
    {
        $title = 'Inscrivez-vous';
        $message = '';
        if(!empty($_POST))
        {
            if(isset($_POST))
            {
                $username=htmlspecialchars($_POST['username']);
                $mail=htmlspecialchars($_POST['email']);
                $mdp=sha1($_POST['password']);
                $mdp2=sha1($_POST['password2']);
                

                if(strlen($_POST['username'])<=255)
                {
                    if(strlen($_POST['password'])>5)
                    {
                            if(filter_var($mail,FILTER_VALIDATE_EMAIL))
                            {
                                $email = $this->Auth->findMail($mail);
                                if(count($email)==0)
                                {
                                    if($mdp === $mdp2)
                                    {
                                        $res = $this->Auth->create([
                                            'username' => $username,
                                            'mail' => $mail,
                                            'password' => $mdp
                                            ]);
                                            $auth = new AuthUser(App::getInstance()->getDb());
                                        if($auth->login($_POST['email'],$_POST['password']))
                                        {
                                        header('Location:?src=admin');
                                        }else{
                                        header('Location:?src=home');
                                        }
                                    }else{
                                        $message = 'les mots de passe ne correspondent';
                                    }
                                }else{
                                    $message = 'Adress mail deja utiliser';
                                }
                            }else{
                                $message = 'votre adress mail n\'est pas valide';
                            }
                        
                    }else{
                        $message = 'mot de passe est tres cours';
                    }
                }else{
                    $message = 'le nom doit contenir 255 caracter';
                }

                
            }
        }
        $this->render("pages.admin.pages.signUp",compact('title','message'),"admin/default2");
    }
}