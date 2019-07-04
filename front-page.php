<?php 
get_header(); 

$query_services = array(
    'post_type' => 'service',
    'posts_per_page' => 3,
);

$query_sliders = array(
    'post_type' => 'slider',
    'posts_per_page' => 10,
);

$query_news_updates = array(
    'post_type' => 'news',
    'posts_per_page' => 20,
);

$services = new WP_Query( $query_services );
$sliders = new WP_Query( $query_sliders );
$news_updates = new WP_Query( $query_news_updates );
?>

<style>
    header {
        background-color: rgba(0, 0, 0, 0);
    }
    
    nav>ul>li>a {
        color: rgba(255, 255, 255, 0.8);
    }
    
    .sub-wrapper a {
        color: rgba(255, 255, 255, 0.8) !important;
    }
    
    .sub-wrapper a:hover {
        color: #b98332 !important;
    }

    .hamburger{
        color: rgba(255, 255, 255, 0.8);
    }
    
    @media screen and (max-width: 992px) {
        .sub-wrapper a,
        .sub-wrapper a:hover {
            color: black !important;
        }
        ul.sub-menu {
            padding-bottom: 0;
        }
    }
</style>



<nav>
    <?php
        wp_nav_menu(array( 'theme-location' => 'primary-menu' ));
    ?>
</nav>

