<!-- start page-loader -->
    <div class="page-loader">
        <div class="page-loader-inner">
            <div class="inner"></div>
        </div>
    </div>
<!-- header-area start -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                        <ul class="d-flex account_login-area">
                            
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-12 col-lg-6">
                        <div class="row">
                            <div class="col-lg-7 col-md-6">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area"  id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-9 col-sm-9 col-9">
                        <div class="logo">
                            <a href="<?php echo URLROOT;?>"><i class="fi flaticon-ship" aria-hidden="true"></i>Seagull Shipping</a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="nav_mobile_menu">
                            <?php if(isset($_SESSION['id']) && ($_SESSION['role'] == 1)) :?>
                                <ul>
                                    <li><a href="<?php echo URLROOT;?>/user/dashboard">Home</a></li>
                                    <li><a href="<?php echo URLROOT;?>/user/shipment">Shipment</a></li>
                                </ul>
                            <?php else:?>
                                <ul>
                                    <li><a href="<?php echo URLROOT;?>">Home</a></li>
                                    <li><a href="<?php echo URLROOT;?>/pages/about">About</a></li>
                                    <li><a href="<?php echo URLROOT;?>/pages/service">Services</a></li>
                                    <li><a href="<?php echo URLROOT;?>/pages/track">Track</a></li>
                                    <li><a href="<?php echo URLROOT;?>/pages/contact">Contact</a></li>
                                </ul>
                            <?php endif;?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-3 col-sm-3 col-3 search">
                        
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->