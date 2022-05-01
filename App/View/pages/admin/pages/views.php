
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class=" col-xs-12 col-lg-12 col-md-12 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder"><?=$title;?></h4>
                  <p class="mb-0"></p>
                </div>
                <div class="card-body">

                    <div class=" col-xl-4 col-lg-12 col-md-12 d-flex flex-row mx-lg-0  mx-auto" style="box-shadow: 1px 1px 15px black; margin:10px 0px 0px 10px; border-radius:50px;" >
                        <img src="../App/Photo/About/<?= $find->picture1;?>" alt="" class="col-xl-4 col-lg-5 col-md-7" style="display: absolute; width:50%;">
                        <div class="card d-flex flex-column mx-lg-0  py-4">
                        <h2 class="card col-xl-4 col-lg-5 col-md-7 flex-row" >
                            Photo_1
                        </h2>
                        <div class="ms-auto text-middle ">
                          <a  class="btn btn-primary"   href="?src=editPicture1&id=<?= $find->id;?> ">
                              <span class="font-weight-bold  " style="color: antiquewhite;">Edit</span>
                          </a>
                          </div>
                        </div>

                    </div>
                    <div class=" col-xl-4 col-lg-12 col-md-12 d-flex flex-row mx-lg-0  mx-auto" style="box-shadow: 1px 1px 15px black; margin:10px 0px 0px 10px; border-radius:50px;" >
                        <img src="../App/Photo/About/<?= $find->picture2;?>" alt="" class="col-xl-4 col-lg-5 col-md-7" style="display: absolute; width:50%;">
                        <div class="card d-flex flex-column mx-lg-0  py-4">
                        <h2 class="card col-xl-4 col-lg-5 col-md-7 flex-row" >
                            Photo_2
                        </h2>
                        <div class="ms-auto text-middle ">
                          <a  class="btn btn-primary"   href="?src=editPicture2&id=<?= $find->id;?> ">
                              <span class="font-weight-bold  " style="color: antiquewhite;">Edit</span>
                          </a>
                          </div>
                        </div>

                    </div>
                    <div class=" col-xl-4 col-lg-12 col-md-12 d-flex flex-row mx-lg-0  mx-auto" style="box-shadow: 1px 1px 15px black; margin:10px 0px 0px 10px; border-radius:50px;" >
                        <img src="../App/Photo/About/<?= $find->picture3;?>" alt="" class="col-xl-4 col-lg-5 col-md-7" style="display: absolute; width:50%;">
                        <div class="card d-flex flex-column mx-lg-0  py-4">
                        <h2 class="card col-xl-4 col-lg-5 col-md-7 flex-row" >
                            Photo_3
                        </h2>
                        <div class="ms-auto text-middle ">
                          <a  class="btn btn-primary"   href="?src=editPicture3&id=<?= $find->id;?> ">
                              <span class="font-weight-bold  " style="color: antiquewhite;">Edit</span>
                          </a>
                          </div>
                        </div>

                    </div>

                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
  </main>