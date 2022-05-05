<?php
namespace App;
use App\Model\DataBase\MysqlDatabase;
use App\Autoloader;


class App 
{
    private static $db_instance;
    private static $_instance;

    public static function getInstance()
     {

         if(is_null(self::$_instance))
         {
             self::$_instance = new App();
         }
         return self::$_instance;

     } 

    public static function getDb()
    {
        if(is_null(self::$db_instance))
        {
            self::$db_instance = new MysqlDatabase('localhost', 'draya', 'root', '');
        }
        return self::$db_instance;
    }

    public static function load()
    {
        session_start();
        require ROOT.'/App/Autoloader.php';
         Autoloader::register();
    


    }

    public static function getTable($name)
    {
        $class_name = '\\App\\Model\\Table\\'.ucfirst($name).'Table';
        return new $class_name(static::getDb());
    }
    public function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    public function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('page introuvable');
    }
}