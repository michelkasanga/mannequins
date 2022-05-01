    <?php $title = "A propos de moi";?>
        <div class="container-fluid py-4">

<?php foreach($abouts as $about):?>
    <div class="row " >
    
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
            
              <h6 class="mb-0" style="text-transform:uppercase; font-family:cursive;"><?= $about->title;?></h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex text-sm flex-column" >
                  <h5 class="mb-3 text-sm">Competences</h5>
                    <?= $about->competence;?>
                  </div>
                 
                
                </li>
                
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  
                  <div class="d-flex text-sm flex-column" >
                    
                    <div class="col-xl-12 col-lg-12 col-md-12lex d-f">
                      <div  class="post-thumb">
                          <div class="" >
                        <img class="img-fluid" id="img-fluid" src="../App/Photo/About/<?= $about->picture1;?>" alt="<?= $about->picture1;?>" >
                      </div>
                      </div>
                    
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 d-flex" style="width: 100%; padding-top:5px;">
                    <div >
                      <div class="post-thumb "  style="width:100%; height:100%;padding:2px;">
                        <img class="img-fluid" id="img-fluid" src="../App/Photo/About/<?= $about->picture2;?>" alt="<?= $about->picture2;?>" style="width: 100%;  height: 100%;object-fit: cover;  box-sizing: border-box ;" >
                      </div>
                    </div>
                      <div >
                    
                      <div class="post-thumb " style="width: 100%; height:100%; padding:2px;"  >
                        <img class="img-fluid" id="img-fluid" src="../App/Photo/About/<?= $about->picture3;?>" alt="<?= $about->picture3;?>" style="width: 100%;  height: 100%;object-fit: cover;  box-sizing: border-box ;" >
                      </div>
                    </div>
                    </div>
                
                  </div>
                
                </li>



                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  
                  <div class="d-flex text-sm flex-column" >
                
                  </div>
                  <div class="post-thumb" >
                  
                
                
                
                
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
                  <h6 class="mb-0">A propos de moi</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                  <i class="far fa-calendar-alt me-2"></i>
                  <small><??></small>
                </div>
              </div>
            </div>
          
            <div class="card-body pt-4 p-3">
              <h6 class=" text-body text-xs font-weight-bolder mb-3">
                  <p>
                  <?= $about->content;?>
                  </p>
              </h6>
            
            </div>
          </div>
        </div>
    </div>

<?php endforeach; ?>


    </div>