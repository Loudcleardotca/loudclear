<?php if( have_rows('slideshow_works') ): ?>

	<div id="portfolio-gallery" class="scrollbar">

	<?php while( have_rows('slideshow_works') ): the_row(); 

		// vars
		$image = get_sub_field('slide_work');
		$content = get_sub_field('slide_caption_work');
		$title = get_sub_field('slide_title_works');

		?>
        
        
        <a href="<?php echo $image['url']; ?>"  title="<?php echo $title; ?>" data-description="<?php echo $content; ?>"><?php echo $content; ?></a>
        

	<?php endwhile; ?>

	</div>

<?php endif; ?>


<div class="portfolio-container">
	<div class="portfolio-main col-md-9">
		
	</div>
	<div class="portfolio-side col-md-3">
		<div class="ps-wrapper">
			<div class="head">
				<h3 class="title"><span><?php the_field('work_title'); ?></h3>
				
				<p style="color:#4d4d4f;"><?php the_field('description'); ?></p>


			</div>

			<p style="padding: 10px 40px 0 40px; color:#4d4d4f; font-weight:300px;">
			Our client list - <a href="javascript:showClients();"  id="buttonText" style="color:#4d4d4f; text-decoration:underline;">Show more</a> 
			<br/>
			<span style="font-size:18px;"><?php the_field('organization_type'); ?></span></p>
			<div class="title-divider-red-project-detail"></div>

			<div class="comments-wrapper" style="display:none;" id="clientList">
				<div class="inner-wrapper scrollbar">
					<div class="portfolio-comments-form">
						<?php the_field('organization_details'); ?>
					</div>
					<div>
						<br><br><br><br><br><br>
					</div>
				</div>
					
			</div>
			
		</div>	
	</div>
</div>
<!-- Localized -->
<script>



	function showClients(){

		$('#clientList').toggle( "slow", function() {
			if (!isTouchDevice){
				$('.scrollbar').perfectScrollbar('update');
				perfectScroll.init();
			}


			if ($("#clientList").is(":visible") == true){	    	
	    		$('#buttonText').html('Show less');	    
		    }else{
		    	$('#buttonText').html('Show more');	
		    }
		});


		
	}

	$(window).resize(function() {
		var pageWidth = $(window).width(); 

	    if ($("#clientList").is(":visible") == true){
	    	$('#clientList').hide(function(){
	    		 $('#buttonText').html('More clients in this category');
	    	});
	    }
perfectScroll.init();
	});



</script>