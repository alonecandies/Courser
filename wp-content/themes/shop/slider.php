<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php 
                $args = array(
                    'posts_per_page' => 5,
                    'post_type' => 'slider'
                );
                $the_query = new WP_Query($args);
                $i = 1;
            ?>
            <?php if($the_query->have_posts()): ?>
            <?php while($the_query->have_posts()):$the_query->the_post(); ?>
                <?php if($i==1){ ?>
                    <div class="carousel-item active">
                        <?php echo get_the_post_thumbnail( get_the_ID(),'full',array('class'=>'d-block w-100')); ?>
                    </div>
                <?php }else{ ?>
                    <div class="carousel-item">
                        <?php echo get_the_post_thumbnail( get_the_ID(),'full',array('class'=>'d-block w-100')); ?>
                    </div>
                <?php } ?>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>