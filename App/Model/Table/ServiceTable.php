<?php 
namespace App\Model\Table;

class ServiceTable extends Table
{
    protected $table = 'service';

    public function allDESC()
    {
        return $this->query(" SELECT 
            s.id Id, s.title titre, s.idIcon, s.detail, s.date, i.id, i.title  icon, i.name
            FROM service as s 
            JOIN icons as i 
            ON s.idIcon = i.id
            ORDER BY s.id DESC 
        ");
    }


}