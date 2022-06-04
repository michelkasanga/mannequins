<?php $title='Tables';?>
<div class="container-fluid py-4">

<!-- service -->
<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table Service</h6><span class="btn btn-primary" > <a href="?src=addService"> AJOUTER</a></span>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="align-middle text-center">Id</th>
                      <th class="align-middle text-center">Icon</th>
                      <th class="align-middle text-center">Service</th>
                      <th class="align-middle text-center">Date Ajout</th>
                      <th class="align-middle text-center">Action</th>

                    </tr>
                  </thead>

                  <tbody>
                  <?php foreach($services as $service):?>
                    <tr>
                      <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold  "><?=$service->Id;?></span>
                      </td>
                      <td class="align-middle text-center">
                          <div>
                            <span class="text-secondary text-lg font-weight-bold icon <?= $service->icon; ?>">  </span>
                          </div>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$service->titre?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=  date_format(date_create($service->date),'d M Y  H:i');?></span>
                      </td>


                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">
                        <a href="?src=editService&id=<?=$service->Id;?>" >
                        <div class="btn btn-warning">
                            modif
                          </div>
                        </a>
                      
                        <form action="?src=deleteService" method="post" style="display: inline;">
                          <input type="hidden" name="id"   value="<?=$service->Id;?>">
                          <button href="?src=deleteService&id=<?=$service->Id;?>" class="btn btn-danger">delete</button>
                        </form>
                      
                        </span>
                      </td>
                      <td>
                        <a class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" href="?src=Service&id=<?=$service->id;?>">
                          <i class="ni ni-bold-right" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end service -->
    <!-- tables news -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table News</h6><span class="btn btn-primary" > <a href="?src=addNews"> AJOUTER</a></span>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="align-middle text-center">Id</th>
                      <th class="align-middle text-left">Photo</th>
                      <th class="align-middle text-center">Titre</th>
                      <th class="align-middle text-center">Date Ajout</th>
                      <th class="align-middle text-center">Nombre commentaire</th>
                      <th class="align-middle text-center">Action</th>

                    </tr>
                  </thead>

                  <tbody>
                  <?php foreach($news as $new):?>
                    <tr>
                      <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?=$new->id;?></span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../App/Photo/NewsPicture/<?=$new->picture;?>" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$new->title?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=  date_format(date_create($new->date),'d M Y  H:i:s');?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=count($this->Comment->find($new->id));?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">
                        <a href="?src=editNews&id=<?=$new->id;?>" >
                        <div class="btn btn-warning">
                            modif
                          </div>
                        </a>
                      
                        <form action="?src=deleteNews" method="post" style="display: inline;">
                          <input type="hidden" name="id"   value="<?=$new->id;?>">
                          <button href="?src=deleteNews&id=<?=$new->id;?>" class="btn btn-danger">delete</button>
                        </form>
                      
                        </span>
                      </td>
                      <td>
                        <a class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" href="?src=news&id=<?=$new->id;?>">
                          <i class="ni ni-bold-right" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end table news -->

 <!-- model -->
    <div class="row">
        <div class="col-md-8 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Table model</h6>
            </div>
            <div class="col-md-10 d-flex justify-content-end align-items-center">
                
                  <small><a href="?src=addModel" class="btn btn-primary">Ajouter</a></small>
                </div>
            <div class="card-body pt-4 p-3">
            
              <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                      <th class="align-middle text-center">Id</th>
                        <th class="align-middle text-left">Couverture</th>
                        <th class="align-middle text-center">Categorie</th>
                        <th class="align-middle text-center">Date Ajout</th>
                        <th class="align-middle text-center">Action</th>

                      </tr>
                    </thead>

                    <tbody>
                    
                    <?php foreach($models as $model):?>
                      <tr>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?=$model->id;?></span>
                        </td>
                        <td>
                          <div class="align-middle d-flex px-2 py-1">
                            <div>
                              <img src="../App/Photo/ModelPicture/<?=$model->picture;?>" class="avatar avatar-sm me-3" alt="user2">
                            </div>
                          </div>
                        </td>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?=$model->title;?></span>
                        </td>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?=$model->date;?></span>
                        </td>

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">
                          <a href="?src=editModel&id=<?=$model->id;?>" >
                          <div class="btn btn-warning">
                              modif
                            </div>
                          </a>
                        
                          <form action="?src=deleteModel" method="post" style="display: inline;">
                            <input type="hidden" name="id"   value="<?=$model->id;?>">
                            <button href="?src=deleteModel&id=<?=$model->id;?>" class="btn btn-danger">supp</button>
                          </form>
                        
                          </span>
                        </td>
                        <td>
                          <a class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto" href="?src=model&id=<?=$model->id;?>">
                            <i class="ni ni-bold-right" aria-hidden="true"></i>
                          </a>
                        </td>
                  
                      </tr>
                    <?php endforeach;?>

                    </tbody>
                  </table>
                </div>  

              </div>
          </div>
        </div>



        <div class="col-md-4 mt-4">
          <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
              <div class="row">
                <div class="col-md-6">
                  <h6 class="mb-0">Categories Model</h6>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                  <i class="far fa-calendar-alt me-2"></i>
                  <small><a href="?src=addCategory_model" class="btn btn-primary">Ajouter</a></small>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 p-3">
            <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                      <th class="align-middle text-center">Id</th>
                        <th class="align-middle text-center">Categorie</th>
                        <th class="align-middle text-center">Action</th>

                      </tr>
                    </thead>

                    <tbody>
                    
                    <?php foreach($category as $categories):?>
                      <tr>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold"><?=$categories->id;?></span>
                        </td>
                    

                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?=$categories->title;?></span>
                        </td>

    
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">
                          <a href="?src=editCategory_model&id=<?=$categories->id;?>" >
                          <div class="btn btn-warning">
                              modif
                            </div>
                          </a>
