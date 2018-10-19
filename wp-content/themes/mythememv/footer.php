<footer class="third-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="footer_top">
					<h4> <?php echo get_theme_mod('header_social'); ?>  </h4>
					
					<ul>
					<?php if(get_theme_mod('facebook_social')): ?>
						<li> <a href="<?php echo get_theme_mod('facebook_social'); ?>"> <i class="fa fa-facebook" aria-hidden="true"></i> </a> </li>
					<?php endif?>
					<?php if(get_theme_mod('twitter_social')): ?>
						<li> <a href="<?php echo get_theme_mod('twitter_social'); ?>"> <i class="fa fa-twitter" aria-hidden="true"></i> </a> </li>
					<?php endif?>
					<?php if(get_theme_mod('linkedin_social')): ?>
						<li> <a href="<?php echo get_theme_mod('linkedin_social'); ?>"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a> </li>
					<?php endif?>
					<?php if(get_theme_mod('gmail_social')): ?>
						<li> <a href="<?php echo get_theme_mod('gmail_social'); ?>"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a> </li>
					<?php endif?>
					<?php if(get_theme_mod('youtube_social')): ?>
						<li> <a href="<?php echo get_theme_mod('youtube_social'); ?>"> <i class="fa fa-youtube-square" aria-hidden="true"></i> </a> </li>
					<?php endif?>
						<li> <a href="https://www.instagram.com"> <i class="fa fa-instagram" aria-hidden="true"></i> </a> </li>
					</ul>
				</div>
				
				
				
				
			</div>
		</div>
	</div>
	
	<div class="footer_bottom fourth-bg">
					<?php echo get_theme_mod('footer_copy')?>
	</div>
				
</footer>
<?php wp_footer();?>

</body>

  <!-- JS Plugins -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
  <script src="js/css3-animate-it.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/agency.js"></script>
  </html>