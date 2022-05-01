<?php 
namespace App\Model\Table;

class AboutTable extends Table
{
    protected $table = 'about';

    
    public function fileLoad()
    {
        return $this->query('SELECT * FROM '.$this->table.' ORDER BY id DESC LIMIT 0,1');
    }
}