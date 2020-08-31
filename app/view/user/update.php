<?php require APPROOT .'/view/include/header.php';?>
               <!--  <img src="<?php echo URLROOT;?>/image/call-to-action-bg.jpg" alt class="slider-bg"> -->
               <div class="ship_background">
				<div class="container" style="margin-top: 100px;">
                    <div class="row">
                        <div class="col col-lg-12">
                        	<div class="col-lg-6 col-md-6 col-sm-6"><h1 style="text-align: center; color: #fff;">Update Shipment</h1></div>
                            <form role="form" method="POST" action="<?php echo URLROOT;?>/user/update/<?php echo $data['id']; ?>">
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['track_id'];?>" name="track_id" placeholder="TrackingID">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['sender'];?>" name="sender" placeholder="Sender">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['receiver'];?>" name="receiver" placeholder="Receiver">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['qgoods'];?>" name="qgoods" placeholder="quantity of goods">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['ngoods'];?>" name="ngoods" placeholder="nature of goods">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['destination'];?>" name="destination" placeholder="destination">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['clocation'];?>" name="clocation" placeholder="current location">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="text" class="form-control" value="<?php echo $data['status'];?>" name="status" placeholder="status">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="date" class="form-control" value="<?php echo $data['ddate'];?>" name="ddate" placeholder="date of departure">
                            	</div>
                            	<div class="form-group col-lg-6 col-md-6 col-sm-6" style="opacity: 0.7;">
                            		<input type="date" class="form-control" value="<?php echo $data['adate'];?>" name="adate" placeholder="date of arrival">
                            	</div>
                            	<div class=" form-group col-lg-3 col-md-4 col-sm-6">
                                    <input type="submit" value="Submit" class="btn btn-primary btn-block" style="background: #14614f; border:inherit;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                </div>
<?php require APPROOT .'/view/include/footer.php';?>
