<?php
namespace App\Model\Table;

class FileTable{

  public $name;
   

  public function upload($name,$road)
  { 
      if (!empty($_FILES[$name])) 
      {
        if(isset($_FILES[$name]))
        {
          $nameFile = $_FILES[$name]['name'];
          $typeFile = $_FILES[$name]['type'];
          $sizeFile = $_FILES[$name]['size'];
          $tmpFile = $_FILES[$name]['tmp_name'];
          $errorFile = $_FILES[$name]['error'];
      
          $extensions  = ['png','jpeg','gif','jpg','JPG','PNG','JPEG','GIF'];
          $type = ['image/png','image/jpeg','image/gif','image/jpg'];
          
          $extension = explode('.', $nameFile);
          $max_size = 1000000;
  
          
            if(in_array($typeFile,$type))
            {
                if (count($extension) <= 2 && in_array(strtolower(end($extension)), $extensions)) 
              {
                  if ($sizeFile <= $max_size && $errorFile == 0) 
                  {
                    $chemin = uniqid().'.'.strtolower(end($extension));
                      if (move_uploaded_file($tmpFile, $road.$chemin)) 
                      {
                          return $this->name = $chemin;
                      }
                  }
              }
            }
        }
      }
  }
 
  
}