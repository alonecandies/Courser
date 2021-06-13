<?php global $product; ?>
<div class="item-product">
    <div class="thumb">
        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'thumbnail')); ?>
        </a>
        <?php if ($product->is_on_sale()) { ?>
            <span class="sale">Sale <br><?php echo percentSale($product->get_regular_price(), $product->get_sale_price()); ?></span>
        <?php } ?>
        <div class="action">
            <a href="?add-to-cart=<?php the_ID(); ?>" class="buy"><i class="fa fa-cart-plus"></i> Buy</a>
            <a href="<?php the_permalink(); ?>" class="like"><i class="fa fa-heart"></i> Like</a>
            <div class="clear"></div>
        </div>
    </div>
    <div class="info-product">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <div class="price">
            <?php echo $product->get_price_html(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="view-more">View detail</a>
    </div>
</div>