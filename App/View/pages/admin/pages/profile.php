<?php $title = 'Profile';?>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <?php foreach($userspicture as $picture):?>
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative  navbar-brand m-0" >
              
                <img src="../App/Photo/UsersPicture/<?= $picture->picture;?>" alt="profile_image" class=" navbar-brand-img w-80 h-100 border-radius-lg shadow-sm" style="width: 100%; height:100%;">
              </div>
            </div>
          <?php endforeach;?>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
              <?= $user->username;?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
              <?= $user->resposability;?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              
              <ul class="nav nav-pills nav-fill p-1" role="tablist">
              
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                    <i class="ni ni-app"></i>
                    <span class="ms-2">App</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <i class="ni ni-email-83"></i>
                    <span class="ms-2">Messages</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "  href="?src=setProfile&id=<?= $user->id;?>" role="tab" aria-selected="false">
                    <i class="ni ni-settings-gear-65"></i>
                    <span class="ms-2">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">

        <form method="post" action="?src=setInformationUser" enctype="multipart/form-data"  role="form">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Edit Profile</p>
                <button href="?src=setInformationUser&id=<?= $user->id;?>" type="submit" class="btn btn-primary btn-sm ms-auto">Envoyer</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Username</label>
                    <input class="form-control"  type="" placeholder="<?= $user->username;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Email address</label>
                    <input class="form-control" type="" placeholder="  <?= $user->mail;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">First name</label>
                    <input class="form-control" name="firstname" type="text" value="<?= $user->firstname;?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Last name</label>
                    <input class="form-control" name="secondname" type="text" value="<?= $user->secondname;?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Responsability</label>
                    <input class="form-control" name="resposability" type="text" value="<?= $user->resposability;?>">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Adress</label>
                    <input class="form-control" name="adress" type="text" value="<?= $user->adress;?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" name="city" type="text" value="<?= $user->city;?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" name="country" type="text" value="<?= $user->country;?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Postal code</label>
                    <input class="form-control" name="postalCode" type="text" value="<?= $user->postalCode;?>">
                  </div>
                </div>
              </div>
        </form>
              <hr class="horizontal dark">


              <p class="text-uppercase text-sm">photo</p>
              <div class="d-flex align-items-center">
                  
                  </div>

              <form method="post" action="?src=changeProfilePicture" enctype="multipart/form-data"  role="form">
                <div class="row">
                  <div class="card-header pb-0 m-0">
                    <div class="d-flex align-items-center m-0">
                    <p class="text-uppercase text-sm mb-0 m-0">Edit Photo Profile</p>
                      <button  href="?src=changeProfilePicture&id=<?= $user->id;?>" type="submit" class="btn btn-primary btn-sm ms-auto">Envoyer</button>
                    
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Choisir la photo</label>
                      <input class="form-control" name="picture" type="file" value="" >
                    </div>
                  </div>
                </div>
              </form>


            </div>
          </div>
      


        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="../assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="../assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22</span>
                      <span class="text-sm opacity-8">Friends</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">10</span>
                      <span class="text-sm opacity-8">Photos</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">89</span>
                      <span class="text-sm opacity-8">Comments</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                  Mark Davis<span class="font-weight-light">, 35</span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    