<div id="carouselExampleIndicators" class="carousel slide carousel-position" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for($i = 0; $i < $sliders->found_posts; $i++) { ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"
            class="<?php echo $i == 0 ?? 'active' ?>"></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner">
        <?php $count = 1; while( $sliders->have_posts() ) : $sliders->the_post() ?>
        <div class="carousel-item <?php echo $count == 1 ? 'active' : ''; $count++; ?>">
            <div class="d-block w-100 img-carousel img-carousel-placement img-slide-1"
                style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                <div class="zoomoutheader">
                    <p></p>
                </div>
            </div>

            <div class="carousel-caption d-none d-md-block">
                <h5 class="animated fadeInDown">
                    <?php the_title(); ?>
                </h5>
                
            </div>
        </div>
        <?php endwhile; ?>

        <!-- <div class="carousel-item">
                <div class="d-block w-100 img-carousel img-carousel-placement img-slide-2"></div>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="animated fadeInDown">
                    Blockchain is Leading Software Plateform
                    </h5>
                    <div class="carousel-btn-list">
                    <a
                        class="a-no-decoration right-top-btn-1 animated fadeInUp carousel-btn-1"
                        href="#"
                        >Learn More</a>

                    <a
                        class="a-no-decoration right-top-btn-1 animated fadeInUp carousel-btn-2"
                        href="#"
                        >How It Works</a>
                    </div>
                </div>
            </div> -->
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span></a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

<!-- here-->
<div class="polygon-placement center-text fix-top our-story" style="padding-top:40px;">
    <div class="polygon-background" style="padding: 40px 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 live-news" style="text-align:left">
                    <h3>RFC Cambodia – Your FOREX Trading platform</h3>
                    <div class="horizontal-bar" style="margin:20px 0;"></div>

                    <div style="margin-top:40px;">


                        <div class="desc">
                            <p>
                                Royal Financial Corporation (RFC) is a member of the Royal Group, one of Cambodia’s
                                leading
                                investment corporations. A “Central Counter Party License” issued by the Securities
                                Exchange
                                Commission Cambodia (SECC) regulates RFC’s trading operations. RFC provides a
                                transparent
                                and safe investment environment for Cambodian investors in the derivatives market.
                            </p>

                            <p>
                                RFC offers multiple major currencies and commodities as investment portfolios. We
                                connect
                                clients to dark pool liquidations. We assist client trades to secure the most exciting
                                and
                                efficient investments.
                            </p>

                            <p>
                                Our talented consultants provide excellent service and information for clients to
                                minimize
                                risk and maximize return. We take pride in having assisted hundreds of clients find the
                                best
                                brokerage company to invest with in Cambodia.
                            </p>
                        </div>



                    </div>



                </div>

                <div class="col-sm-6 col-lg-3">

                    <ul>
                        <li>
                            <div><i class="fas fa-hand-holding-usd"></i></div>
                            <div>Forex, Gold, Oil, CFDs & more</div>
                        </li>

                        <li>
                            <div><i class="fas fa-chart-line"></i></div>
                            <div>SECC regulated</div>
                        </li>

                        <li>
                            <div><i class="fas fa-tint"></i></div>
                            <div>Dark Pool Liquidity</div>
                        </li>

                        <li>
                            <div><i class="fas fa-desktop"></i></div>
                            <div>No Dealing Desk</div>
                        </li>





                    </ul>




                </div>



                <div class="col-sm-6 col-lg-3">

                    <ul>

                        <li>
                            <div><i class="far fa-clock"></i></div>
                            <div>Trade 24/6</div>
                        </li>

                        <li>
                            <div><i class="fas fa-check-double"></i></div>
                            <div>Segregated Client Funds</div>
                        </li>

                        <li>
                            <div><i class="fas fa-phone-alt"></i></div>
                            <div>24 Hour Support</div>
                        </li>

                        <li>
                            <div><i class="far fa-handshake"></i></div>
                            <div>Fee-Free Funding Options</div>
                        </li>


                        

                        
                    </ul>

                </div>


            </div>
        </div>
    </div>



</div>

<div class="container-fluid my-margin-bottom-1">
    <div class="center-text big-letter-padding">
        <h3 class="blue-foreground" style="margin-bottom: 18px">
            We're The Expert in Blockchain
        </h3>

        <h2>
            Global Blockchain Consulting Firm That Serves Leaders
        </h2>

        <span class="desc">
            Blockchain’s professional services include audit and assurance, tax
            and consulting that cover such areas as cybersecurity and privacy,
            human resources, deals and forensics. We help resolve complex issues.
        </span>

        <br /><br /><br />
        <a href="?post_type=service" class="my-primary-btn">View All Services</a>
    </div>
</div>



<div class="image-placement center-text">
    <div class="image-background img-fluid"></div>

    <div class="my-pull-up">
        <h2 class="big-letter-padding" style="color:#fafafa">
            Every Day Blockchain People Work with You
        </h2>

        <h3 class="white-fore-trans">
            Blockchain provides services for public and private clients.
        </h3>
    </div>
</div>

<!---->

<div class="container cubic-pull-up">
    <div class="row">
        <?php
                
                while ($services->have_posts()) : $services->the_post()
            ?>

        <div class="col-sm-12 col-md-4" style="cursor:pointer"
            onclick="window.open('<?php the_permalink(); ?>', '_self')">
            <!-- <img src="img/commodities-1.jpg" width="100%" height="200" alt="" /> -->


            <div class="cubic service">
                <img src="<?php echo(the_post_thumbnail_url())?>" alt="" class="img-fluid">

                <div style="padding: 45px">
                    <h3><?php the_title()?></h3>
                    <?php the_excerpt()?>

                </div>

            </div>


        </div>

        <?php
                endwhile;
            ?>
        <!-- <div class="col-sm-12 col-md-4">
                    <img src="img/IMG_1779.png" width="100%" height="200" alt="" />
                    <div class="cubic">
                        <h3>Forex</h3>

                        Our work is founded on a rigorous understanding of every client’s context.
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <img src="img/IMG_1778.png" width="100%" height="200" alt="" />
                    <div class="cubic">
                        <h3>Indices</h3>

                        Our consultants – hardware software engineers and skilled business managers.
                    </div>
                </div> -->
    </div>
</div>

<div class="container">
    <div class="row" style="margin-bottom:85px;">
        <div class="col-lg-3 small-cubic">
            <img src="img/page_quality1-60x60.png" alt="" />
            <h2>12647</h2>

            <span>Projects Completed</span>
        </div>

        <div class="col-lg-3 small-cubic">
            <img src="img/social1-60x60.png" alt="" />
            <h2>13</h2>

            <span>Team Members</span>
        </div>

        <div class="col-lg-3 small-cubic">
            <img src="img/trophy1-60x60.png" alt="" />
            <h2>128</h2>

            <span>Awards Winning</span>
        </div>

        <div class="col-lg-3 small-cubic">
            <img src="img/rocket1-60x60.png" alt="" />
            <h2>99%</h2>

            <span>Satisfied Customer</span>
        </div>
    </div>
</div>



<div class="polygon-placement center-text">
    <div class="polygon-background" style="padding: 40px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 live-news" style="text-align:left">
                    <h3>Live News</h3>
                    <div class="horizontal-bar" style="margin:0;"></div>

                    <ul style="margin-top:40px;height:400px;">




                        <?php
                            while ($news_updates->have_posts()) : $news_updates->the_post();
                            
                        ?>

                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>

                        <?php
                            endwhile;
                        ?>

                    </ul>



                </div>

                <div class="col-lg-4">

                    <a style="float:left" href="http://www.investing.com" target="_blank"><img
                            src="https://i-invdn-com.akamaized.net/logos/investingLogo-137x25.png"
                            alt="investing.com"></a>

                    <iframe class="investing-widget"
                        src="https://ssltsw.forexprostools.com?tabsLine=%23ba8432&lang=1&forex=1,2,3,5,7,9,10&commodities=8830,8836,8831,8849,8833,8862,8832&indices=175,166,172,27,179,170,174&stocks=334,345,346,347,348,349,350&tabs=1,2,3,4"
                        width="317"></iframe>

                    <div class="poweredBy" style="font-family:arial,helvetica,sans-serif; direction:ltr;"><span
                            style="font-size: 11px;color: #333333;text-decoration: none;">Technical Summary Widget
                            Powered by <a href="https://www.investing.com/" rel="nofollow" target="_blank"
                                style="font-size: 11px;color: #06529D; font-weight: bold;"
                                class="underline_link">Investing.com</a></span></div>
                </div>
            </div>
        </div>
    </div>



</div>




</div>





<div class="white">
    <div class=" container news-margin">
        <h2 style="text-align:center;margin-bottom:15px;">
            Trading Options
        </h2>

        <div class="horizontal-bar"></div>


        <div class="container" style="margin-top:100px">

            <div class="row trading">
                <div class="col-sm-12 col-md-4">


                    <div class="row">

                        <div class="col-1">
                            <div class="circle"><i class="fas fa-chart-line"></i></div>

                        </div>

                        <div class="col-auto">
                            &nbsp;&nbsp;
                        </div>

                        <div class="col-9">

                            <div class="app-desc">
                                <h3>Commodities</h3>
                                <div class="horizontal-bar"></div>

                                <span class="desc">
                                    Precious Metals and Energy include Gold, Silver, WTI and Brent Crude Oil.
                                    Soft Commodities with Coffee and Sugar.

                                    Live quote with comparative bid ask quotations, by International Licensed
                                    Liquidation Providers

                                    Start trading now with RFC platform now.
                                </span>

                            </div>

                        </div>
                    </div>



                </div>

                <div class="col-sm-12 col-md-4">


                    <div class="row">

                        <div class="col-1">
                            <div class="circle"><i class="fas fa-dollar-sign"></i></div>
                        </div>

                        <div class="col-auto">
                            &nbsp;&nbsp;
                        </div>

                        <div class="col-9">

                            <div class="app-desc">
                                <h3>Forex Trading</h3>
                                <div class="horizontal-bar"></div>
                                <span class="desc">
                                    Multi major currency pairs, cross pairs and exotic pairs. You will access to the
                                    forex spot market and trade direct with International Licensed Liquidation
                                    Providers.

                                    No dealing desk and extremely fast execution.
                                    24/6 customer support available.

                                    Start trading now with RFC platform now.</span>

                            </div>

                        </div>
                    </div>



                </div>

                <div class="col-sm-12 col-md-4">


                    <div class="row">

                        <div class="col-1">
                            <div class="circle"><i class="fas fa-handshake"></i></div>

                        </div>

                        <div class="col-auto">
                            &nbsp;&nbsp;
                        </div>

                        <div class="col-9">

                            <div class="app-desc">
                                <h3>Indices</h3>
                                <div class="horizontal-bar"></div>
                                <span class="desc">
                                    Provide you all major indices in market with competitive spreads and no dealing
                                    desk.

                                    Clients can now Buy or Sell 13 major stock indices, all with no commission and fast
                                    execution.

                                    Start trading now with RFC now.
                                </span>

                            </div>

                        </div>
                    </div>



                </div>

            </div>

        </div>

    </div>
</div>


<div style="background-color:#2C2523;">
    <div class="container">
        <div class="row get-professional">
            <div class="col-md-12 col-lg-8 contact-us">
                Get in Touch with One of Our Professionals
            </div>

            <div class="col-md-12 col-lg-4">
                <a href="#" class="a-no-decoration btn-callBack btn-contact-us">Contact Us Today</a>
            </div>
        </div>
    </div>
</div>





<?php get_footer(); ?>