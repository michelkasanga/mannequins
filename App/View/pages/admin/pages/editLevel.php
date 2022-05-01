
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Editer un Niveau</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

                 <form method="post" action="" enctype="multipart/form-data">

                     <div class="mb-3">
                    
                     <h5>Nombre d'Etoile:</h5> <h3><?= $find->number_stars;?></h3>
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class=""></i> </span>
                          <input type="text" class="form-control" placeholder="editer le niveau" name="title" value="<?= $find->title;?>">
                        </div>
                    </div>

                
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Modifier</button>
                      <a class="btn btn-lg btn-danger btn-lg w-100 mt-4 mb-0" href="?src=factory" >Annuler</a>
                    </div>
                </form>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>