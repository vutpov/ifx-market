<?php get_header(); ?>

<div class="center-text white my-margin-bottom">
    <h2>
        <?php single_post_title(); ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
            <li class="breadcrumb-item"><a href="#">Capabilities</a></li>
            <li class="breadcrumb-item active" aria-current="page">National Cyber Security</li>
        </ol>
    </nav>
</div>

<?php the_post(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="my-post">
                <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
                <br />
                <br />
                <?php the_content(); ?>
                <div class="video-desc">
                    <?php the_date(); ?>
                    <div class="share-list">
                        <a href="#" class="circle-share"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <a href="#" class="tag">Capabilities</a>
                <a href="#" class="tag">Case Study</a>
                <br>
                <br>
            </div>
        </div>

        <div class="col-md-12 col-lg-4" style="padding:0">
            <div style="background-color:white;padding:15px 45px 45px;">
               
                <form action="" method="POST" style="margin-top:45px" class="search-form">
                    <input type="text" name="" id="" placeholder="Search For">
                    <br>
                    <div style="height: 8px;"></div>
                    <a href="#">Search &nbsp;<i class="fas fa-arrow-right"></i></a>
                </form>
                <div class="latest-post">
                    <div class="post-title">
                        Latest Posts
                    </div>
                    <a href="#">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="/img/markus-spiske-507983-700x338.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-9">
                                <span>Blanket Purchase Agreements</span>
                                <h4>July 21, 2017</h4>
                            </div>
                            <div class="col-12">
                                <div class="post-sep"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="/img/designers-meeting-to-discuss-new-ideas-P4AYTUL-600x394.jpg" alt="" class="img-fluid">

                            </div>
                            <div class="col-sm-9">
                                <span>Analyzing Top Energy Trends</span>
                                <h4>July 21, 2017</h4>
                            </div>
                            <div class="col-12">
                                <div class="post-sep"></div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="/img/bitcoin-golden-coin-with-financial-chart-and-PE27F4Q-600x394.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-9">
                                <span>Commitment to Sustainability</span>
                                <h4>July 21, 2017</h4>
                            </div>
                            <div class="col-12">
                                <div class="post-sep"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div style="text-align:center;padding:8px;" class="desc">
                    <img src="/img/shutterstock_110174156-01.jpg" alt="" class="rounded-circle img-fluid" width="200"><br><br> Siobhan Lavery is president and chief executive officer of Blockchain Inc., a global firm that brings bold thinking in financial,
                    digital solutions, engineering, and cyber to Blockchain corporations.
                </div>
                <div class="subscribe">
                    <i>
                        <h3>Subscribe to my newsletter</h3>
                    </i>
                    <span class="desc">
                        Twice a month, you will receive new Freebies!
                    </span>
                    <div style="height:14px;"></div>
                    <form action="" method="post">
                        <input type="email" name="" id="" placeholder="Your email address">
                        <div style="height:14px;"></div>
                        <input type="submit" value="Subscribe" class="btn-blue"></button>
                    </form>
                </div>
                <div class="tag-cloud">
                    <h3>Tag Cloud</h3>
                    <a href="#" class="tag">Capabilities</a><a href="#" class="tag">Commercial</a>
                    <a href="#" class="tag">Case Study</a><a href="#" class="tag">Culture</a>
                    <a href="#" class="tag">Contact Vehicle</a><a href="#" class="tag">Product</a>
                    <a href="#" class="tag">Publication</a><a href="#" class="tag">Report</a>
                </div>
                <div class="row social-icon-list social-gray">
                    <a href="#">
                        <div class="social align-icon">
                            <i class="fab fa-twitter social-icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="social align-icon">
                            <i class="fab fa-google-plus-g social-icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="social align-icon">
                            <i class="fab fa-facebook-f social-icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="social align-icon">
                            <i class="fab fa-pinterest-p social-icon"></i>
                        </div>
                    </a>
                    <a href="#">
                        <div class="social align-icon">
                            <i class="fab fa-instagram social-icon"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>