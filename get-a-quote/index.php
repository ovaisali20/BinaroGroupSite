<?php include("../includes/var.php") ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Get A Quote | Binaro</title>
        <?php include("../includes/compatibility.php") ?>
        <?php include("../includes/styles.php") ?>
    </head>
    <body class="footer-inner-hide">

        <?php include("../includes/header.php") ?>

        <section class="get-a-quote spacing__x bg-detail-1" style="background-image: url(assets/images/bg/bg-get-a-quote.jpg)">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="banner-text">
                            <h1 class="heading-style-1 before-none">let’s start <br />together</h1>
                            <p>tell us about your project</p>
                        </div>
                        <div class="tab-style-2">
                            <ul>
                                <li data-targetit="box-bi-group" class="active"><a href="javascript:;">Binaro Group</a></li>
                                <li data-targetit="box-bi-design"><a href="javascript:;">Binaro Design</a></li>
                                <li data-targetit="box-bi-dev"><a href="javascript:;">Binaro Development</a></li>
                                <li data-targetit="box-bi-media"><a href="javascript:;">Binaro Media</a></li>
                            </ul>
                        </div>
                        <div class="box-bi-group showfirst">
                            <form class="row" action="" method="POST">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="select-style-2">
                                            <option>Service 1</option>
                                            <option>Service 2</option>
                                            <option>Service 3</option>
                                            <option>Service 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="textarea-style-2" placeholder="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="submit-style-2" name="" value="Submit">
                                </div>
                            </form>
                        </div>
                        <div class="box-bi-design">
                            <form class="row" action="" method="POST">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Country">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="input-style-2" name="" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <select class="select-style-2">
                                            <option>Service 1</option>
                                            <option>Service 2</option>
                                            <option>Service 3</option>
                                            <option>Service 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="textarea-style-2" placeholder="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="submit-style-2" name="" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box">
                            <img src="assets/images/elements/element-contact-us.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <?php include("../includes/footer.php") ?>

        <!-- Default Popup -->
        <?php include("../includes/popup.php") ?>

        <!-- Scripts -->
        <?php include("../includes/scripts.php") ?>
    </body>
</html>