<section id="fh5co-team" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Meet The Team</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove. </h3>
							</div>
						</div>
					</div> -->
				</div>
				<div class="row">
                    <?php foreach($news as $new):?>
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="../App/Photo/NewsPicture/<?=$new->picture;?>" alt="Roger Garfield"></div>
							<a  href="?src=pages.oneNew&id=<?=$new->id;?>" class="mb-0 px-0 py-0 d-flex align-items-center justify-content-center " style="margin-top:25px; font-size:14px; text-transform:uppercase; color:black; font-weight:bold;"><?=$new->title;?></a>
							<span class="position mb-0 px-0 py-1 d-flex align-items-center justify-content-center "><?= App\Model\php\Time::timing($new->date,$new->time);?></span>
							<p><?=htmlspecialchars(substr($new->content,0,150));?><a href="?src=pages.oneNew&id=<?=$new->id;?>">...voir plus</a></p>
							<!-- <ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
								<li><a href="#" class="dribbble"><i class="icon-dribbble"></i></a></li>
								<li><a href="#" class="codepen"><i class="icon-codepen"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul> -->
						</div>
					</div>
                    <?php endforeach;?>
					
				</div>
			</div>
		</div>
	</section>