<?php $title = 'Competitions';?>
<div id="fh5co-page">
		<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp title" data-wow-duration="1s" data-wow-delay=".5s"></h2>
						<!-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
					</div>
				</div>
				<div class="row p-b">

				<?php foreach($competitions as $competition):?>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 " style="border-radius: 2px;" >
						<div class="fh5co-post wow fadeInLeft border-radius-lg"  data-wow-duration="1s" data-wow-delay="1.1s"  style="border-radius: 50px;">
							
							<!-- <div class="fh5co-post-text"> -->
                                <div class="card" style="background: <?=$competition->color;?>;" >
                                    <div class="card-header pb-0 px-4 py-3">
                                    
                                        <h6 class="mb-0" style="color: deeppink;"><?= $competition->name_compet;?></h6>

                                        <div class="ms-auto text-end px-4 py-0"  >
                                            <a  class="btn btn-link"   href="?src=findCompetition&id=<?= $competition->ID;?> ">
                                                <span class=" text-danger text-gradient font-weight-bold  "> Ouvrir</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body pt-1 p-2">
                                        <ul class="list-group">
                                            <li class="list-group-item border-0 d-flex p-3 mb-2 bg-gray-0 border-radius-lg d-flex text-sm flex-column">
                                                <!-- <div class="d-flex text-sm flex-column" > -->
                                            
                                                <div class=" text-md text-xs" id="size"> Niveau: <span class=" text-dark font-weight-bold ms-sm-2" id="size" ><?= $competition->title;?></span></div>
                                                <div class=" text-md text-xs" id="size">Manager: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= ucfirst($competition->name);?></span></div>
                                                <div class="text-md text-xs" id="size">Etoile : <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $competition->number_stars;?></span></div>
                                                <div class="text-md text-xs" id="size">Couleur: <span class="text-dark ms-sm-2 font-weight-bold" id="size" style="width:20px; height:10px; background: <?= ' '.$competition->color;?>; padding-right:15px; border-radius:100%;"></span></div>
                                                <div class="text-md text-xs" id="size">Pourcentage: <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?= $competition->percentage;?>%</span></div><br>
                                                <i class="text-md text-xs" id="size"><?=  date_format(date_create($competition->dt),'d M Y  H:i');?> <span class="text-dark ms-sm-2 font-weight-bold" id="size"><?// $annees;?></span></i>
                                            
                                                <!-- </div> -->
                                            
                                            </li>    
                                        </ul>
                                    </div>
                                </div>
							<!-- </div> -->
						</div>
					</div>

                    
					
				<?php  endforeach;?>
					
				</div>
				<!-- <div class="row">
					<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
						<a href="#" class="btn btn-primary btn-lg">View All Post</a>
					</div>
				</div> -->
			</div>
		</div>
</div>
