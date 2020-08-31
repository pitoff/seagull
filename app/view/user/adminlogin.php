<?php require APPROOT .'/view/include/header.php';?>
	<!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2" style="margin-bottom: 1px;">
        <div class="hero-slider">
            <div class="slide">
                <img src="<?php echo URLROOT;?>/image/air/5.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                        <?php flash('message');?>
                        	<div class="col-lg-6 col-md-6 col-sm-6"><h1 style="text-align: center; color: #fff;">Login</h1></div>
                            <form role="form" method="POST" action="<?php echo URLROOT;?>/user/adminlogin">
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['username'];?>" name="username" placeholder="Username">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="password" class="form-control" value="<?php echo $data['password'];?>" name="password" placeholder="Password">
                            	</div>
                            	<div class=" form-group col-lg-3 col-md-4 col-sm-6">
                                    <input type="submit" value="Login" class="btn btn-primary btn-block" style="background: #14614f; border:inherit;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
<?php require APPROOT .'/view/include/footer.php';?>