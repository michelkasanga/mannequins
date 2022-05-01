<?php 
namespace App\Model\Table;
use UI\Controls\Tab;

class EssaieTable extends Table
{
    protected $table = 'essaie';

    public function fileLoad()
    {
        return $this->query('SELECT * FROM '.$this->table.' ORDER BY id DESC LIMIT 0,1');
    }
}