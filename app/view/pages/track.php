<?php require APPROOT .'/view/include/header.php';?>
<!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="<?php echo URLROOT;?>/image/air/5.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>Track your Shipment here</span> <span>with Your Tracking Number.</span></h2>
                            <div class="btns">
                                <div class="btn-style"><a href="#">Contact us now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
	<!-- start track-section -->   
    <section class="track-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="track">
                        <h3>Enter Your Email and Track Your Cargo/Shipment</h3>
                        <div><em><?php flashdanger('message');?></em></div>
                        <div class="tracking-form">
                            <div class="row">
                            <form method="POST" action="<?php echo URLROOT;?>/pages/track">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" style="opacity: 0.7;">
                                    <input type="text" class="form-control" value="" name="email" placeholder="Email">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" style="opacity: 0.7;">
                                    <input type="text" class="form-control" value="" name="track" placeholder="Tracking_Number">
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <button type="submit">Track Your Cargo</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end track-section -->

<?php require APPROOT .'/view/include/footer.php';?>