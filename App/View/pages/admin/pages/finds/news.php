
<!-- article -->
<?php $title= $findNews->title;?>
<<?php $title;?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
            
              <h6 class="mb-0"><?= $title;?></h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                  
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  
                    <div class="d-flex text-sm flex-column" >
                        <div class="ms-auto text-end"  >  

                        </div>
                        <div class="post-thumb" >
                            <img class="img-fluid" id="img-fluid" src="../App/Photo/NewsPicture/<?= $findNews->picture;?>" alt="<?= $findNews->picture;?>" >
                        </div>
                    </div>
                </li>

                
                    <div class="card h-100 mb-4">
                        <div class="card-header pb-0 px-3">
                            <div class="row">
                                <div class="col-md-6">
                                <h6 class="mb-0">Detail</h6>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end align-items-center">
                                <i class="far fa-calendar-alt me-2"></i>
                                <small><?= App\Model\php\Time::timing($findNews->date,$findNews->time);?></small>
                                </div>
                            </div>
                        </div>
                    
                        <div class="card-body pt-4 p-3">
                            <h6 class=" text-body text-xs font-weight-bolder mb-3">
                                <p>
                                <?= $findNews->content;?>
                                </p>
                            </h6>
                        
                        </div>
                    </div>
                
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body pt-4 p-3">
                <ul class="list-group">
                    <!-- insert un commentaire -->
                    
                      
                    
                    
                    

                    <!-- commentaire -->
                    <div class="col-md-6">
                                <h6 class="mb-0">commentaires</h6>
                                </div>
                    <?php foreach($commentaire as $commentaires):?>
                
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" style="padding: 1px;">
                  <div class="d-flex text-sm flex-column" >
                  
                  
                    <div class=" text-xs" id="size"> 
                        <span class="text-dark font-weight-bold ms-sm-2" id="size">
                            <?= $commentaires->name.' ' ;?>
                        </span>
                        <small>
                            <i><?= ' '.App\Model\php\Time::timing($commentaires->temp_date,$commentaires->temp);?></i>
                        </small>
                    </div>

                    <div class=" text-xs" id="size">
                        <p>
                        <?= $commentaires->comment;?>
                        </p> 
                        
                    </div>
                    
                
                  </div>
                      
                  <div class="ms-auto text-end">
                    <form action="?src=news&id=<?= $commentaires->news_id;?>" method="post">
                          <input type="hidden" name="id"   value="<?=$commentaires->Id;?>">
                          <button href="?src=news&id=<?=$commentaires->Id;?>" class="icon icon-bin" style="border: none; background:none; color:red;"></button>
                  
                        </form>
                        <?php 
                    if(!empty($_POST))
                    {
                        $this->Comment->delete($_POST['id']);  
                    }
                    
                    ?>
                  </div>
                
                    </li>
                    <?php endforeach;?>
                    
                </ul>
                </div>
            </div>
        </div>
      </div>
</div>