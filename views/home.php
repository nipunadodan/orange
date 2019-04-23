<section class="home-section" id="home-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8 mb-5">
                <h1 class="home-title"><span class="SF-thin">Welcome to </span><br /><span class="text-yellow">Orange</span> framework</h1>
                <h5>Lightweight PHP framework</h5>

            </div>
            <div class="col-md-4 px-4 py-5 mt-4 mt-md-0" id="quick-book-panel">
                <div id="sign-up-form">
                    <h3 class="text-center">Sign-Up</h3>

                    <form name="sign-up" class="orange-form api" action="" method="post" data-reset="yes">

                        <div class="row text-center">
                            <div class="col">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ultrices pulvinar. In fermentum massa eu mollis viverra. Nam sed eleifend nunc, sit amet mattis justo. Sed nisl risus, commodo nec diam et, posuere vulputate tortor.
                                </p>
                            </div>
                        </div>
                        <div class="row uniid">
                            <div class="col-12">
                                <label for="uniid">Text Input</label>
                            </div>
                        </div>
                        <div class="input-group nid">
                            <input class="autocomplete form-control border-right-0" id="origin" type="text" name="nid" placeholder="National ID" required>

                            <div class="input-group-append">
                                <span class="input-group-text bg-white border-left-0" style="border:1px solid #dfdfdf" id="basic-addon2"><i class="far fa-comment-alt text-success"></i></span>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-12">
                                <label for="eta">Date-Time Input</label>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" name="eventTime" id="eta" class="form-control border-right-0 datetime" placeholder="YYYY-MM-DD HH:mm:ss.sss" autocomplete="off" required />
                            <div class="input-group-append">
                                <span class="input-group-text bg-white border-left-0" style="border:1px solid #dfdfdf" id="basic-addon2"><i class="far fa-clock text-info"></i></span>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <label for="telephone">Telephone Number</label>
                                <input type="tel" placeholder="" id="telephone" name="contactNumber" required>
                                <input type="hidden" value="" id="countrycode" name="countryCode">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-6 offset-6">
                                <input type="submit" value="SIGN UP">
                            </div>
                        </div>
                        <div class="text-center" id="signup-info-button"><i class="fas fa-info-circle text-muted"></i> Already have an account?</div>
                    </form>
                    <div class="message"></div>

                    <div class="text-small" id="signup-info">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ultrices pulvinar. In fermentum massa eu mollis viverra. Nam sed eleifend nunc, sit amet mattis justo. Sed nisl risus, commodo nec diam et, posuere vulputate tortor. Ut vitae neque id erat vulputate gravida. Vestibulum ante velit, malesuada at sem a, rutrum aliquet mi. Proin tincidunt sem ac tempus porttitor. <span class="text-bold">Phasellus molestie,</span> eros <span class="text-bold">quis placerat eleifend</span>.</p>

                        <p>Integer tempor, diam quis luctus facilisis.</p>

                        <button class="btn btn-outline-secondary text-small mt-4" id="signup-info-close" style="width: 100%;">GOTCHA!</button>
                    </div>
                </div> <!-- .home-booking-forms ENDs here -->
            </div>  <!-- #quick-book-panel ENDs here -->
        </div> <!-- .row ENDs here -->
    </div> <!-- .container ENDs here -->
</section>

<section id="framework" class="pb-md-5 home-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <!-- Slider main container -->
                <div class="swiper-container slider1">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img class="img-fluid mx-auto d-block" src="<?php echo RESOURCES_URL?>images/framework-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid mx-auto d-block" src="<?php echo RESOURCES_URL?>images/framework-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img class="img-fluid mx-auto d-block" src="<?php echo RESOURCES_URL?>images/framework-3.jpg" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3">
                <h2 class="h1 text-bold">How <span class="text-yellow">Orange</span> framework works?</h2>

                <!-- Slider main container -->
                <div class="swiper-container slider1" style="z-index: 1029">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper text-muted">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <h3 class="my-4 text-bold">1. Fork from the gitlab</h3>
                            <p class="h5">Integer tempor, diam quis luctus facilisis.</p>
                        </div>
                        <div class="swiper-slide">
                            <h3 class="my-4 text-bold">2. Do your changes</h3>
                            <p class="h5">Integer tempor, diam quis luctus facilisis.</p>
                        </div>
                        <div class="swiper-slide">
                            <h3 class="my-4 text-bold">3. Commit to git</h3>
                            <p class="h5">Integer tempor, diam quis luctus facilisis.</p>
                        </div>
                    </div>
                    <a href="https://gitlab.com/nipunadodan/orange" class="btn btn-outline-secondary py-0 text-small mt-4"><span>READ MORE</span> <i class="pe pe-2x pe-7s-angle-right"></i> </a>
                    <!-- If we need pagination -->
                    <!--<div class="swiper-pagination"></div>-->

                    <!-- If we need navigation buttons -->
                    <div class="row mt-5">
                        <div class="col-12">
                            <div class="d-inline-flex swiper-custom-prev"><i class="fas fa-arrow-left"></i></div>
                            <div class="d-inline-flex swiper-custom-next"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>