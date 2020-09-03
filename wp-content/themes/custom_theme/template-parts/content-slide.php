<?php
/**
 * Template part for displaying results in slide block
 *
 *
 * @package custom_theme
 */

?>
<?php
    $tax_query[] = array(
        'taxonomy' => 'product_visibility',
        'field' => 'name',
        'terms' => 'featured',
        'operator' => 'IN'
    );
?>
<?php $args = array( 'post_type' => 'product','posts_per_page' => 10,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
<?php $getposts = new WP_query( $args);?>
<?php global $wp_query; $wp_query->in_the_loop = true; ?>
<section>
    <div class="container mb-5">
        <div class="mb-70">
            <h4 class="section-title-small d-flex justify-content-center">Sản phảm của chúng tôi</h4>
            <h1 class="section-title-big d-flex justify-content-center">Sản phẩm nổi bật</h1>
        </div>
        <div class="section__product">
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <div class="product__item">
                    <a href="<?= the_permalink() ?>">
                        <div class="product__item-image">
<!--                            <img class="image" src=""/>-->
                            <?= get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'class' =>'thumnail')); ?>
                            <div class="product__item--overlay"></div>
                            <a href="#" class="btn btn-primary product__item--content">Mua</a>
                        </div>
                        <div class="product__item-info text-center">
                            <h5 class="product__item--title"><?= the_title() ?></h5>
                            <div class="price">
                                <?= $product->get_price_html(); ?>
<!--                                <del>50.000</del>-->
<!--                                <span>20.000</span>-->
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>
</section>
