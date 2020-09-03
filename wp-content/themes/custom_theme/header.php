<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'custom_theme' ); ?></a>

	<header id="header" class="header">
        <div class="header__top position-relative">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="header__logo">
                        <h1 class="text-color-1 font-weight-bold">K'house</h1>
                    </div>
                    <div class="header__menu">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'container' => 'nav',
                            'container_class' => 'menu',
                            'menu_class' => 'menu__list',
                            'link_class'        => 'menu__link',
                            'list_item_class'   => 'menu__item'
                        ) );
                        ?>
                    </div>
                    <div class="header__option">
                        <div class="">
                            <i class="pe-7s-search font-size-icon li-with" aria-hidden="true"></i>
                            <i class="pe-7s-config font-size-icon li-with" aria-hidden="true">
                                <ul id="config" class="config pl-0 d-style text-center">
                                    <li class="hover-item"><a class="nav-link" href="#">Login</a></li>
                                    <li class="hover-item"><a class="nav-link" href="#">Register</a></li>
                                </ul>
                            </i>
                            <i class="pe-7s-cart font-size-icon mr-2 li-with position-relative" aria-hidden="true">
                                    <?php
                                        global $woocommerce;
                                        $count = $woocommerce->cart->cart_contents_count;
                                        $items = $woocommerce->cart->get_cart();
                                        if(WC()->cart->get_cart_contents_count() > 0){
                                            ?>
                                            <div class="cart__content">
                                               <?php
                                                foreach ($items as $key => $value){
                                                    ?>
                                                    <div class="row mb-15">
                                                        <div class="col-4">
                                                            <img class="mr-2"
                                                                 src="<?= get_the_post_thumbnail_url($value['product_id']) ?>"
                                                                 style="width: 70px; height: 80px"
                                                                 alt="">
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex flex-column">
                                                                <h6><?= get_the_title($value['product_id']); ?></h6>
                                                                <span class="text-small">Giá: <?= number_format($value['line_total']/$value['quantity'],0,",","."); ?>VND</span>
                                                                <span class="text-small">Số lượng: <strong><?= $value['quantity']; ?></strong></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="<?= wc_get_cart_remove_url($key) ?>">
                                                                <i title="xóa" style="font-size: 23px" class="pe-7s-trash"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <?php
                                                }
                                               ?>
                                                <div class="d-flex justify-content-between">
                                                    <h4>Tổng Cộng</h4>
                                                    <h4><?= WC()->cart->get_cart_total(); ?></h4>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <a href="<?= bloginfo('url') ?>/gio-hang" class="btn btn-b">Giỏ Hàng</a>
                                                    <a href="<?= bloginfo('url') ?>/thanh-toan" class="btn btn-b">Thanh Toán</a>
                                                </div>
                                            </div>
                                            <?php
                                        }else{
                                            ?>
                                            <div class="cart__content">
                                                <h4 class="text-center my-0">Giỏ hàng trống <i class="fa fa-frown-o" aria-hidden="true"></i></h4>
                                            </div>
                                            <?php
                                        }
                                    ?>

                                <span class="total__cart"><?= sprintf( _n( '%d product', '%d', $count, 'text domain' ), $count ); ?></span>

                            </i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="myOverlay" class="overlay">
            <i style="font-size: 70px;color: white;cursor: pointer" class="pe-7s-close" id="close-search" title="Đóng"></i>
            <div class="overlay-content">
                <form action="#" method="">
                    <input type="text" placeholder="Tìm kiếm sản phẩm..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
	</header><!-- #masthead -->
