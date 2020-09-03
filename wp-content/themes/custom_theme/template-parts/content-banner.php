<?php
/**
 * Template part for displaying results in banner index block
 *
 *
 * @package custom_theme
 */

?>
<?php
    $banner_small_title = get_field('banner_small_title');
    $banner_big_title = get_field('banner_big_title');
    $banner_background = get_field('banner_background')
?>
<section>
    <div class="container pb-100">
        <div class="row o-hidden">
            <div class="col-xs-12 single-banner-2">
                <img src="<?= $banner_background['url'] ?>" alt="<?= $banner_background['alt'] ?>"/>
                <div class="single-banner-2--content">
                    <h3 class="single-banner-2-big"><?= $banner_big_title ?></h3>
                    <p class="single-banner-2-small"><?= $banner_small_title ?></p>
                    <a href="#" class="btn btn-secondary">Xem Thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
