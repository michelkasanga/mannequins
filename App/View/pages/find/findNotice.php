<div id="fh5co-testimonials" data-section="testimonials" style="background-color: black;">		
		<div class="container">
			<div class="row">
				<div class="col-md-12 section-heading text-center">
					<h2 class="animate-box" data-animate-effect="fadeIn"><?= $notice->title;?></h2>
					<!-- <div class="row animate-box" data-animate-effect="fadeIn">
						<div class="col-md-8 col-md-offset-2 subtext">
							<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
						</div>
					</div> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box-testimony animate-box" data-animate-effect="fadeIn">
						<blockquote>
							<span class="quote"><span><i class="icon-quote-left"></i></span></span>
							<p>&ldquo;
                                <?= htmlspecialchars( $notice->content);?>
                                &rdquo;</p>
						</blockquote>
						<p class="author" style="font-size:12px; text-align:center;"><?=  date_format(date_create($notice->date),'d-m-Y  H:i');?></p>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</div>
