<?php
namespace App\Controller\Admin;
use App\Controller\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadClass("Notice");
        $this->loadClass("News");
        $this->loadClass("Model");
        $this->loadClass("About");
        $this->loadClass("Comment");
        $this->loadClass("File");
        $this->loadClass('Category_model');
        $this->loadClass('Article');
        $this->loadClass('Competition');
        $this->loadClass('Level_competition');
        $this->loadClass('Manager');
        $this->loadClass('Club');
        $this->loadClass('Comment_article');
    }
    public function index(){
    
        $notice = $this->Notice->noticeSelect();
        $notice_all = $this->Notice->all();
        $news = $this->News->lastNews();
        $news_all = $this->News->all();
        $model = $this->Model->all();
        $about = $this->About->all();
        $comment = $this->Comment->all();
        $article = $this->Article->all();

        $notice_count = count($notice_all);
        $pourcentage_notice =  ($notice_count*100)/5000;
        $news_count = count($news_all);
        $pourcentage_news = ($news_count*100)/5000;
        $model_count = count($model);
        $pourcentage_model = ($model_count*100)/5000;
        $article_count = count($article);
        $pourcentage_article = ($article_count*100)/5000;

        $this->render("pages.admin.pages.index",
        compact("notice_count",
                "notice_all",
                "pourcentage_notice",
                "article_count",
                "pourcentage_article",
                "model_count",
                "pourcentage_model",
                "news_count",
                "pourcentage_news",
                "news",
                "model",
                "about"),
                "admin/default");
    }
    public function tables()
    {
        $news = $this->News->all();
        $models = $this->Model->all();
        $category = $this->Category_model->all();
        $article = $this->Article->all();
        $competition = $this->Competition->all();
        $clubs =$this->Club->all();

        
        
        $this->render("pages.admin.pages.tables",compact('news','models','category','article','competition','clubs'),"admin/default");
    }

    public function AddAbout()
    {
        $title = 'parlez a propos de vous';
    
        $lien = '?src=factory';
        $picture1 = $this->File->upload('picture1','../App/Photo/About/');
        $picture2 = $this->File->upload('picture2','../App/Photo/About/');
        $picture3 = $this->File->upload('picture3','../App/Photo/About/');
        if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['competence'])):
            if(isset($_POST['title']) AND isset($_POST['content']) AND isset($_POST['competence']) AND isset($picture1) AND isset($picture2) AND isset($picture3)):
                
                $this->About->create([
                
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'competence' => $_POST['competence'],
                    'picture1' => $picture1,
                    'picture2' => $picture2,
                    'picture3' => $picture3

                ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.addAbout",compact('title','lien'),"admin/find");
    }

    public function AddNotice()
    {
        $title = 'ajouter une annoce';
        if(!empty($_POST['title']) AND !empty($_POST['content'])):
            if(isset($_POST['title']) AND isset($_POST['content'])):
                $res = $this->Notice->create([
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'date' => date('Y-m-d H:i:s')
                ]);
                header('Location:?src=roxanne');
            endif;
        endif;
        $this->render("pages.admin.pages.addNotice",compact("title"),"admin/find2");
    }
    
    public function AddNews()
    {
        $title='Ajouter une Nouvelle';
        $time = time();
        $picture = $this->File->upload('picture','../App/Photo/NewsPicture/');
        if(!empty($_POST['title']) AND !empty($_POST['content'])):
            if(isset($_POST['title']) AND isset($_POST['content']) AND isset($picture)):
                
                $res = $this->News->create([
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'picture' => "$picture",
                    'date' => date('Y-m-d H:i:s'),
                    'time' => "$time"
                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addNews",compact('title'),"admin/find2");
    }
    public function AddPersonne()
    {
        $title='Ajouter une personne de votre club';
        $time = time();
        $picture = $this->File->upload('picture','../App/Photo/ClubPicture/');
        if(!empty($_POST['title']) AND !empty($_POST['content']) AND !empty($_POST['url'])  AND !empty($_POST['name'])):
            if(isset($_POST['title']) AND isset($_POST['content']) AND isset($_POST['url']) AND isset($_POST['name']) AND isset($picture)):
                
                $res = $this->Club->create([
                    'name' => $_POST['name'],
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'url' => $_POST['url'],
                    'picture' => "$picture",
                    'date' => date('Y-m-d H:i:s'),
                    
                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addPersonne",compact('title'),"admin/find");
    }
    public function AddArticle()
    {
        $title='Ajouter un Article';
        $time = time();
        $picture = $this->File->upload('picture','../App/Photo/ArticlePicture/');
        if(!empty($_POST['title']) AND !empty($_POST['content'])):
            if(isset($_POST['title']) AND isset($_POST['content']) AND isset($picture)):
                
                $res = $this->Article->create([
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'picture' => "$picture",
                    'date' => date('Y-m-d H:i:s'),
                    'time' => "$time"
                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addNews",compact('title'),"admin/find2");
    }

    public function AddModel()
    {
        $time = time();
        $category = $this->Category_model->all();
        $picture = $this->File->upload('picture','../App/Photo/ModelPicture/');
        if(!empty($_POST['category'])):
            if(isset($_POST['category']) AND isset($picture)):
                
                $res = $this->Model->create([
                    'picture' => "$picture",
                    'picture2' => '',
                    'date' => date('Y-m-d H:i:s'),
                    'time' => "$time",
                    'category_id' => $_POST['category']

                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addModel",compact('category'),"admin/find2");
    }

    public function AddCompetition()
    {
        $title = 'Ajouter une Competition';
        $time = time();
        $level = $this->Level_competition->all();
        $manager = $this->Manager->all();
        $picture = $this->File->upload('picture','../App/Photo/CompetitionPicture/');

        if(!empty($_POST['name_compet']) AND !empty($_POST['link_compet'])
         AND !empty($_POST['level']) AND !empty($_POST['info_manager'])
          AND !empty($_POST['detail'])):

            if(isset($_POST['name_compet']) AND isset($_POST['link_compet'])
            AND isset($_POST['level']) AND isset($_POST['info_manager'])
             AND isset($_POST['detail']) AND isset($picture)):
                
                $res = $this->Competition->create([
                    'name_compet' => $_POST['name_compet'],
                    'link_compet' => $_POST['link_compet'],
                    'level' => $_POST['level'],
                    'info_manager' => $_POST['info_manager'],
                    'detail' => $_POST['detail'],
                    'picture' => "$picture",
                    'picture2' =>'',
                    'date' => date('Y-m-d H:i:s'),
                    'time' => "$time"

                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addCompet",compact('level','title','manager'),"admin/find2");
    }

    public function addCategory_model()
    {
        $title = "Ajouter une categories ";
        if(!empty($_POST['category'])):
            if(isset($_POST['category'])):
                
                $res = $this->Category_model->create([
                
                    'title' => $_POST['category']

                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.addCategory_model",compact("title"),"admin/find2");
    }

    public function addManager()
    {
        $title = 'Ajouter un mannager';
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['number_phone']) AND !empty($_POST['sex']) AND !empty($_POST['nationality']) AND !empty($_POST['year_b'])):
            if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['number_phone']) AND isset($_POST['sex']) AND isset($_POST['nationality']) AND isset($_POST['year_b'])):
                
                $res = $this->Manager->create([
                
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'number_phone' => $_POST['number_phone'],
                    'sex' => $_POST['sex'],
                    'nationality' => $_POST['nationality'],
                    'year_b' => $_POST['year_b'],
                    'date' => date('Y-m-d H:i:s')

                ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.addManager",compact('title'),"admin/find2");
    }

    public function EditAboutCompetence()
    {
        $title = 'Editer vos competences';
    
        $lien = '?src=factory';
        $find = $this->About->find($_GET['id']);
        
        if(!empty($_POST['competence'])):
            if(isset($_POST['competence'])):
                
                $this->About->update($_GET['id'],[
                    'competence' => $_POST['competence']

                ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.editAboutCompetence",compact('title','lien','find'),"admin/find");
    }
    public function EditAboutPictures()
    {
        $title = 'Modifier vos photos';
    
        $find = $this->About->find($_GET['id']);
        
        
        $this->render("pages.admin.pages.views",compact('title','find'),"admin/find");
    }
    public function EditAboutPicture1()
    {
        $title = 'Modifier la photo';
    
        $find = $this->About->find($_GET['id']);
        
        
        $picture = $this->File->upload('picture','../App/Photo/About/');

            if(isset($picture) ):
                
                $this->About->update($_GET['id'],[
                    
                    
                    'picture1' =>"$picture"
                    
                    
                ]);
                header('Location:?src=editpictures&id='.$_GET['id']);
            endif;
    
        $this->render("pages.admin.pages.editPicture1",compact('title','find'),"admin/find");
    }
    public function EditAboutPicture2()
    {
        $title = 'Modifier la photo';
    
        $find = $this->About->find($_GET['id']);
        
        
        $picture = $this->File->upload('picture','../App/Photo/About/');

            if(isset($picture) ):
                
                $this->About->update($_GET['id'],[
                    
                    
                    'picture2' =>"$picture"
                    
                    
                ]);
                header('Location:?src=editpictures&id='.$_GET['id']);
            endif;
    
        $this->render("pages.admin.pages.editPicture2",compact('title','find'),"admin/find");
    }
    public function EditAboutPicture3()
    {
        $title = 'Modifier la photo';
    
        $find = $this->About->find($_GET['id']);
        
        
        $picture = $this->File->upload('picture','../App/Photo/About/');

            if(isset($picture) ):
                
                $this->About->update($_GET['id'],[
                    
                    
                    'picture3' =>"$picture"
                    
                    
                ]);
                header('Location:?src=editpictures&id='.$_GET['id']);
            endif;
    
        $this->render("pages.admin.pages.editPicture3",compact('title','find'),"admin/find");
    }
    
    public function EditAboutContent()
    {
        $title = 'Editer vos  contenus';
    
        $lien = '?src=factory';
        $find = $this->About->find($_GET['id']);
        
        if(!empty($_POST['content'])):
            if(isset($_POST['content'])):
                
                $this->About->update($_GET['id'],[
                    'content' => $_POST['content']

                ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.editAboutContent",compact('title','lien','find'),"admin/find");
    }
    public function editPersonne()
    {
        $find = $this->Club->find($_GET['id']);
        $type = 'text';
        $title='Editer le contenue de '.$find->name;
        $reset = 'tables';
        $titre = 'Titre de la personne';
    
        
        if(!empty($_POST['title']) AND !empty($_POST['content']) ):
            if(isset($_POST['title']) AND isset($_POST['content']) ):
                
                $this->Club->update($_GET['id'],[
                    
                    'title' => $_POST['title'],
                    'content' => $_POST['content']
                    
                    
                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.editPersonne",compact('title','find','type','reset','titre'),"admin/find");
    }
    public function editPersonneContent()
    {
        $find = $this->Club->find($_GET['id']);
        $type = 'hidden';
        $title='Editer le contenue de '.$find->name;
        $reset = 'personne&id='.$_GET['id'];
        $titre  = '';
    
        
        if(!empty($_POST['content']) ):
            if(isset($_POST['content']) ):
                
                $this->Club->update($_GET['id'],[
                    
                    
                    'content' => $_POST['content']
                    
                    
                ]);
                header('Location:?src=personne&id='.$_GET['id']);
            endif;
        endif;
        $this->render("pages.admin.pages.editPersonne",compact('title','find','type','reset','titre'),"admin/find");
    }
    public function editPersonnePicture()
    {
        $find = $this->Club->find($_GET['id']);
        $title='Editer le contenue de '.$find->name;
        $reset = 'personne&id='.$_GET['id'];
    
        $picture = $this->File->upload('picture','../App/Photo/ClubPicture/');

            if(isset($picture) ):
                
                $this->Club->update($_GET['id'],[
                    
                    
                    'picture' =>"$picture"
                    
                    
                ]);
                header('Location:?src=personne&id='.$_GET['id']);
            endif;
    
        $this->render("pages.admin.pages.editPicture",compact('title','find','reset'),"admin/find");
    }
    public function editPersonneTitle()
    {
        $find = $this->Club->find($_GET['id']);
        $title='Editer le contenue de '.$find->name;
        $reset = 'personne&id='.$_GET['id'];
    

        if(!empty($_POST['title']) ):
            if(isset($_POST['title']) ):
                
                $this->Club->update($_GET['id'],[
                    
                    
                    'title' => $_POST['title']
                    
                    
                ]);
                header('Location:?src=personne&id='.$_GET['id']);
            endif;
        endif;
    
        $this->render("pages.admin.pages.editTitle",compact('title','find','reset'),"admin/find");
    }


    public function editManager()
    {
        $find = $this->Manager->find($_GET['id']);
        $lien = '?src=factory';
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['number_phone']) AND !empty($_POST['sex']) AND !empty($_POST['nationality']) AND !empty($_POST['year_b'])):
            if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['number_phone']) AND isset($_POST['sex']) AND isset($_POST['nationality']) AND isset($_POST['year_b'])):
                
                $this->Manager->update($_GET['id'],[
                
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'number_phone' => $_POST['number_phone'],
                    'sex' => $_POST['sex'],
                    'nationality' => $_POST['nationality'],
                    'year_b' => $_POST['year_b']

                ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.editManager",compact('find','lien'),"admin/find2");
    }

    public function EditeManager()
    {
        $find = $this->Manager->find($_GET['id']);
        $fd = $this->Competition->all();
        foreach($fd as $fid){    $fi = $fid->ID; }

        $lien = '?src=_c_o_m_p_e_t_i_t_i_o_n_&id='.$fi;
        if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['number_phone']) AND !empty($_POST['sex']) AND !empty($_POST['nationality']) AND !empty($_POST['year_b'])):
            if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['number_phone']) AND isset($_POST['sex']) AND isset($_POST['nationality']) AND isset($_POST['year_b'])):
                
                $this->Manager->update($_GET['id'],[
                
                    'name' => $_POST['name'],
                    'email' => $_POST['email'],
                    'number_phone' => $_POST['number_phone'],
                    'sex' => $_POST['sex'],
                    'nationality' => $_POST['nationality'],
                    'year_b' => $_POST['year_b']

                ]);
                header('Location:?src=_c_o_m_p_e_t_i_t_i_o_n_&id='.$fi);
            endif;
        endif;
        $this->render("pages.admin.pages.editManager",compact('find','lien'),"admin/find2");
    }

    public function editCompet()
    {
        
        $level = $this->Level_competition->all();
        $manager = $this->Manager->all();
        $find = $this->Competition->find($_GET['id']);
        $title = 'Editer la  Competition '.$find->name_compet;
        
        if(!empty($_POST['name_compet']) 
         AND !empty($_POST['level']) 
          AND !empty($_POST['detail'])):

            if(isset($_POST['name_compet']) AND isset($_POST['level']) AND isset($_POST['detail'])):
                
                $res = $this->Competition->update($_GET['id'],[
                    'name_compet' => $_POST['name_compet'],
                    'level' => $_POST['level'],
                    'detail' => $_POST['detail']
                ]);
                header('Location:?src=tables');
            endif;
        endif;
        $this->render("pages.admin.pages.editCompet",compact('level','title','find','manager'),"admin/find2");
    }


    public function editNews()
    {
        $find = $this->News->find($_GET['id']);
        $title = 'Editer une nouvelle';
        if(!empty($_POST)):
        
            $res = $this->News->update($_GET['id'],[
                'title'=>$_POST['title'],
                'content'=>$_POST['content']
            ]);
            header('Location:?src=tables');
        endif;
        $this->render("pages.admin.pages.editNews",compact('find','title'),"admin/find");
    }
    public function editArticle()
    {
        $find = $this->Article->find($_GET['id']);
        $title = 'Editer un Article';
        if(!empty($_POST)):
        
            $res = $this->Article->update($_GET['id'],[
                'title'=>$_POST['title'],
                'content'=>$_POST['content']
            ]);
            header('Location:?src=tables');
        endif;
        $this->render("pages.admin.pages.editNews",compact('find','title'),"admin/find2");
    }
    public function editCategory_model()
    {
        $find = $this->Category_model->find($_GET['id']);
        if(!empty($_POST)):
        
            $res = $this->Category_model->update($_GET['id'],[
                'title'=>$_POST['category']
                
            ]);
            header('Location:?src=tables');
        endif;
        $this->render("pages.admin.pages.editCategory_model",compact('find'),"admin/find2");
    }

    public function editNotice()
    {
        $find = $this->Notice->find($_GET['id']);
        $title = 'Editer une Annonce';
        if(!empty($_POST)):
        
            $res = $this->Notice->update($_GET['id'],[
                'title'=>$_POST['title'],
                'content'=>$_POST['content']
            ]);
            header('Location:?src=roxanne');
        endif;
        $this->render("pages.admin.pages.editNews",compact('find','title'),"admin/find");
    }

    public function editLevel()
    {
        $find = $this->Level_competition->find($_GET['id']);
        if(!empty($_POST['title'])):
            if(isset($_POST['title'])):
                $this->Level_competition->update($_GET['id'], [ 'title' => $_POST['title'] ]);
                header('Location:?src=factory');
            endif;
        endif;
        $this->render("pages.admin.pages.editLevel",compact('find'),"admin/find2");
    }

    public function editModel()
    {
        $category = $this->Category_model->all();
        
        if(!empty($_POST)):
        
            $res = $this->Model->update($_GET['id'],[
                'category_id'=>$_POST['category']
            ]);
            header('Location:?src=tables');
        endif;
        $this->render("pages.admin.pages.editModel",compact('category'),"admin/find");
    }


    public function deleteNews()
    {
        if(!empty($_POST))
        {
             $this->News->delete($_POST['id']);
             $this->News->deleteComment($_POST['id']);
             header('Location:?src=tables');
        }
    }
    public function deleteArticle()
    {
        if(!empty($_POST))
        {
             $this->Article->delete($_POST['id']);
            
             header('Location:?src=tables');
        }
    }
    public function deleteNotice()
    {
        if(!empty($_POST))
        {
             $this->Notice->delete($_POST['id']);
             header('Location:?src=roxanne');
        }
    }
    public function deletemanager()
    {
        if(!empty($_POST))
        {
             $this->Manager->delete($_POST['id']);
             header('Location:?src=factory');
        }
    }
    public function deleteModel()
    {
        if(!empty($_POST))
        {
             $this->Model->delete($_POST['id']);
             header('Location:?src=tables');
        }
    }
    public function deletePersonne()
    {
        if(!empty($_POST))
        {
             $this->Club->delete($_POST['id']);
             header('Location:?src=tables');
        }
    }
    public function deleteCompet()
    {
        if(!empty($_POST))
        {
             $this->Competition->delete($_POST['id']);
             header('Location:?src=tables');
        }
    }


    public function noticeFind()
    {
        $findNotice = $this->Notice->find($_GET['id']);
    $this->render("pages.admin.pages.finds.notice",compact('findNotice'),"admin/find");
    }
    public function newsFind()
    {
        $findNews = $this->News->find($_GET['id']);
        $commentaire = $this->Comment->find($_GET['id']);
    $this->render("pages.admin.pages.finds.news",compact('findNews','commentaire'),"admin/find");
    }
    public function modelFind()
    {
        $findModel = $this->Model->find($_GET['id']);
    $this->render("pages.admin.pages.finds.model",compact('findModel'),"admin/find");
    }
    public function ArticleFind()
    {
        $findArticle = $this->Article->find($_GET['id']);
        $commentaire = $this->Comment_article->find($_GET['id']);
    $this->render("pages.admin.pages.finds.article",compact('findArticle','commentaire'),"admin/find");
    }
    public function CompetitionFind()
    {
        $find = $this->Competition->find($_GET['id']);
        $annees =   (int)date('Y') - (int)$find->year_b;
        $this->render('pages.admin.pages.finds.compet',compact('find','annees'),'admin/find');
    }
    public function PersonFind()
    {
        $find = $this->Club->find($_GET['id']);
        $this->render('pages.admin.pages.finds.personne',compact('find'),'admin/find');
    }
    public function addPictureModel()
    {
        $title = 'Ajouter des photos';
        $find = $this->Model->findModel($_GET['id']);
        $picture1 = $this->File->upload('picture1','../App/Photo/ModelPicture/');
        $picture20 = $this->File->upload('picture2','../App/Photo/ModelPicture/');
        $picture3 = $this->File->upload('picture3','../App/Photo/ModelPicture/');
        $picture4 = $this->File->upload('picture4','../App/Photo/ModelPicture/');
        $picture5 = $this->File->upload('picture5','../App/Photo/ModelPicture/');
        $picture6 = $this->File->upload('picture6','../App/Photo/ModelPicture/');
        $picture = $find->picture2;
        if(strlen($picture) === 0)
        {
            if(isset($picture1) AND isset($picture20) AND isset($picture3) AND isset($picture4) AND isset($picture5) AND isset($picture6))
            {
                $this->Model->update($_GET['id'],[
                    'picture2' => "DEBUT <a href='../App/Photo/ModelPicture/$picture1' class='at'  data-lightbox='mygellary'>
                        <img src='../App/Photo/ModelPicture/$picture1' class='img-responsive'>
                     </a> FIN
                     DEBUT <a href='../App/Photo/ModelPicture/$picture20' class='at'  data-lightbox='mygellary'>
                     <img src='../App/Photo/ModelPicture/$picture20' class='img-responsive'>
                  </a> FIN
                  DEBUT <a href='../App/Photo/ModelPicture/$picture3' class='at'  data-lightbox='mygellary'>
                  <img src='../App/Photo/ModelPicture/$picture3' class='img-responsive'>
               </a> FIN 
               DEBUT <a href='../App/Photo/ModelPicture/$picture4' class='at'  data-lightbox='mygellary'>
               <img src='../App/Photo/ModelPicture/$picture4' class='img-responsive'>
            </a> FIN 
            DEBUT <a href='../App/Photo/ModelPicture/$picture5' class='at'  data-lightbox='mygellary'>
            <img src='../App/Photo/ModelPicture/$picture5' class='img-responsive'>
         </a> FIN
             DEBUT <a href='../App/Photo/ModelPicture/$picture6' class='at'  data-lightbox='mygellary'>
                    <img src='../App/Photo/ModelPicture/$picture6' class='img-responsive'>
                 </a> FIN
                    "
                ]);
                header('Location:?src=model&id='.$find->id);
            }
        }else{
                if(isset($picture1) AND isset($picture20) AND isset($picture3) AND isset($picture4) AND isset($picture5) AND isset($picture6))
                {
                    $this->Model->update($_GET['id'],[
                        'picture2' => "$picture DEBUT <a href='../App/Photo/ModelPicture/$picture1' class='at'  data-lightbox='mygellary'>
                        <img src='../App/Photo/ModelPicture/$picture1' class='img-responsive'>
                     </a> FIN
                     DEBUT <a href='../App/Photo/ModelPicture/$picture20' class='at'  data-lightbox='mygellary'>
                     <img src='../App/Photo/ModelPicture/$picture20' class='img-responsive'>
                  </a> FIN
                  DEBUT <a href='../App/Photo/ModelPicture/$picture3' class='at'  data-lightbox='mygellary'>
                  <img src='../App/Photo/ModelPicture/$picture3' class='img-responsive'>
               </a> FIN 
               DEBUT <a href='../App/Photo/ModelPicture/$picture4' class='at'  data-lightbox='mygellary'>
               <img src='../App/Photo/ModelPicture/$picture4' class='img-responsive'>
            </a> FIN 
            DEBUT <a href='../App/Photo/ModelPicture/$picture5' class='at'  data-lightbox='mygellary'>
            <img src='../App/Photo/ModelPicture/$picture5' class='img-responsive'>
         </a> FIN
             DEBUT <a href='../App/Photo/ModelPicture/$picture6' class='at'  data-lightbox='mygellary'>
                    <img src='../App/Photo/ModelPicture/$picture6' class='img-responsive'>
                 </a> FIN
                    "
                    ]);
                    header('Location:?src=model&id='.$_GET['id']);
                }
        }
        $this->render("pages.admin.pages.update.modelPicture",compact('title'),"admin/find2");
    }
    public function addPictureCompetition()
    {
        $title = 'Ajouter des photos';
        $find = $this->Competition->findCompetition($_GET['id']);
        $picture1 = $this->File->upload('picture1','../App/Photo/CompetitionPicture/');
        $picture20 = $this->File->upload('picture2','../App/Photo/CompetitionPicture/');
        $picture3 = $this->File->upload('picture3','../App/Photo/CompetitionPicture/');
        $picture4 = $this->File->upload('picture4','../App/Photo/CompetitionPicture/');
        $picture5 = $this->File->upload('picture5','../App/Photo/CompetitionPicture/');
        $picture6 = $this->File->upload('picture6','../App/Photo/CompetitionPicture/');
        $picture = $find->picture2;
        if(strlen($picture) === 0)
        {
            if(isset($picture1) AND isset($picture20) AND isset($picture3) AND isset($picture4) AND isset($picture5) AND isset($picture6))
            {
                $this->Competition->update($_GET['id'],[
                    'picture2' => ",$picture1? ,$picture20? ,$picture3? ,$picture4? ,$picture5? ,$picture6? "
                ]);
                header('Location:?src=_c_o_m_p_e_t_i_t_i_o_n_&id='.$find->id);
            }
        }else{
                if(isset($picture1) AND isset($picture20) AND isset($picture3) AND isset($picture4) AND isset($picture5) AND isset($picture6))
                {
                    $this->Competition->update($_GET['id'],[
                        'picture2' => "$picture ,$picture1? ,$picture20?  ,$picture3? ,$picture4? ,$picture5? ,$picture6? "
                    ]);
                    header('Location:?src=_c_o_m_p_e_t_i_t_i_o_n_&id='.$_GET['id']);
                }
        }
        $this->render("pages.admin.pages.update.competitionPicture",compact('title'),"admin/find2");
    }


    public function factory()
    {
        $manager =  $this->Manager->all();
        $level =  $this->Level_competition->all();
        $abouts = $this->About->all();
        $this->render("pages.admin.pages.billing",compact('manager','level','abouts'),"admin/default");
    }

}