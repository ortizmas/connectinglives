@extends('layouts.web.app')

@section('content')

<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix" id="home" style="background: url({{ asset('web/img/bg-img/bg-home-6.jpg') }});">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="wellcome-heading">
                    <h1 class="text-white">Sua saúde <br> emocional em <br> 1 lugar!</h1 class="text-white">
                    <h3>CV</h3>
                    {{-- <p>Everything You Need. To Start Selling Online Beautifully</p> --}}
                </div>
                <div class="get-start-area">
                    <!-- Form Start -->
                    <form action="#" method="post" class="form-inline">
                        <input type="email" class="form-control email" placeholder="name@company.com">
                        <input type="submit" class="submit" value="Get Started">
                    </form>
                    <!-- Form End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome thumb -->
    <div class="welcome-thumb wow fadeInDown pt-5" data-wow-delay="0.5s">
        {{-- <img src="web/img/bg-img/welcome-img.png" alt=""> --}}
        <div class="anuncios_slides owl-carousel pt-5">
            <div class="single-shot">
                <a href="#" title=""><img src="web/img/anuncios/anuncio-1.png" alt="" class="img-fluid"></a>
            </div>
            <div class="single-shot">
                <a href="#" title=""><img src="web/img/anuncios/anuncio-2.png" alt="" class="img-fluid"></a>
            </div>
            <div class="single-shot">
                <a href="" title=""><img src="web/img/anuncios/anuncio-3.png" alt="" class="img-fluid"></a>
            </div>
        </div>
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<section class="bg-description section_padding_100" id="about">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-sm-12 col-md-8 align-content-center">
                <div class="section-heading text-center">
                    <h2 class="text-white">Description of content</h2>
                    <div class="line-shape bg-white"></div>
                </div>
                <p class="text-justify text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>

<!-- ***** Special Area Start ***** -->
<section class="special-area bg-white section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="section-heading text-center">
                    <h2>Para o cliente</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-icon">
                        <i class="ti-mobile" aria-hidden="true"></i>
                    </div>
                    <h4>FAST</h4>
                    <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="ti-ruler-pencil" aria-hidden="true"></i>
                    </div>
                    <h4>SECURE</h4>
                    <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-icon">
                        <i class="ti-settings" aria-hidden="true"></i>
                    </div>
                    <h4>EASY</h4>
                    <p>We build pretty complex tools and this allows us to take designs and turn them into functional quickly and easily</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Special Description Area -->
    {{-- <div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="special_description_img">
                        <img src="web/img/bg-img/special.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="special_description_content">
                        <h2>Our Best Propositions for You!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="app-download-area">
                            <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                <!-- Google Store Btn -->
                                <a href="#">
                                    <i class="fa fa-android"></i>
                                    <p class="mb-0"><span>available on</span> Google Store</p>
                                </a>
                            </div>
                            <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                <!-- Apple Store Btn -->
                                <a href="#">
                                    <i class="fa fa-apple"></i>
                                    <p class="mb-0"><span>available on</span> Apple Store</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
<!-- ***** Special Area End ***** -->

<!-- ***** Nossos PsicologosArea Start ***** -->
<section class="app-screenshots-area bg-white section_padding_0_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Conheça alguns de nossos psicologos</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Nossos PsicologosSlides  -->
                <div class="nossos_psicologos_slides owl-carousel">
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-1.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Jackson Nash</h4>
                                <p>Tax Advice</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-2.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Alex Manning</h4>
                                <p>CEO-Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-3.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Ollie Schneider</h4>
                                <p>Business Planner</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-4.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Roger West</h4>
                                <p>Financer</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-4.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Roger West</h4>
                                <p>Financer</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-shot">
                        <div class="single-team-member">
                            <div class="member-image">
                                <img src="web/img/team-img/team-4.jpg" alt="">
                                <div class="team-hover-effects">
                                    <div class="team-social-icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="member-text">
                                <h4>Roger West</h4>
                                <p>Financer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Nossos Psicologos Area End *****====== -->

<!-- ***** Awesome Features Start ***** -->
<section class="awesome-feature-area bg-white section_padding_0_50" id="features">
    <div class="container pb-5">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text -->
                <div class="section-heading text-center">
                    <h2>Para psicologo</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10">
                <div class="row align-items-center wow slideInLeft" data-wow-offset="10" data-wow-duration="2s" data-wow-delay="1s">
                    <div class="col-md-4">
                        <img src="{{ asset('web/img/icons/story.png') }}" alt="" class="img-fluid w-75">
                    </div>
                    <div class="col-md-8">
                        <div class="single-feature">
                            <h5>OUR STORY</h5>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center wow slideInLeft" data-wow-offset="10"  data-wow-iteration="1" data-wow-delay="2s">
                    <div class="col-md-4">
                        <img src="{{ asset('web/img/icons/vision-1.png') }}" alt="" class="img-fluid w-75">
                    </div>
                    <div class="col-md-8">
                        <div class="single-feature">
                            <h5>OUR VISION</h5>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center wow slideInLeft" data-wow-offset="10"  data-wow-iteration="1" data-wow-delay="3s">
                    <div class="col-md-4">
                        <img src="{{ asset('web/img/icons/tecnology.png') }}" alt="" class="img-fluid w-75">
                    </div>
                    <div class="col-md-8">
                        <div class="single-feature">
                            <h5>TECHNOLOGY</h5>
                            <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-user" aria-hidden="true"></i>
                    <h5>Awesome Experience</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-pulse" aria-hidden="true"></i>
                    <h5>Fast and Simple</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-dashboard" aria-hidden="true"></i>
                    <h5>Clean Code</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-palette" aria-hidden="true"></i>
                    <h5>Perfect Design</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-crown" aria-hidden="true"></i>
                    <h5>Best Industry Leader</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="ti-headphone" aria-hidden="true"></i>
                    <h5>24/7 Online Support</h5>
                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div> --}}

    </div>
