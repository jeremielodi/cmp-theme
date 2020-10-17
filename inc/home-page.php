		<!-- Banner -->

        <section id="slider"> 
					<div style="width: 100%; display: inline-block;
    margin-right: 1%;
    vertical-align: middle;
    z-index: 1;
">
					  
					<div class="slidercontainerParent" id="slidercontainerParent">
        <div class="slidercontainer">

            <div>

			<?php
				$carousel = new WP_Query(array('post_type' => 'bcarousel', 'order' => 'ASC',));
				$n_img = 0;

				while($carousel->have_posts()) {
					 $carousel->the_post();
			?>
				<div class="CmpSlider-item"
				<?php 
				 if($n_img == 0) {
					 echo 'style="display:block"';
				 }
				
				?>
				>
					<?php the_post_thumbnail();  ?>
                    <div class="CmpSlider-content">
                        <h1 class="slide_title"><?php the_title(); ?></h1>
                        <div class="slide_desc"><?php the_content(); ?> </div>
                    </div>
                </div>
               
				<?php 
			$n_img++;
			} ?>
                
            </div>


        </div>


        <!-- Navigation arrows -->
        <a class="slider_left_nav" onclick="nextSlide(-1)"><span>❮</span></a>
        <a class="slider_right_nav" onclick="nextSlide(1)"><span>❯</span></a>

    </div>
	<a href="#three" style="position: absolute;" class="goto-next scrolly">Next</a>
					</div>
					
				</section>

		




					

				

			<!-- Two -->
			<section id="two" class="spotlight mini-section style2 right">
					<span class="image fit main"><img src="<?php echo get_stylesheet_directory_uri()?>/images/construction.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Les batisseurs</h2>
							<p>Nunc commodo accumsan eget id nisi eu col volutpat magna</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			
			<!-- Three -->
			<section id="three" class="spotlight mini-section style3 left">
					<span class="image fit main bottom"><img src="<?php echo get_stylesheet_directory_uri()?>/images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Le couple pastoral</h2>
							<p>Accumsan integer ultricies aliquam vel massa sapien phasellus</p>
						</header>
						<p>Feugiat accumsan lorem eu ac lorem amet ac arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer mi sed nascetur cep aliquet augue varius tempus lobortis porttitor lorem et accumsan consequat adipiscing lorem.</p>
						<ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul>
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

					<!-- One -->
					<section id="one" class="event-section"> 
						<h1 class="title">EVENEMENTS</h1>
									<div class="row">
									<div class="col-4 col-12-medium">
											<p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
											Blandit orci porttitor semper. Arcu phasellus tortor enim mi
											nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
											augue varius tempus lobortis porttitor accumsan consequat
											adipiscing lorem dolor.</p>
										</div>
										<div class="col-4 col-12-medium">
											<p>Feugiat accumsan lorem eu ac lorem amet sed accumsan donec.
											Blandit orci porttitor semper. Arcu phasellus tortor enim mi
											nisi praesent dolor adipiscing. Integer mi sed nascetur cep aliquet
											augue varius tempus lobortis porttitor accumsan consequat
											adipiscing lorem dolor.</p>
										</div>
										<div class="col-4 col-12-medium">
											<p>Morbi enim nascetur et placerat lorem sed iaculis neque ante
											adipiscing adipiscing metus massa. Blandit orci porttitor semper.
											Arcu phasellus tortor enim mi mi nisi praesent adipiscing. Integer
											mi sed nascetur cep aliquet augue varius tempus. Feugiat lorem
											ipsum dolor nullam.</p>
										</div>
									</div>
							<a href="#two" class="goto-next scrolly">Next</a>
				</section>




			<!-- Five -->
				<section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
						</header>
						<form method="post" action="#" class="cta">
							<div class="row gtr-uniform gtr-50">
								<div class="col-8 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="col-4 col-12-xsmall"><input type="submit" value="Get Started" class="fit primary" /></div>
							</div>
						</form>
					</div>
				</section>


	
