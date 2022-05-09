<?php $title = 'Articles';?>
<div id="fh5co-page">
		<div class="fh5co-blog-style-1">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-heading wow fadeInUp title" data-wow-duration="1s" data-wow-delay=".5s">Articles</h2>
						<!-- <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p> -->
					</div>
				</div>
				<div class="row p-b">

				<?php foreach($articles as $article):?>
					<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
						<div class="fh5co-post wow fadeInLeft"  data-wow-duration="1s" data-wow-delay="1.1s">
							<div class="fh5co-post-image">
								<div class="fh5co-overlay"></div>	
									<!-- <div class="fh5co-category"><a href="#">Tutorial</a></div> -->
								<img src="../App/Photo/ArticlePicture/<?= $article->picture;?>" alt="<?= $article->picture;?>" class="img-responsive">
							</div>
							<div class="fh5co-post-text">
								<h3><a href="?src=34d2405248f96f68a53d744975dace088147607a&id=<?= $article->id;?>"><?= $article->title;?></a></h3>
								<div class="card-body pt-0 p-0">
									<h5 class=" text-body text-xs font-weight-bolder mb-1">
										<p> <?= htmlspecialchars(substr($article->content,0,190).'...');?></p>
									</h5>
								</div>
								
							</div>
							<div class="fh5co-post-meta">
								<span ><i class="icon-comment"></i> <?= count( $this-> Comment_article->find($article->id));?></span>
								<span ><i class="icon-clock-o"></i> <?= App\Model\php\Time::timing($article->date,$article->time);?></span>
							</div>
						</div>
					</div>
					
				<?php endforeach;?>
					
				</div>
				<!-- <div class="row">
					<div class="col-md-4 col-md-offset-4 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
						<a href="#" class="btn btn-primary btn-lg">View All Post</a>
					</div>
				</div> -->
			</div>
		</div>
</div>
