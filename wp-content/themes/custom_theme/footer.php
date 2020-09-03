<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>

	<footer id="footer" class="footer">
        <div class="container pt-100 pb-60">
            <div class="row">
                <div class="col-md-5">
                    <h4>Thông tin liên hệ</h4>
                    <p>
                        <strong>Địa chỉ</strong>
                        <span>28 Green Tower, Street Name, New York City, USA</span>
                    </p>
                    <p>
                        <strong>Điện thoại</strong>
                        <span>+8880 44338899</span>
                    </p>
                    <p>
                        <strong>Email</strong>
                        <span>yourmail@outlook.com</span>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Liên kết</h4>
                    <div class="footer-social fix">
                        <a href="#"><i class="fa fa-facebook font-size-fa-connect"></i></a>
                        <a href="#"><i class="fa fa-instagram font-size-fa-connect"></i></a>
                        <a href="#"><i class="fa fa-rss font-size-fa-connect"></i></a>
                        <a href="#"><i class="fa fa-twitter font-size-fa-connect"></i></a>
                        <a href="#"><i class="fa fa-pinterest font-size-fa-connect"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4>Bản tin</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor incididunt.</p>
                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="sunscribe-form validate" target="_blank" novalidate="">
                        <div id="mc_embed_signup_scroll">
                            <label for="mce-EMAIL" class="hidden">Đăng kí Email để nhận những thông tin mới nhất</label>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email của bạn" required="">
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Đăng kí" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr class="hr">
        <div class="copyright text-left col-sm-6 col-xs-12">
            <p>Copyright © 2020</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
