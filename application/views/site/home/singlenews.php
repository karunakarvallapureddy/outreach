<br/>

	<div class="container">		

			<div class="row">

				<div class="col-md-9">

					<div id="primary" class="content-area">

						<main id="main" class="inneritempost site-main" role="main">

						<article class="singlepost">

						<h3 class="entry-title pbot10 animated fadeInLeft"><?php echo $news_list['title'];?></h3>

						<!-- .wowmetaposts -->

						<div class="entry-content about-bullet">
						<!--<p><img src="<?php //echo base_url()."uploads/news/".$news_list['banner'];?>" /></p>-->
                           <?php echo $news_list['description'];?>
						</div>

						<!-- .entry-content -->

						<!-- .entry-meta -->

						</article>

						<!-- #post-## -->

						<!-- #nav-below -->

						<div class="clearfix">

						</div>

	

						<!-- #comments -->

						</main>

						<!-- #main -->

					</div>

					<!-- #primary -->

				</div>

				<div class="col-md-3">

					<?php $this->load->view('site/side_bar');?>

					<!-- #secondary -->

				</div>

				<!-- .col-md-3 -->

			</div>

			<!-- /.row -->		

	</div>