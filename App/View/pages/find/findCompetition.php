<?php $title =  $find->name_compet;?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
            
              <h6 class="mb-0"><?= $find->name_compet;?></h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex text-sm flex-column" >
                  
                    <h5 class="mb-3 text-sm">Info manager</h5>
                  
                    <div class=" text-xs" id="size"> Nom: <span class="text-dark font-weight-bold ms-sm-2" id="size"><?= $find->name;?></span></div>
                    <div class=" text-xs" id="size">Email: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $find->email;?></span></div>
                    <div class="text-xs" id="size">Tel: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $find->number_phone;?></span></div>
                    <div class="text-xs" id="size">Nationalité: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $find->nationality;?></span></div>
                    <div class="text-xs" id="size">Sexe: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $find->sex;?></span></div>
                    <div class="text-xs" id="size">Age: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $annees;?></span></div>
                
                  </div>
                 
                </li>
                
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  
                  <div class="d-flex text-sm flex-column" >
                  <div class="ms-auto text-end"  >
                  <a  class="btn btn-success" id="btn"  href=" <?= $find->link_compet;?> ">
                      <span class=" text-danger text-gradient font-weight-bold  "><span class="icon icon-link "></span></span>
                   
                  </a>
                        
                  </div>
                    <span class="mb-2 text-xs">Niveau Atteint: <span class="font-weight-bold ms-sm-2" style="color: <?= $find->color;?>;"><?= $find->title;?></span></span>
                    <h2  style="color:gold;"> <?= $find->stars;?> </h2>
                  
                  
                    <div class="post-thumb" >
                  
                            <img class="img-fluid" id="img-fluid" src="../App/Photo/CompetitionPicture/<?= $find->picture;?>" alt="<?= $find->picture;?>" >
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
                  <small><?=  date_format(date_create($find->dt),'d M Y  H:i:s');?></small>
                </div>
              </div>
            </div>
          
            <div class="card-body pt-4 p-3">
              <h6 class=" text-body text-xs font-weight-bolder mb-3">
                  <p>
                  <?= $find->detail;?>
                  </p>
              </h6>
             
            </div>
          </div>
        </div>
    </div>

      <div class="row">
        <div class="col-md-12 mt-4">
          <a href="?src=competition"  class="btn btn-primary">voir plus de competition</a>
        </div>
      </div>
</div>