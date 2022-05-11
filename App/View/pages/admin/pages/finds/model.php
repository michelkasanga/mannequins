<?php $title= $findModel->title.'   ';?> <p class="align-middle text-center"> <?php $title= '   ';?><small >  <?php $title .= '  - '.$findModel->date;?></small></p>
<div class="row" style="margin-top: 20px;">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class=" p-0">
                <div class="col-12">
                  <div class="col-12" id="col" >
                    <img src="../App/Photo/ModelPicture/<?=$findModel->picture;?>" alt="<?=$findModel->picture;?>" class="align-middle text-center"  id="photo">
                  </div>
                    
                    <p class="align-middle text-center"><small ><?= $findModel->date;?></small></p>
                    

                    
                </div>
                

      
                <div>
                  <a href="?src=add_picture_model&id=<?= $findModel->ID;?>" class="btn btn-primary"> ajouter les photo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- end article -->


          

<div id="fh5co-page">
		<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp title" data-wow-duration="1s" data-wow-delay=".5s">Articles</h2>
						<!-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
					</div>
				</div>
				<div class="row p-b gallery">

                    <?=  str_replace(['DEBUT','FIN'],[ 
                        '<div class="col-md-3 col-sm-5 col-xs-5 col-xxs-12">
						    <div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
							    <div class="fh5co-post-image">',
                                '</div>
							
                                </div>
                            </div>'
                                ],$findModel->picture2);?>
                    
				</div>
			


			</div>
		</div>
</div>
