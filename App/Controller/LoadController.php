<?php 
namespace App\Controller;

class LoadController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadClass('Notice');
        $this->loadClass('News');
        $this->loadClass('Model');
        $this->loadClass('About');
        $this->loadClass('Comment');
        $this->loadClass('Article');
        $this->loadClass('Competition');
        $this->loadClass('Club');
        $this->loadClass('Comment_article');
    


    }
    public function index()
    {
        $notice = $this->Notice->noticeSelect();
        $news = $this->News->lastNews();
        $model = $this->Model->all();
        $about = $this->About->all();
        $article = $this->Article->all();
        $competition = $this->Competition->lastCompetition();
        $clubs = $this->Club->all();
        
        $this->default('pages.acceuil',compact('notice','news','model','about','article','competition','clubs'));
        
    }
    public function findNotice()
    {
        $notice = $this->Notice->find($_GET['id']);
        $this->one('pages.find.findNotice',compact('notice'));
    }
    public function oneNew()
    {
        $onenew = $this->News->find($_GET['id']);
        $time = \App\Model\php\Time::timing($onenew->date,$onenew->time);
        
        $title =$onenew->title;        
        $addr_ip = $_SERVER['REMOTE_ADDR'];
        $time_comment = time();
        $id = $onenew->id;
        $aa=$this->Comment->find_ip($addr_ip);
        $commentaire = $this->Comment->find($_GET['id']);
        
        $type='';
        $nom = '';
        $msg = '';

        foreach($aa as  $a):
            $ip_find =$a->address_ip;
            $name = $a->name;
            $comment = $a->comment;
        endforeach;
        if(count($aa)== 0)
        {
            $type = 'text';
            $nom = " votre nom et votre commentaire";
            if(!empty($_POST['name']) AND !empty($_POST['comment'])):
                if(isset($_POST['name']) AND isset($_POST['comment'])):
                    $this->Comment->create([
                        'address_ip' => "$addr_ip",
                        'name' => $_POST['name'],
                        'comment' => $_POST['comment'],
                        'news_id' => "$id",
                        'date' => date('Y-m-d H:i:s'),
                        'time'=>"$time_comment"
                        ]);  
                        header('Location:?src=pages.oneNew&id='.$onenew->id);
                endif;
            endif;
          
            
        }else{    
            $type='hidden';
            $nom = " votre commentaire $name";
        

        
        if(!empty($_POST['comment'])):
            if(isset($_POST['comment'])):
                $comment =  $_POST['comment'];
                $this->Comment->create([
                    "address_ip" => "$ip_find",
                    "name" => "$name",
                    "comment" =>"$comment",
                    "news_id "=> "$id",
                    'date' => date('Y-m-d H:i:s'),
                    "time"=>"$time_comment"
                    ]);
                    header('Location:?src=pages.oneNew&id='.$onenew->id);
            endif;
        endif;
        
            }
            foreach($commentaire as  $a):
                if(strlen($a->comment) === NULL){
                    $this->Comment->delete($_GET['id']);
                }
            endforeach;
            
        $this->one('pages.find.findNews',compact('onenew','time','title','nom','type','commentaire'));

    }

    public function ArticleFind()
    {
        $findArticle = $this->Article->find($_GET['id']);
        $time = \App\Model\php\Time::timing($findArticle->date,$findArticle->time);
        
        $title =$findArticle->title;        
        $addr_ip = $_SERVER['REMOTE_ADDR'];
        $time_comment = time();
        $id = $findArticle->id;
        $aa=$this->Comment_article->find_ip($addr_ip);
        $commentaire = $this->Comment_article->find($_GET['id']);
        
        $type='';
        $nom = '';
        $msg = '';

        foreach($aa as  $a):
            $ip_find =$a->address_ip;
            $name = $a->name;
            $comment = $a->comment;
        endforeach;
        if(count($aa)== 0)
        {
            $type = 'text';
            $nom = " votre nom et votre commentaire";
            if(!empty($_POST['name']) AND !empty($_POST['comment'])):
                if(isset($_POST['name']) AND isset($_POST['comment'])):
                    $this->Comment_article->create([
                        'address_ip' => "$addr_ip",
                        'name' => $_POST['name'],
                        'comment' => $_POST['comment'],
                        'article_id' => "$id",
                        'date' => date('Y-m-d H:i:s'),
                        'time'=>"$time_comment"
                        ]);  
                        header('Location:?src=34d2405248f96f68a53d744975dace088147607a&id='.$findArticle->id);
                endif;
            endif;
          
            
        }else{    
            $type='hidden';
            $nom = " votre commentaire $name";
        

        
        if(!empty($_POST['comment'])):
            if(isset($_POST['comment'])):
                $comment =  $_POST['comment'];
                $this->Comment_article->create([
                    "address_ip" => "$ip_find",
                    "name" => "$name",
                    "comment" =>"$comment",
                    "article_id "=> "$id",
                    'date' => date('Y-m-d H:i:s'),
                    "time"=>"$time_comment"
                    ]);
                    header('Location:?src=34d2405248f96f68a53d744975dace088147607a&id='.$findArticle->id);
            endif;
        endif;
        
            }
            foreach($commentaire as  $a):
                if(strlen($a->comment) === NULL){
                    $this->Comment->delete($_GET['id']);
                }
            endforeach;
            
        $this->one('pages.find.findArticle',compact('findArticle','time','title','nom','type','commentaire'));

    }
    public function oneModel()
    {
        $findModel = $this->Model->find($_GET['id']);
        $time = \App\Model\php\Time::timing($findModel->date,$findModel->time);
        $title =$findModel->title;
        
        $this->one('pages.find.findModel',compact('findModel','time','title'));

    }
    public function findCompetition()
    {
        $find = $this->Competition->find($_GET['id']);
        $annees =   (int)date('Y') - (int)$find->year_b;
        $this->one('pages.find.findCompetition',compact('find','annees'));
    }
    public function About()
    {
        $abouts = $this->About->all();
        $this->default('pages.about',compact('abouts'));

    }
    public function Articles()
    {
        $articles = $this->Article->all();
        $this->default('pages.articles',compact('articles'));
    }
    public function Competition()
    {
        $competitions = $this->Competition->all();
        $this->default('pages.competition', compact('competitions'));
    }
    public function News()
    {
        $news = $this->News->all();
        $this->default('pages.news',compact('news'));
    }
    public function getNotFound()
    {
        $number = 404;
        $message = 'Not Found';
        $this->default2('pages.admin.pages.error', compact('number','message'));
    }
    public function getForbidden()
    {
        $number = 500;
        $message ='ERROR SERVER';
        $this->default2('pages.admin.pages.error', compact('number','message'));
    }

}

    