</section>
<!-- ***** Awesome Features End ***** -->

<!-- ***** Quem Somos Start ***** -->
<section class="quem-somos bg-info">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md m-0 p-0">
                <img src="{{ asset('web/img/bg-img/bg-1.jpg') }}" alt="" class="img-fluid m-0 p-0">
            </div>
            <div class="col-md">
                <h1 class="text-white">Quem somos?</h1>
                <p class="text-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>
<!-- ***** Quem Somos End ***** -->

<!-- ***** Quem Somos Start ***** -->
<section class="frases">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md">
                <h1 class="text-white">Frase do dia?</h1>
                <p class="text-white text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>
<!-- ***** Quem Somos End ***** -->


<!-- ***** Video Area Start ***** -->
{{-- <div class="video-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <div class="video-play-btn">
                        <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video_btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- ***** Video Area End ***** -->

<!-- ***** Cool Facts Area Start ***** -->
{{-- <section class="cool_facts_area clearfix">
    <div class="container">
        <div class="row">
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="counter-area">
                        <h3><span class="counter">90</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-arrow-down-a"></i>
                        <p>APP <br> DOWNLOADS</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="counter-area">
                        <h3><span class="counter">120</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-happy-outline"></i>
                        <p>Happy <br> Clients</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="counter-area">
                        <h3><span class="counter">40</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-person"></i>
                        <p>ACTIVE <br>ACCOUNTS</p>
                    </div>
                </div>
            </div>
            <!-- Single Cool Fact-->
            <div class="col-12 col-md-3 col-lg-3">
                <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.8s">
                    <div class="counter-area">
                        <h3><span class="counter">10</span></h3>
                    </div>
                    <div class="cool-facts-content">
                        <i class="ion-ios-star-outline"></i>
                        <p>TOTAL <br>APP RATES</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** Cool Facts Area End ***** -->

<!-- ***** App Screenshots Area Start ***** -->
{{-- <section class="app-screenshots-area bg-white section_padding_0_100 clearfix" id="screenshot">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2>App Screenshots</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="app_screenshots_slides owl-carousel">
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-1.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-2.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-3.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-4.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-5.jpg" alt="">
                    </div>
                    <div class="single-shot">
                        <img src="web/img/scr-img/app-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** App Screenshots Area End *****====== -->

<!-- ***** Pricing Plane Area Start *****==== -->
{{-- <section class="pricing-plane-area section_padding_100_70 clearfix" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Pricing Plan</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row no-gutters">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-price-plan text-center">
                    <div class="package-plan">
                        <h5>Starter Plan</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>$</span>
                            <h4>29</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Up to 10 users monthly</p>
                        <p>Unlimited updates</p>
                        <p>Free host &amp; domain</p>
                        <p>24/7 Support</p>
                        <p>10 Unique Users</p>
                    </div>
                    <div class="plan-button">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-price-plan text-center">
                    <div class="package-plan">
                        <h5>Basic Plan</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>$</span>
                            <h4>49</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Up to 10 users monthly</p>
                        <p>Unlimited updates</p>
                        <p>Free host &amp; domain</p>
                        <p>24/7 Support</p>
                        <p>10 Unique Users</p>
                    </div>
                    <div class="plan-button">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-price-plan active text-center">
                    <div class="package-plan">
                        <h5>Advenced Plan</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>$</span>
                            <h4>69</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Up to 10 users monthly</p>
                        <p>Unlimited updates</p>
                        <p>Free host &amp; domain</p>
                        <p>24/7 Support</p>
                        <p>10 Unique Users</p>
                    </div>
                    <div class="plan-button">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-price-plan text-center">
                    <div class="package-plan">
                        <h5>Community Plan</h5>
                        <div class="ca-price d-flex justify-content-center">
                            <span>$</span>
                            <h4>99</h4>
                        </div>
                    </div>
                    <div class="package-description">
                        <p>Up to 10 users monthly</p>
                        <p>Unlimited updates</p>
                        <p>Free host &amp; domain</p>
                        <p>24/7 Support</p>
                        <p>10 Unique Users</p>
                    </div>
                    <div class="plan-button">
                        <a href="#">Select Plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** Pricing Plane Area End ***** -->

<!-- ***** Client Feedback Area Start ***** -->
{{-- <section class="clients-feedback-area bg-white section_padding_100 clearfix" id="testimonials">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <div class="slider slider-for">
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Aigars Silkalns</h5>
                            <p>Ceo Colorlib</p>
                        </div>
                    </div>
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Jennifer</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job.”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Helen</h5>
                            <p>Marketer</p>
                        </div>
                    </div>
                    <div class="client-feedback-text text-center">
                        <div class="client">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                        </div>
                        <div class="client-description text-center">
                            <p>“ I have been using it for a number of years. I use Colorlib for usability testing. It's great for taking images and making clickable image prototypes that do the job and save me the coding time and just the general hassle of hosting. ”</p>
                        </div>
                        <div class="star-icon text-center">
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                            <i class="ion-ios-star"></i>
                        </div>
                        <div class="client-name text-center">
                            <h5>Henry smith</h5>
                            <p>Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                <div class="slider slider-nav">
                    <div class="client-thumbnail">
                        <img src="web/img/bg-img/client-3.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="web/img/bg-img/client-2.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="web/img/bg-img/client-1.jpg" alt="">
                    </div>
                    <div class="client-thumbnail">
                        <img src="web/img/bg-img/client-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** Client Feedback Area End ***** -->

<!-- ***** CTA Area Start ***** -->
{{-- <section class="our-monthly-membership section_padding_50 clearfix">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="membership-description">
                    <h2>Join our Monthly Membership</h2>
                    <p>Find the perfect plan for you — 100% satisfaction guaranteed.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                    <a href="#">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** CTA Area End ***** -->

<!-- ***** Our Team Area Start ***** -->
{{-- <section class="our-Team-area bg-white section_padding_100_50 clearfix" id="team">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-heading">
                    <h2>Our Team</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="web/img/team-img/team-1.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Jackson Nash</h4>
                        <p>Tax Advice</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="web/img/team-img/team-2.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Alex Manning</h4>
                        <p>CEO-Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="web/img/team-img/team-3.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Ollie Schneider</h4>
                        <p>Business Planner</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="single-team-member">
                    <div class="member-image">
                        <img src="web/img/team-img/team-4.jpg" alt="">
                        <div class="team-hover-effects">
                            <div class="team-social-icon">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="member-text">
                        <h4>Roger West</h4>
                        <p>Financer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- ***** Our Team Area End ***** -->

<!-- ***** Contact Us Area Start ***** -->
<section class="footer-contact-area section_padding_100 clearfix" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Heading Text  -->
                <div class="section-heading">
                    <h2>Entre em contato conosco!</h2>
                    <div class="line-shape"></div>
                </div>
                <div class="footer-text">
                    <p>Enviaremos a você blogs semanais épicos e outras informações para que a inicialização de seu aplicativo seja bem-sucedida, tudo GRATUITO!</p>
                </div>
                <div class="address-text">
                    <p><span>Endereço:</span> BR-101, km 197, Capoeiruçu, Cachoeira Bahia, BRASIL</p>
                </div>
                <div class="phone-text">
                    <p><span>Telefone:</span> +55-(75)-888-888-666</p>
                </div>
                <div class="email-text">
                    <p><span>E-mail:</span> conectevida@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact_from">
                    <form action="#" method="post">
                        <div class="contact_input_area">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Seu Nome" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Seu E-mail" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Sua Mensagem *" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn submit-btn">Enviar e-mail</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Contact Us Area End ***** -->

@endsection
