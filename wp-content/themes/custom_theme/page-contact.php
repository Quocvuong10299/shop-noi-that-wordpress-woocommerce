<?php
/*
 Template Name: Contact
 Page
*/
get_header();
?>
<section>
    <div class="container">
        <div class="row pt-100 pb-100">
            <div class="col-md-4">
                <h3 class="contact-info-title">Thông tin liên hệ</h3>
                <p><i class="pe-7s-map-marker"></i><span>123 West Street, Melbourne Victoria <br>3000 Australia</span></p>
                <p><i class="pe-7s-call"></i>
                    <span>+061012345678</span>
                </p>
                <p><i class="pe-7s-mail"></i>
                    <a class="text-p" href="#">Support@domain.com</a>
                </p>
                <div class="footer-social fix mt-40">
                    <a href="#"><i class="text-color-3 fa fa-facebook font-size-fa-connect"></i></a>
                    <a href="#"><i class="text-color-3 fa fa-instagram font-size-fa-connect"></i></a>
                    <a href="#"><i class="text-color-3 fa fa-rss font-size-fa-connect"></i></a>
                    <a href="#"><i class="text-color-3 fa fa-twitter font-size-fa-connect"></i></a>
                    <a href="#"><i class="text-color-3 fa fa-pinterest font-size-fa-connect"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <h3 class="contact-info-title">Liên hệ với chúng tôi</h3>
                    <form id="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 mb-20">
                                <label for="name">Tên của bạn</label>
                                <input class="input_custom" id="name" name="name" type="text">
                            </div>
                            <div class="col-sm-6 col-xs-12 mb-20">
                                <label for="email">Email của bạn</label>
                                <input class="input_custom" id="email" name="email" type="email">
                            </div>
                            <div class="col-12 mb-20">
                                <label for="message">Lời nhắn</label>
                                <textarea name="message" id="message"></textarea>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Gửi" class="btn btn-b">
                            </div>
                        </div>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>