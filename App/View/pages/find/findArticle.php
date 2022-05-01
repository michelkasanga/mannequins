<?php $title;?>
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
                            <img class="img-fluid" id="img-fluid" src="../App/Photo/ArticlePicture/<?= $findArticle->picture;?>" alt="<?= $findArticle->picture;?>" >
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
                                <small><?= App\Model\php\Time::timing($findArticle->date,$findArticle->time);?></small>
                                </div>
                            </div>
                        </div>
                    
                        <div class="card-body pt-4 p-3">
                            <h6 class=" text-body text-xs font-weight-bolder mb-3">
                                <p>
                                <?= $findArticle->content;?>
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
                    
                        <div class="d-flex text-sm flex-column" >
                        
                                <h5 class="mb-3 text-sm">insert <?= $nom; ?></h5>
                            
                                <div class="card-body">

                                    <form method="post" action="" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <input type="<?= $type; ?>" class="form-control form-control-lg" name="name" placeholder="votre nom" required>
                                        </div>
                                        
                                        <div class="mb-3">
                                            
                                                <textarea type="text" rows="" cols="" value="comment" id="comment" name="comment" class="form-control form-control-lg" placeholder="Contenus"  required>
                                            </textarea>
                                            
                                            
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Ajouter</button>
                                        </div>
                                    </form>


                                </div>
                        </div>
                    
                    
                    

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
                            <i><?= ' '.App\Model\php\Time::timing($commentaires->t_date,$commentaires->temp_time);?></i>
                        </small>
                    </div>

                    <div class=" text-xs" id="size">
                        <p>
                        <?= $commentaires->comment;?>
                        </p> 
                        
                    </div>
                    
                
                  </div>
                 
                
                    </li>
                    <?php endforeach;?>
                    
                </ul>
                </div>
            </div>
        </div>
      </div>
</div>