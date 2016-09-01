<!--blog & news section-->
<section id="blog" class="section_3">
    <div class="blog_div">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="main_head animated fade_in_up"><?php echo onepage_get_option('onepage_blog_main_heading', __('Blog & News Section', 'one-page')); ?></h2>
                    <hr class="blog_sep animated fade_in_up">
                    <p class="main_desc animated fade_in_up"><?php echo onepage_get_option('onepage_blog_sub_heading', __('Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'one-page')); ?></p>
                </div>
            </div>
            <div class="row homepage_blogs" data-masonry>
                <?php
			echo do_shortcode('[cool-timeline]');
		?>
            </div>
        </div>
</section>
<!--/blog & news section-->
