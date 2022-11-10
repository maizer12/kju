<?php
/*
Template Name: Home
*/ ?>
<?php get_header() ?>
<section class="carts">
	<ul class="carts__items">
		<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<li class="cart-item">
			<div class="cart-item__images">
				<?php $image = get_field('img-card'); ?>
				<img src="<?php echo $image['url']; ?>" alt="cart-photo" class="cart-item__img" />
			</div>
			<div class="cart-item__footer">
				<div class="cart-item__text">
					<h4 class="cart-item__name">
						<?php the_title(); ?>
					</h4>
					<p class="cart-item__desc">
						<?php the_field('bloc-desc'); ?>
					</p>
				</div>
				<div class="cart-item__icon">
					<?php $image = get_field('icon-cart'); ?>
					<img src="<?php echo $image['url']; ?>" alt="cart-photo" class="cart-item__img" />
				</div>
			</div>
			<div class="popup">
				<div class="popup-item">
					<div class="popup-item__content">
						<div class="popup-item__images">
							<div class="popup-item__image">
								<?php $image = get_field('first_photo'); ?>
								<img src="<?php echo $image['url']; ?>" alt="chose" class="popup-item__img" />
							</div>
							<ul class="small-images">
								<li class="small-images__item">
									<?php $image = get_field('first_photo'); ?>
									<img src="<?php echo $image['url']; ?>" alt="photo" class="small-images__img" />
								</li>
								<li class="small-images__item">
									<?php $image = get_field('second_photo'); ?>
									<img src="<?php echo $image['url']; ?>" alt="photo" class="small-images__img" />
								</li>
								<li class="small-images__item">
									<?php $image = get_field('last_photo'); ?>
									<img src="<?php echo $image['url']; ?>" alt="photo" class="small-images__img" />
								</li>
							</ul>
						</div>
						<div class="popup-text">
							<h2 class="popup-text__title">
								<?php the_field('galeri-title'); ?> <span
									class='popup-text__title_color'><?php  the_field('gallery_title_greenery'); ?> </span>
							</h2>
							<p class="popup-text__subtitle"><?php the_field('desc_title'); ?></p>
							<ul class="popup-text__items">
								<li class="popup-text__item">
									<?php  the_field('van-favorite'); ?>
								</li>
								<li class="popup-text__item">
									<?php  the_field('van-favorite_1'); ?>
								</li>
								<li class="popup-text__item">
									<?php  the_field('van-favorite_2'); ?>
								</li>
								<li class="popup-text__item">
									<?php  the_field('van-favorite_3'); ?>
								</li>
								<li class="popup-text__item">
									<?php  the_field('van-favorite_4'); ?>
								</li>
								<li class="popup-text__item">
									<?php  the_field('van-favorite_5'); ?>
								</li>
							</ul>
						</div>
					</div>
					<button class="popup-btn">
						<svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line x1="15.2479" y1="1.21024" x2="0.512049" y2="18.4397" stroke="black" />
							<line x1="1.00737" y1="1.86262" x2="15.7406" y2="18.4738" stroke="black" />
						</svg>
					</button>
				</div>
			</div>
		</li>
		<?php 
	}
} wp_reset_postdata();
?>
	</ul>
</section>

<?php get_footer() ?>