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
        $this->loadClass('UsersPicture');
        $this->loadClass('File');
        
    }
    public function profile()
    {
        $user = $this->Auth->find($_SESSION['auth']);
        $userspicture = $this->UsersPicture->findPicture($user->id);
        $this->defaultAdmin("pages.admin.pages.profile",compact('user','userspicture'));
    }
    public function changeProfilePicture()
    {
        $users = $this->Auth->find($_SESSION['auth']);
        $picture = $this->File->upload('picture','../App/Photo/UsersPicture/');
        $id = $users->id;
            if(isset($picture)):
                
                $this->UsersPicture->create([
                    
                    'id_user' =>$id,
                    'picture' =>"$picture"
                        
                ]);
                header('Location:?src=profile');
            endif;
    
    }
    public function setInformationUser()
    {
        $users = $this->Auth->find($_SESSION['auth']);
        $id = $users->id;
    
        if(isset($_POST))
        {
            $this->Auth->update($id,[
                'firstname' => $_POST['firstname'],
                'secondname' => $_POST['secondname'],
                'resposability' => $_POST['resposability'],
                'adress' => $_POST['adress'],
                'city' => $_POST['city'],
                'country' => $_POST['country'],
                'postalCode' => $_POST['postalCode']
            ]);
            header('Location:?src=profile');
        }
        
        
    }
    public function signUp()
    {
        $title = 'Inscrivez-vous';
        $message = '';
        if (!empty($_POST)) {
            if (isset($_POST)) {
                $username=htmlspecialchars($_POST['username']);
                $mail=htmlspecialchars($_POST['email']);
                $mdp=sha1($_POST['password']);
                $mdp2=sha1($_POST['password2']);
                

                if (strlen($_POST['username'])<=255) {
                    if (strlen($_POST['password'])>5) {
                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                            $email = $this->Auth->findMail($mail);
                            if (count($email)==0) {
                                if ($mdp === $mdp2) {
                                    $res = $this->Auth->create([
                                        'username' => $username,
                                        'mail' => $mail,
                                        'password' => $mdp
                                        ]);
                                    $auth = new AuthUser(App::getInstance()->getDb());
                                    if ($auth->login($_POST['email'], $_POST['password'])) {
                                        header('Location:?src=e2bdf092171e62ed1823a26b139c920be4aa8ad0');
                                    } else {
                                        header('Location:?src=home');
                                    }
                                } else {
                                    $message = 'les mots de passe ne correspondent';
                                }
                            } else {
                                $message = 'Adress mail deja utiliser';
                            }
                        } else {
                            $message = 'votre adress mail n\'est pas valide';
                        }
                    } else {
                        $message = 'mot de passe est tres cours';
                    }
                } else {
                    $message = 'le nom doit contenir 255 caracter';
                }
            }
        }
        $this->default2("pages.admin.pages.signUp", compact('title', 'message'));
    }

    public function setProfile()
    {
        $user = $this->Auth->find($_GET['id']);
        $messageMail = '';
        $messageName = '';
        
        if (!empty($_POST)) {
            if (isset($_POST)) {
                $username=htmlspecialchars($_POST['username']);
                $mail=htmlspecialchars($_POST['email']);
        
                if (strlen($_POST['username'])<=255) 
                {
                    $name = $this->Auth->findName($username);
                    if(count($name) == 0)
                    {
                        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
                        {
                            $email = $this->Auth->findMail($mail);
                            if (count($email)==0) {
                                
                                     $this->Auth->update($_GET['id'],[
                                        'username' => $username,
                                        'mail' => $mail
                                        ]);  
                                        header('Location:?src=profile');  
                            } else {
                                $messageMail = 'Adress mail deja utiliser';
                            }
                        } else {
                            $messageMail = 'votre adress mail n\'est pas valide';
                        }
                    }else{
                        $messageName = 'ce nom d\'utilisateur est deja pris';
                    }    
                } else {
                    $messageName = 'le nom doit contenir 255 caracter';
                }
            }
        }
        $this->default2("pages.admin.pages.editprofile", compact('user', 'messageName','messageMail'));
    }
}