<?php $title =  $find->name;?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
            
              <h6 class="mb-0"><?= $find->name;?></h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex text-sm flex-column" >
                  
                  
                    <div class=" text-xs" id="size"> <span class="text-dark font-weight-bold ms-sm-2" id="size"><?= $find->title;?></span></div>
                    
                  </div>
                  <div class="ms-auto text-end">
                  <a   href="?src=editPersonneTitle&id=<?= $find->id;?> ">
                      <span class=" text-danger text-gradient font-weight-bold  "><span class="icon icon-pencil "></span></span>
                  </a>
                  </div>
                 
                </li>
                
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  
                  <div class="d-flex text-sm flex-column" >
                  <div class="ms-auto text-end"  >
                  <a    href="?src=editPersonnePicture&id=<?= $find->id;?>">
                      <span class=" text-danger text-gradient font-weight-bold  "><span class="icon icon-pencil "></span></span>
                  </a>
                  
                 
                  </div>
                  
                    <div class="post-thumb" >
                  
                            <img class="img-fluid" id="img-fluid" src="../App/Photo/ClubPicture/<?= $find->picture;?>" alt="<?= $find->picture;?>" >
                    </div>
                 
                  </div>
                 
                
                
                 
                </li>

                
                
              </ul>
            </div>
          </div>
        </div>

      

        <div class="col-md-5 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Detail</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                  <i class="far fa-calendar-alt me-2"></i>
                  <small><?=  date_format(date_create($find->date),'d M Y  H:i');?></small>
                </div>
                <div class="ms-auto text-end"  >
                  <a    href="?src=editPersonneContent&id=<?= $find->id;?>">
                      <span class=" text-danger text-gradient font-weight-bold  "><span class="icon icon-pencil "></span></span>
                  </a>
                  
                 
                  </div>
              </div>
            </div>
          
            <div class="card-body pt-4 p-3">
              <h6 class=" text-body text-xs font-weight-bolder mb-3">
                  <p>
                  <?= $find->content;?>
                  </p>
              </h6>
             
            </div>
          </div>
        </div>
      </div>
</div>