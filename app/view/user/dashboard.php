<?php require APPROOT .'/view/include/header.php';?>
	 <!-- .about-area start -->
    <div class="ship_background">
		<div class="container" style="margin-top: 100px;">
            <div class="row">
                <div class="col col-lg-12">
                    <div class="table-responsive" style="margin-top: 2px;">
  					<table class="table table-bordered table-condensed table-hover">
  						<tr style="font-family: 'Roboto';">
  							<th>trackinID</th>
  							<th>Sender</th>
  							<th>Receiver</th>
  							<th>Quantity</th>
  							<th>Nature</th>
  							<th>Destination</th>
  							<th>Current_location</th>
  							<th>Status</th>
  							<th>Departure</th>
  							<th>Arrival</th>
  							<th>Update</th>
  						</tr>

  						<?php foreach($data['shipment'] as $shipment) :?>
  						<tr>
							<td><?php echo $shipment->tracking_id;?></td>
  							<td><?php echo $shipment->sender;?></td>
  							<td><?php echo $shipment->receiver;?></td>
  							<td><?php echo $shipment->qgoods;?></td>
  							<td><?php echo $shipment->nature_of_goods;?></td>
  							<td><?php echo $shipment->destination;?></td>
  							<td><?php echo $shipment->current_location;?></td>
  							<td><?php echo $shipment->status;?></td>
  							<td><?php echo $shipment->ddate;?></td>
  							<td><?php echo $shipment->adate;?></td>
  							<td><a href="<?php echo URLROOT;?>/user/update/<?php echo $shipment->id;?>"><span class="fa fa-arrow-up" style="color: #14614f;margin-left: 20px;"></span></a></td>
  						</tr>
  						<?php endforeach;?>
  					</table>
					</div>
				</div>
               
            </div>
        </div>
    </div>
    <!-- about-area end -->
<?php require APPROOT .'/view/include/footer.php';?>