
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Ajouter un Manager</h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

                 <form method="post" action="" enctype="multipart/form-data">

                     <div class="mb-3">
                    
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-pencil"></i> </span>
                          <input type="text" class="form-control" placeholder="Entrez le nom complet de ton manager" name="name">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-mail"></i> </span>
                          <input type="email" class="form-control" placeholder="l'adresse email de ton manager" name="email">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-phone"></i> </span>
                          <input type="tel" class="form-control" placeholder="son numero ou son WhatsApp" name="number_phone">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-users"></i> </span>
                         <select name="sex"  class="form-control" required>
                             <option value="Homme">Homme</option>
                             <option value="Femme">Femme</option>
                         </select>
                        </div>
                    </div>
                    
                    
                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon">Nationalité</span>
                          <input type="text" class="form-control" placeholder="nationalité de ton manager" name="nationality">
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="input-group input-group-lg input-group-xs">
                          <span class="input-group-addon"> <i class="icon icon-calender"></i> </span>
                          <input type="number" class="form-control" placeholder="l'année de naissance de ton manager" name="year_b">
                        </div>
                    </div>

                    
                    
                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Ajouter</button>
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