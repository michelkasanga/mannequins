<?php 
namespace App\Model\Table;

class  ModelTable extends Table
{
    protected $table = 'model';
    
    public function all(){
        return $this->query("SELECT  
        m.id, m.picture,m.picture2, m.date, m.time, m.category_id, c.id as ID, c.title FROM model as m 
         JOIN category_model as c
         ON m.category_id = c.id
         ORDER BY m.id DESC
         ");
    }
    public function find($id)
    {
        return $this->query("SELECT  
        m.id ID, m.picture,m.picture2, m.date, m.time, m.category_id, c.id , c.title FROM model as m 
         JOIN category_model as c
         ON m.category_id = c.id
         WHERE m.id=?
         ",[$id],true
         );
    }
    
    public function findModel($id)
    {
        return $this->query('SELECT * FROM '. $this->table.' WHERE id =?',[$id],true);
    }
}