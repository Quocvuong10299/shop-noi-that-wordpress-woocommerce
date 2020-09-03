<?php
/*
 Template Name: Home Page
*/
get_header();
?>
    <section>
        <div class="container">
            <div class="banner__home">
                <div class="banner__home--img">
                    <img class="img-full" src="<?php bloginfo('template_url'); ?>/images/banner_1.jpg" alt=""/>
                    <div class="banner__content">
                        <h3 class="text-h3-banner text-color-2">Thiết kế hiện đại</h3>
                        <h1 class="text-banner text-color-2">Bộ sưu tập 2020</h1>
                        <a href="#" class="btn btn-primary">Tìm hiểu thêm</a>
                    </div>
                </div>
                <div class="banner__home--img">
                    <img class="img-full" src="<?php bloginfo('template_url'); ?>/images/banner_2.jpg" alt=""/>
                    <div class="banner__content">
                        <h3 class="text-h3-banner text-color-2">Đồ nội thất</h3>
                        <h1 class="text-banner text-color-2">Bộ sưu tập 2020</h1>
                        <div class="">
                            <a href="#" class="btn btn-primary">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_template_part( 'template-parts/content','icon');
    get_template_part( 'template-parts/content','slide');
    get_template_part( 'template-parts/content','banner');
    get_template_part( 'template-parts/content','sale');
    ?>
<?php
get_footer();
?>