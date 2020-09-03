<?php
/**
 * Template part for displaying results in sale block
 *
 *
 * @package custom_theme
 */

?>
<?php
    $args = [
            'post_type'         => 'product',
            'posts_per_page'    => '8',
            'meta_query'        =>
                [
                    'relation' => 'OR',
                    [
                            'key'       => '_sale_price',
                            'value'     => 0,
                            'compare'   => '>',
                            'type'      => 'numeric'
                    ]
                ]
            ]
?>
<?php
    $getPosts = new WP_Query($args);
    global $wp_query;$wp_query->in_the_loop = true;
 ?>
<section>
    <div class="container mb-70">
        <div class="mb-70 mt-4">
            <!--            <h4 class="section-title-small d-flex justify-content-center">Sản phảm của chúng tôi</h4>-->
            <h1 class="section-title-big d-flex justify-content-center">Sản phẩm khuyến mãi</h1>
        </div>
        <div class="row">
            <?php
                while ($getPosts->have_posts()) : $getPosts->the_post();
                global $product;
                ?>
                    <div class="col-md-3">
                        <div class="product__item mx-0">
                            <a href="<?= the_permalink() ?>">
                                <div class="product__item-image">
                                    <?= get_the_post_thumbnail(get_the_ID(),'thumnail', array('class' => 'thumnail')) ?>
                                    <div class="product__item--overlay"></div>
                                    <a href="single.html" class="btn btn-primary product__item--content">Mua</a>
                                </div>
                                <div class="product__item-info text-center">
                                    <h5 class="product__item--title"><?= the_title() ?></h5>
                                    <div class="price">
                                       <?= $product->get_price_html() ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata();
            ?>
        </div>
    </div>

</section>
