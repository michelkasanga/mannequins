<?php 
namespace App\Model\Table;

class UsersPictureTable extends Table
{
    protected $table = 'userspicture';

    public function findPicture($id)
    {
        return $this->query("SELECT 
        p.id,p.id_user,p.picture, u.id, u.username,u.firstname,u.secondname,u.password, u.mail,u.resposability,u.adress,u.country,u.city,u.postalCode
        FROM userspicture as p
            JOIN users as u
            ON p.id_user=u.id
            WHERE p.id_user=?
            ORDER BY p.id DESC LIMIT 0,1 ", [$id]);
    }
}