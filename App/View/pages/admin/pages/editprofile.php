<?php $title = 'profile';?>
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">

            <form method="post" action="" enctype="multipart/form-data"  role="form">
                <div class="card">
                    <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Edit Profile</p>
                        <button  type="submit" class="btn btn-primary btn-sm ms-auto">Envoyer</button>
                        <a href="?src=profile" type="" class="btn btn-danger btn-sm ms-auto">Annuler</a>
                    </div>
                    </div>
                    <div class="card-body">
                    <p class="text-uppercase text-sm">User Information</p>
                    <div class="row">
                        
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Username</label>
                            <input class="form-control" name="username"  type="text" value="<?= $user->username;?>" required>
                            <i style="color: red;"> <?= $messageName;?>  </i>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Email address</label>
                            <input class="form-control" name="email" type="email" value="  <?= $user->mail;?>" required>
                            <i style="color: red;"> <?= $messageMail;?>  </i>
                        </div>
                        </div>
                        
                    </div>
                    </div>
            </form>
              <hr class="horizontal dark">



            </div>
          </div>
      


        </div>
    
     
    