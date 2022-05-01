<?php
namespace App;
use App\Model\DataBase\MysqlDatabase;
use App\Autoloader;


class App 
{
    private static $db_instance;

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
}