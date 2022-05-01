<?php
 use App\App; use App\Controller\LoadController;
define('ROOT',dirname(__DIR__));
require ROOT.'/App/App.php';
App::load();
$app = new App();

if(isset($_GET['src']))
{
    $src=$_GET['src'];
}else{
    $src='home';
}


    if($src === 'home')
    {
        $controller = new LoadController();
        $controller->index();
    }
    elseif($src==='pages.one')
    {
        $controller = new LoadController();
        $controller->oneNotice();
    }
    elseif($src==='file')
    {
        require ROOT.'/App/View/pages/file.php';

    }
    elseif($src==='pages.oneNew')
    {
        $controller = new LoadController();
        $controller->oneNew();
    }
    elseif($src==='pages.oneModel')
    {
        $controller = new LoadController();
        $controller->oneModel();
    }
    elseif($src==='findCompetition')
    {
        $controller = new LoadController();
        $controller->findCompetition();
    }
    elseif($src==='9f3642c94c2f071704f2ac2ad3a0b1891634b9b9')
    {
        $controller = new LoadController();
        $controller->About();
    }
    elseif($src==='34d2405248f96f68a53d744975dace088147607a')
    {
        $controller = new LoadController();
        $controller->ArticleFind();
    }
    

