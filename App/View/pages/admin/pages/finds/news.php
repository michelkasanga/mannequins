
<!-- article -->
<?php $title= $findNews->title;?>
<div class="row" style="margin-top: 20px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class=" p-0">
                <div class="col-12">
                  <div class="col-12" id="col" >
                    <img src="../App/Photo/NewsPicture/<?=$findNews->picture;?>" alt="<?=$findNews->picture;?>" class="align-middle text-center"  id="photo">
                  </div>
                    <h2 class="align-middle text-center" style="margin-top: 50px;"><?= $findNews->title;?></h2>
                    <p class="align-middle text-center"><small ><?= $findNews->date;?></small></p>
                    <p class="align-middle text-center" style="margin-top: 60px;"><?= $findNews->content;?>
                    </p>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end article -->


