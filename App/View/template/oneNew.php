<?php $title;?>
<img src="../App/Photo/NewsPicture/<?=$onenew->picture;?>" style="width: 100%;height:auto"/>
<?=" <br><small>$time</small><br><p>$onenew->content</p>";?>
 
    

     <form action="" method="POST"  enctype="multipart/form-data">
         <p><h1><?=$nom;?></h1></p>
        <input type="<?=$type;?>" name="name" id="">
        <input type="text" name="comment" id="">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php 
        foreach($commentaire as $all):
            $time_to_comment =  \App\Model\php\Time::timing($all->temp_date,$all->temp);
            echo "<h3>$all->name</h3><small>$time_to_comment</small><p>$all->comment</p><br><br>";
        endforeach;
    ?>