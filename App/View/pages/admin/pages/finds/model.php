<?php $title= $findModel->title.'   ';?> <p class="align-middle text-center"> <?php $title= '   ';?><small >  <?php $title .= '  - '.$findModel->date;?></small></p>
<div class="row" style="margin-top: 20px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class=" p-0">
                <div class="col-12">
                  <div class="col-12" id="col" >
                    <img src="../App/Photo/ModelPicture/<?=$findModel->picture;?>" alt="<?=$findModel->picture;?>" class="align-middle text-center"  id="photo">
                  </div>
                    
                    <p class="align-middle text-center"><small ><?= $findModel->date;?></small></p>
                    

                    
                </div>
                <div>
                  <?=  str_replace([',','?'],[ '<img style="width:100px; height:100px;" src="../App/Photo/ModelPicture/','">'],$findModel->picture2);?>
                </div>
                <div>
                  <a href="?src=add_picture_model&id=<?= $findModel->ID;?>" class="btn btn-primary"> ajouter les photo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- end article -->


