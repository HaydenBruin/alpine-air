<?php include("_init.php"); ?>
<?php include("assets/inc/head.php"); ?>
<?php include("assets/inc/header.php"); ?>

<div class="section hero">
    <a href="/"><div class="logo"></div></a>
</div>

<div class="section services">
    <div class="container">
        <div class="row">
                <?php $titles = array('Auto Air Conditioning Re-Gassing','Repairs, Maintance & Annual Servicing','Odour Elimination'); ?>
                <?php $descs = array(
                        'Make sure your air conditioning unit is running at peak effiency',
                        'Ensure your units are all running as smoothly as possible',
                        'Ensure your units elimate foul odour this summer'
                    ); ?>
                <?php for($i = 0; $i < 3; $i++) { ?>
                <div class="col-md-4">
                    <a href="#">
                        <div class="service" style="background: url(/assets/images/hero1.jpg) no-repeat; background-size: cover; background-position: center;">
                            <div class="overlay">
                                <div class="title"><?php echo $titles[$i]; ?></div>
                                <div class="text">
                                    <p><?php echo $descs[$i]; ?></p>
                                </div>
                                <div class="read">Read More</div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="section about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>About Us</h3>
                        </div>
                        <div class="col-md-8">
                            <p class="large">Say goodbye to sweltering Summers and foggy windscreens when you're out on the open road!</p>
                            <p>Alpine Air NZ is your specialist mobile business servicing residential and commercial clients for all your Automotive Air Conditioning needs.  That's because we have allowed the locals to say goodbye to hot sticky summers and hello to cool air conditioned bliss in the comfort of their vehicle!</p>
                            <p>Here at Alpine Air NZ, we are all about ensuring the comfort and relaxation of driving your vehicle in cool conditions by offering the best in air conditioning repairs and maintenance services in town.</p>
                            <p>The safety aspect is very important to us at Alpine Air NZ too. Having your air conditioning in tip top shape throughout the wet months will demist your windscreen in a jiffy!</p>
                            <p>Our experienced team can repair, maintain and annually service your air conditioner on-site at your place or work at a time that suits you. And you can expect that reliability and professionalism will always ring true with us.</p>
                            <p>We can travel to any location that suits you, bringing you expertise, coupled with the best in customer service and service delivery!</p>
                        </div>
                        <div class="col-md-4">
                            <img src="/assets/images/front-view-two-vans-alpine-air.jpg">
                            <img src="/assets/images/side-view-alpine-air-van.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d404159.36670985096!2d176.2542874!3d-37.6845712!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce8687c2d87282a6!2sAlpine+Air+Tauranga+Ltd!5e0!3m2!1sen!2snz!4v1508788498604" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="section locations">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 location">
                <div class="overlay-img" style="background-image: url(/assets/images/waikato.jpg)"></div>
                <div class="overlay-bg">
                    <h4 class="title">Waikato</h4>
                    <h5 class="subtitle">We service Hamiltion / Waikato</h5>

                    <div class="buttons">
                        <a href="#" class="button phone">Phone Us</a>
                        <a href="#" class="button email">Email Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 location">
                <div class="overlay-img" style="background-image: url(/assets/images/tauranga.jpg)"></div>
                <div class="overlay-bg">
                    <h4 class="title">Tauranga</h4>
                    <h5 class="subtitle">We service Tauranga / Mount Maunganui</h5>

                    <div class="buttons">
                        <a href="#" class="button phone">Phone Us</a>
                        <a href="#" class="button email">Email Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 location">
                <div class="overlay-img" style="background-image: url(/assets/images/wellington.jpg)"></div>
                <div class="overlay-bg">
                    <h4 class="title">Wellington</h4>
                    <h5 class="subtitle">We service Wellington</h5>

                    <div class="buttons">
                        <a href="#" class="button phone">Phone Us</a>
                        <a href="#" class="button email">Email Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("assets/inc/footer.php"); ?>