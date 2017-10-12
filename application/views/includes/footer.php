	 	
<!-- Modal Structure -->
  <div id="rsvpModal" class="modal modal-fixed-footer">
    <div class="modal-content">
      <center><h4>RSVP </h4></center>
      <!-- <p>A bunch of text</p> -->

      <div class="row">
      	 <h5>Are You Comming?</h5>
      	 <button class="btn btn-yes-no">YES</button>
      	 <button class="btn btn-yes-no">NO</button>
      </div>

      <div class="row">
      	<h5>How Many Guests?</h5>
      	<div class="guestNumber">
      		<ul>
      			<a href="#!"><li>1</li></a>
      			<a href="#!"><li>2</li></a>
      			<a href="#!"><li>3</li></a>
      			<a href="#!"><li>4</li></a>
      			<a href="#!"><li>5</li></a>
      			<a href="#!"><li>6</li></a>
      			<a href="#!"><li>7</li></a>
      			<a href="#!"><li>8</li></a>
      			<a href="#!"><li>9+</li></a>
      		</ul>
      	</div>
      </div>

      <div class="row">
      	<div class="arrival">
      		<div class="col m6 s6">
      			<h5>Arrival</h5>
      			<div class="input-field">
      				<input type="text" class="datepicker">
      				<label>Select Date</label>
      			</div>
      			<div class="input-field">
      				<input type="text" class="timepicker">
      				<label>Select Time</label>
      			</div>
      			<div class="arrivalBy">
      				<ul>
	      				<i class="fa fa-2x fa-car" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-bus" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-train" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-plane" aria-hidden="true"></i>
	      			</ul>
      			</div>
      		</div>
      	</div>
      	<div class="departure">
      		<div class="col m6 s6">
      			<h5>Departure</h5>
      			<div class="input-field">
      				<input type="text" class="datepicker">
      				<label>Select Date</label>
      			</div>
      			<div class="input-field">
      				<input type="text" class="timepicker">
      				<label>Select Time</label>
      			</div>
      			<div class="departureBy">
      				<ul>
	      				<i class="fa fa-2x fa-car" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-bus" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-train" aria-hidden="true"></i>
	      				<i class="fa fa-2x fa-plane" aria-hidden="true"></i>
	      			</ul>
      			</div>
      		</div>
      	</div>
      </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>






	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>