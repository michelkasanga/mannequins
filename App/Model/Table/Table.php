<?php 
namespace App\Model\Table;


class Table
{
    protected $db,
              $table;


    private function _instancedb()
    {
        $instanceapp = new \app\app();
        $instancedb = $instanceapp->getdb();
        return $this->db=$instancedb;
    }


    public function query($statement,$attribute=null,$one=false)
    {
        return $this->_instancedb()->request($statement,$attribute,$one);
    }

    public function find($id)
    {
        return $this->query('SELECT * FROM '. $this->table.' WHERE id =?',[$id],true);
    }
    
    public function pourcentage($annees)
    {
        return $this->query('SELECT * FROM '.$this->table.' WHERE date(\'m\') = ?',[$annees]);
    }

    public function all()
    {
        return $this->query('select * from ' .$this->table);
    }

    public function delete($id)
    {
        return $this->query('DELETE  FROM '. $this->table.' WHERE id=?',[$id],true);
    }

    public function create($fields)
    {
        $sql_parts=[];
        $attributes =[];

        foreach($fields as $k=>$v)
        {
            $sql_parts[] = "$k = ?";
            $attributes[]=$v;
        }

        $sql_part  = implode(',', $sql_parts);
        return $this->query("INSERT  INTO {$this->table} SET $sql_part ",$attributes,true); 
    }

    public function update($id,$fields)
    {
        $sql_parts=[];
        $attributes =[];

        foreach($fields as $k=>$v)
        {
            $sql_parts[] = "$k = ?";
            $attributes[]=$v;
   }

        $attributes[] = $id;
        $sql_part  = implode(',', $sql_parts);
        return $this->query("UPDATE {$this->table} SET $sql_part WHERE id=?",$attributes,true); 
    }
    
     
 
  
/*  $insert=$bdd->prepare('INSERT INTO Nos_service (photo4,titre4,textarea4) VALUES(?,?,?)');
            
$insert->execute(array($photo,$titre,$textearea));

*/


}
