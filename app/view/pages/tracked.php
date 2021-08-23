<?php require APPROOT .'/view/include/header.php';?>
<!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="<?php echo URLROOT;?>/image/air/5.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>See below</span><span>Your shipment details.</span></h2>
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
                <div class="col-lg-12">
                    <div class="track">
                        <h3>Shipment from <?= $data['usertrack']->sender;?></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered" style="color: white; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; text-align:center;">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Receiver</th>
                                        <th>Mail</th>
                                        <th>destination</th>
                                        <th>Address</th>
                                        <th>Location</th>
                                        <th>Quantity</th>
                                        <th>Nature</th>
                                        <th>Status</th>
                                        <th>Arrival</th>
                                    </tr>
                                </thead>    

                                <tbody>
                            
                                    <tr>
                                        <td><?= $data['usertrack']->tracking_id?></td>
                                        <td><?= $data['usertrack']->receiver?></td>
                                        <td><?= $data['usertrack']->email?></td>
                                        <td><?= $data['usertrack']->destination?></td>
                                        <td><?= $data['usertrack']->receiver_addr?></td>
                                        <td><?= $data['usertrack']->current_location?></td>
                                        <td><?= $data['usertrack']->qgoods?></td>
                                        <td><?= $data['usertrack']->nature_of_goods?></td>
                                        <td><?= $data['usertrack']->status?></td>
                                        <td><?= $data['usertrack']->adate;?></td>
                                    </tr>
                                   
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end track-section -->

    <!-- map section -->
    	<section class="map-section">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<!-- <div class=" col-lg-12 mapouter">
                            
                            <div class="gmap_canvas">
                                <iframe width = "100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $data['usertrack']->current_location;?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://yt2.org">youtube to mp3</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps embedded api</a>
                                    <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
                            </div>
                            
                        </div> -->
    				</div>
    			</div>
    		</div>
    	</section>
    <!-- end map -->
<?php require APPROOT .'/view/include/footer.php';?>