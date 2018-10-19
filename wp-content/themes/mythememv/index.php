<?php get_header();?>
<?php get_template_part('template-parts/breadcrumbs');?>
<section class="post_blog_bg primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			
        	<div class="col-md-8">
        		<?php 
        			if(have_posts()) : ?>
        				<?php while(have_posts()) : the_post();?>
        					<?php get_template_part('template-parts/content', get_post_format());?>
        				<?php endwhile;?>
        			<?php endif?>	
				
				
									
				<?php mythememv_pagination();?>
				<!-- <div class="next_page">
          			<ul class="page-numbers">
						<li><span class="page-numbers current">1</span></li>
						<li><a href="#" class="page-numbers">2</a></li>
						<li><a href="#" class="page-numbers">3</a></li>
						<li><a href="#" class="page-numbers">4</a></li>
						<li><a href="#" class="next page-numbers">Next</a></li>
					</ul>
       			 </div> -->
			
			</div>	
			
				<?php get_sidebar();?>
			
				
				
			</div>
		</div>
	</div>
</section>


<?php get_footer();?>