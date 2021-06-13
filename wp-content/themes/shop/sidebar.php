<div class="category-box">
	<h3>List category</h3>
	<div class="content-cat">
		<ul>
			<?php
			$args = array(
				'type' => 'product',
				'child_of' => 0,
				'hide_empty' => 0,
				'taxonomy' => 'product_cat',
			);
			$categories = get_categories($args);
			foreach ($categories as $category) { ?>
				<li>
					<i class="fa fa-angle-right"></i><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a>
				</li>
			<?php } ?>
		</ul>
	</div>
</div>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?><?php endif; ?>
<div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