<!--                         
                          <form action="?src=deleteModel&id=<?php // $_GET['id'] ?>" method="post" style="display: inline;">
                            <input type="hidden" name="id"   value="<?php //$model->id;?>">
                            <button href="?src=deleteModel&id=<?php //$model->id;?>" class="btn btn-danger">delete</button>
                          </form>
                         -->
                          </span>
                        </td>
                      
                      </tr>
                    <?php endforeach;?>

                    </tbody>
                  </table>
                </div>  

              </div>
            </div>
        </div>
    </div>



<!-- article -->

<div class="row" style="margin-top: 20px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table Article</h6><span  > <a href="?src=addArticle" class="btn btn-primary"> Ajouter</a></span>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    <th class="align-middle text-center">Id</th>
                      <th class="align-middle text-left">Photo</th>
                      <th class="align-middle text-center">Titre</th>
                      <th class="align-middle text-center">Date Ajout</th>
                      <th class="align-middle text-center">Nombre commentaire</th>
                      <th class="align-middle text-center">Action</th>

                    </tr>
                  </thead>

                  <tbody>
                  <?php foreach($article as $articles):?>
                    <tr>
                      <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?=$articles->id;?></span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../App/Photo/ArticlePicture/<?=$articles->picture;?>" class="avatar avatar-sm me-3" alt="user2">
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=$articles->title?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?=  date_format(date_create($articles->date),'d M Y  H:i:s');?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= count($this->Comment_article->find($articles->id));?></span>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">
                        <a href="?src=editArticle&id=<?=$articles->id;?>" >
                        <div class="btn btn-warning">
                            modif
                          </div>
                        </a>
                      
                        <form action="?src=deleteArticle" method="post" style="display: inline;">
                          <input type="hidden" name="id"   value="<?=$articles->id;?>">
                          <button href="?src=deleteArticle&id=<?=$articles->id;?>" class="btn btn-danger">delete</button>
                        </form>
                      
                        </span>
                      </td>
                      <td>
                        <a href="?src=article&id=<?= $articles->id;?>" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                          <i class="ni ni-bold-right" aria-hidden="true"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- end article -->



      <div class="row" style="margin-top: 10px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table Competition</h6> <a href="?src=addCompet" class="btn btn-primary"> Ajouter</a></span>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">

                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cover</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Competition</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Niveau</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder  opacity-7 ps-2 align-middle text-center">progession</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Etoiles</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">date ajout</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Action</th>
                    
                      
                    </tr>
                  </thead>

                  <tbody>

                  <?php foreach($competition as $compet):?>
                    <tr>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $compet->ID;?></span>
                      </td>

                      <td class="align-middle text-center">
                        <div class="d-flex px-2">
                          <div>
                            <img src="../App/Photo/CompetitionPicture/<?= $compet->picture;?>" class="avatar avatar-sm rounded-circle me-2" alt="<?= $compet->picture;?>">
                          </div>
                        </div>
                      </td>

                      <td  class="align-middle text-center">
                        <p class="text-sm font-weight-bold mb-0 text-uppercase text-secondary "><b><?= $compet->name_compet;?></b></p>
                      </td>

                      <td  class="align-middle text-center">
                        <span class="text-xs font-weight-bold text-uppercase text-primary"><small><?= $compet->title;?></small></span>
                      </td>

                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold"><?= $compet->percentage;?>%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=  $compet->percentage;?>%; background-color:<?=  $compet->color;?>; "></div>
                            </div>
                          </div>
                        </div>
                      </td>

                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold"><?= $compet->number_stars;?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold"><?=  date_format(date_create($compet->date),'d M Y  H:i:s');?></span>
                      </td>

                      <td class="align-middle text-center" id="editer">
                        <span class="text-secondary text-xs font-weight-bold">
                          <a href="?src=editCompet&id=<?=  $compet->ID;?>" >
                            <div class="btn btn-warning" >
                              modif
                            </div>
                          </a>
                          <form action="?src=deleteCompet" method="post" style="display: inline;">
                          <input type="hidden" name="id"   value="<?=$compet->ID;?>">
                          <button href="?src=deleteCompet&id=<?=$compet->ID;?>" class="btn btn-danger">delete</button>
                        </form>
                        </span>
                      </td>

                      <td>
                    
                      </td>
                      
                      
                      
                    
                      <td>
                        <a href="?src=_c_o_m_p_e_t_i_t_i_o_n_&id=<?= $compet->ID;?>" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                          <i class="ni ni-bold-right" aria-hidden="true"></i>
                        </a>
                      </td>

                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="row" style="margin-top: 10px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Table Club</h6> <a href="?src=addPersonne" class="btn btn-primary"> Ajouter</a></span>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">

                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 ">ID</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cover</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Titre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">date ajout</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 align-middle text-center">Action</th>
                    
                      
                    </tr>
                  </thead>

                  <tbody>

                  <?php foreach($clubs as $club):?>
                    <tr>
                      <td>
                        <span class="text-xs font-weight-bold"><?= $club->id;?></span>
                      </td>

                      <td class="align-middle text-center">
                        <div class="d-flex px-2">
                          <div>
                            <img src="../App/Photo/ClubPicture/<?= $club->picture;?>" class="avatar avatar-sm rounded-circle me-2" alt="<?= $club->picture;?>">
                          </div>
                        </div>
                      </td>

                      <td  class="align-middle text-center">
                        <p class="text-sm font-weight-bold mb-0 text-uppercase text-secondary "><b><?= $club->name;?></b></p>
                      </td>

                      <td  class="align-middle text-center">
                        <span class="text-xs font-weight-bold text-uppercase text-primary"><small><?= $club->title;?></small></span>
                      </td>

                    
                      <td class="align-middle text-center">
                        <span class="text-xs font-weight-bold"><?=  date_format(date_create($club->date),'d M Y  H:i');?></span>
                      </td>

                      <td class="align-middle text-center" id="editer">
                        <span class="text-secondary text-xs font-weight-bold">
                          <a href="?src=editPersonne&id=<?=  $club->id;?>" >
                            <div class="btn btn-warning" >
                              modif
                            </div>
                          </a>
                          <form action="?src=deletePersonne" method="post" style="display: inline;">
                          <input type="hidden" name="id"   value="<?=$club->id;?>">
                          <button href="?src=deletePersonne&id=<?=$club->id;?>" class="btn btn-danger">delete</button>
                        </form>
                        </span>
                      </td>

                      <td>
                    
                      </td>
                      
                      
                      
                    
                      <td>
                        <a href="?src=personne&id=<?= $club->id;?>" class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto">
                          <i class="ni ni-bold-right" aria-hidden="true"></i>
                        </a>
                      </td>

                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
  