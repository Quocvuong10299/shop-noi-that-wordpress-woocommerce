<?php
/*
 Template Name: Shop Page
*/
get_header();
?>

<section>
    <div class="container mb-70">
        <div class="row">
            <div class="col-md-3">
                <?= get_sidebar() ?>
            </div>
            <div class="col-md-9">
                <div class="row mb-40 ">
                    <div class="col-md-4">
                        <div class="product__item mx-0 mb-40">
                            <a href="#">
                                <div class="product__item-image">
                                    <img class="image" src="images/2.jpg" alt=""/>
                                    <div class="product__item--overlay"></div>
                                    <a href="#" class="btn btn-primary product__item--content">Mua</a>
                                </div>
                                <div class="product__item-info text-center">
                                    <h5 class="product__item--title">carl hansen ch25</h5>
                                    <div class="price">
                                        <del>50.000</del>
                                        <span>20.000</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div></div>
                </div>
                <div class="row">
                    <div class="col-12 mb-40">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="page-item"><a class="page-link active-paginate" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
