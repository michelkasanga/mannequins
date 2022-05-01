
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder"><?=$title;?></h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

                <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="">Votre titre</label>
                      <input type="text" class="form-control form-control-lg" name="title" placeholder="votre titre" required="obligatoire" >
                    </div>

                    <div class="mb-3">
                        <label for="">Parlez de vous </label>
                     <textarea rows="" cols="" class="form-control form-control-lg" name="content"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="">vos competences </label>
                     <textarea rows="" cols="" class="form-control form-control-lg" name="competence"></textarea>
                    </div>

                <fieldset style="border: 1px solid black;"><label >Ajouter trois photos de vous</label>
                    <div class="mb-3">    
                      <input type="file" class="form-control form-control-lg" id="image" name="picture1"  style="display: flex;">
                    </div>
                    <div class="mb-3">    
                      <input type="file" class="form-control form-control-lg" id="image" name="picture2"  style="display: flex;">
                    </div>
                    <div class="mb-3">    
                      <input type="file" class="form-control form-control-lg" id="image" name="picture3"  style="display: flex;">
                    </div>
                </fieldset>
                                    
                    
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Ajouter</button>
                    </div>
                </form>


                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>