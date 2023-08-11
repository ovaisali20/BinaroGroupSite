<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Our Blogs</title>
        <?php include("../includes/compatibility.php") ?>
        <?php include("../includes/styles.php") ?>
    </head>
    <body>

        <?php include("../includes/header.php") ?>

        <section class="banner style-2 blog-banner bg-color-primary bg-detail-1" style="background-image: url(assets/images/bg/banner-1.jpg);">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <div class="abt-text-block mb-4">
                            <h2 class="heading-style-1">binaro news room</h2>
                            <p>Welcome to the Binaro News Room, your go-to source for all the latest updates and happenings related to our company.</p>
                        </div>
                        <form class="row" action="" method="POST">
                            <div class="col-lg-8">
                                <div class="form-group position-relative">
                                    <i class="fas fa-search icon-tbr-center"></i>
                                    <input type="text" class="input-style-2" name="" placeholder="Search News">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select class="select-style-2">
                                        <option>Category 1</option>
                                        <option>Category 1</option>
                                        <option>Category 1</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div classa="col-lg-6 col-md-6 col-md-12">
                        <div class="abt-img-block">
                            <img src="assets/images/elements/element-blog.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="spacing__x">
            <div class="marquee-text">
                <marquee width="120%" direction="right" scrollamount="12"><h4>news <span class="word-gap"></span>room news <span class="word-gap"></span>room news <span class="word-gap"></span>room news <span class="word-gap"></span>room news <span class="word-gap"></span>room news <span class="word-gap"></span>room</h4></marquee>
                <div class="intro-text-block mb-80">
                    <h2>binaro <br /> <span class="head-style2">latest</span><br />news</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-list-box style-2">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/featured.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">Elon Musk Shows Some Buyer’s Remorse With Twitter</h5>
                                <p class="description">The billionaire wavers on his proposed purchase, probably because his pockets are feeling a little lighter.</p>
                                <span class="date">Wednesday, 1 March 2023</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/1.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">Google News re-opens in Spain after eight-year shutdown</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/2.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">AAA study finds automaker infotainment more distracting than Apple CarPlay, A..</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/3.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">ChatGPT curse or blessing in education? Insights from philosophers</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/2.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">Google News re-opens in Spain after eight-year shutdown</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/3.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">AAA study finds automaker infotainment more distracting than Apple CarPlay, A..</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-list-box">
                            <div class="img-box">
                                <img src="assets/images/mix/blog/1.jpg">
                            </div>
                            <div class="text-box">
                                <h5 class="title">ChatGPT curse or blessing in education? Insights from philosophers</h5>
                                <span class="date">Wednesday, 1 March 2023</span>
                                <a href="javascript:;" class="category">Technology</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("../includes/cta-1.php") ?>

        <?php include("../includes/module-section.php") ?>

        <!-- Footer -->
        <div class="pad-top">
            <?php include("../includes/footer.php") ?>
        </div>

        <!-- Default Popup -->
        <?php include("../includes/popup.php") ?>

        <!-- Scripts -->
        <?php include("../includes/scripts.php") ?>
    </body>
</html>