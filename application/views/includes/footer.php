	 	
<!-- Modal Structure -->
  <div id="rsvpModal" class="modal"> <!-- modal-fixed-footer -->
    <div class="modal-content">
      <center><h4>RSVP </h4></center>
      <!-- <p>A bunch of text</p> -->

      <div class="row" id="areYouComming">
      	 <div class="col s12 m12"><h5>Are You Comming?</h5></div>
      	 <div class="col s12 m12">
	      	 <button id="btnYes" class="btn btn-yes-no">YES</button>
	      	 <button id="btnNo" class="btn btn-yes-no">NO</button>
	      </div>
      </div>
	
	<div class="" id="RsvpDetails">
		<button class="btn btnBack">BACK</button>
      <div class="row">
      	
      	<div class="col s12 m5"> <h5>How Many Guests?</h5></div>
      	<div class="guestNumber col s12 m7">
      		<ul>
      			<a href="#!" class="selected"><li>1</li></a>
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
      		<div class="col m6 s6 row">
      			<h5>Arrival</h5>
      			<div class="input-field col s12 m6" id="arrival_date">
      				<input type="text" class="datepicker" placeholder="10 Oct, 17">
      			</div>
      			<div class="input-field col s12 m6" id="arrival_time">
      				<input type="text" class="timepicker" placeholder="09:00AM">
      			</div>
      			<div class="arrivalBy center" id="arrivalRout">
      				<ul>
      				<a class="selectedRout" data-value='car' href="#!"><i class="fa fa-2x fa-car" aria-hidden="true"></i></a>
      				<a href="#!" data-value='bus'><i class="fa fa-2x fa-bus" aria-hidden="true"></i></a>
      				<a href="#!" data-value='train'><i class="fa fa-2x fa-train" aria-hidden="true"></i></a>
      				<a href="#!" data-value='plane'><i class="fa fa-2x fa-plane" aria-hidden="true"></i></a>
	      			</ul>
      			</div>
      		</div>
      	</div>


      	
      	<div class="departure">
      		<div class="col m6 s6 row">
      			<h5>Departure</h5>
      			<div class="input-field col s12 m6" id="DepartureDate">
      				<input type="text" class="datepicker" placeholder="10 Oct, 17">
      			</div>
      			<div class="input-field col s12 m6" id="DepartureTime">
      				<input type="text" class="timepicker" placeholder="09:00AM">
      			</div>
      			<div class="departureBy center" id="DepartureRout">
      				<ul>
	      				<a href="#!" class="selectedRout" data-value="car"><i class="fa fa-2x fa-car" aria-hidden="true"></i></a>
	      				<a href="#!" data-value="bus"><i class="fa fa-2x fa-bus" aria-hidden="true"></i></a>
	      				<a href="#!" data-value="train"><i class="fa fa-2x fa-train" aria-hidden="true"></i></a>
	      				<a href="#!" data-value="plane"><i class="fa fa-2x fa-plane" aria-hidden="true"></i></a>
	      			</ul>
      			</div>
      		</div>
      	</div>
      </div>

      <div class="row input-field">
      	<center><button class="btn btn-submit" id="yesSubmitBtn">Submit</button></center>
      </div>

  </div>

<!-- Not Coming are -->
  <div id="notComming" class="">
	<button class="btn btnBack">BACK</button>
	<div class="row">
		<center><h5>Why i'm not Comming?</h5></center>
	</div>  	
	<div>
		<div class="container">
			<form>
				<div class="row">
					<div class="input-field">
						<div class="input-field col s12">
				         	<textarea id="bestWhises" class="materialize-textarea"></textarea>
           					<label for="last_name">Best Wishes...</label>
				        </div>
					</div>
				</div>
				<div class="row">
					<div class="input-field">
						<div class="input-field col s12">
				         	<textarea id="reasonFor" class="materialize-textarea"></textarea>
           					<label for="last_name">I,m not Comming, Bcause...</label>
				        </div>
					</div>
				</div>

				<div class="row">
					<div class="input-field">
						<button type="button" class="btn btn-submit" id="noSubmit-btn"> Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

  </div>

    </div>
   <!--  <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div> -->
  </div>


<script type="text/javascript">
	$(function(){
		$("#yesSubmitBtn").on("click",function(){
			rsvpYes();
		});

		$("#noSubmit-btn").on("click",function(){
			rsvpNo();
		});

		$('#btnYes').on("click",function(){
			$('#areYouComming').hide();
			$('#RsvpDetails').show();
		});

		$('.guestNumber a').click(function(){
			$('.guestNumber a').css('background','#eee');
			$('.guestNumber a').css('color','#394962');
			$(this).css('background','#394962');
			$(this).css('color','#fff');
			$('.guestNumber a').removeClass('selected');
			$(this).addClass('selected');
		});

		$('.arrivalBy a').click(function(){ 
			$('.arrivalBy a').css('color', '#7d7d7d');
			$('.arrivalBy a').css('border','none');
			$(this).css('color', '#394962');
			$(this).css('border-bottom','2px solid #394962');
			$('.arrivalBy a').removeClass('selectedRout');
			$(this).addClass('selectedRout');
		});

		$('.departureBy a').on("click",function(){
			$('.departureBy a').css('color','#7d7d7d');
			$('.departureBy a').css('border','none');
			$(this).css('color','#394962');
			$(this).css('border-bottom','2px solid #394962');
			$('.departureBy a').removeClass('selectedRout');
			$(this).addClass('selectedRout');
		});


		/*Not Comming*/

		$("#btnNo").on("click",function(){
			$('#areYouComming').hide();
			$('#notComming').show();
		});

		/*back Button*/

		$(".btnBack").on("click",function(){
			$('#areYouComming').show();
			$('#RsvpDetails').hide();
			$('#notComming').hide();
		});

		$('#bestWhises').val('');
		  $('#bestWhises').trigger('autoresize');
		

		$('#reasonFor').val('');
		  $('#reasonFor').trigger('autoresize');
		
		});

	function rsvpYes(){
		var submitData = {
			"guest_count" 		: $(".guestNumber a.selected li").html(),
			"Arrival_date"		: $("#arrival_date input.datepicker").val(),
			"Arrival_time" 		: $("#arrival_time input.timepicker").val(),
			"ArrivalRout"		: $("#arrivalRout a.selectedRout").data('value'),
			"Departure_date"	: $("#DepartureDate input.datepicker").val(),
			"Departure_time" 	: $("#DepartureTime input.timepicker").val(),
			"DepartureRout"		: $("#DepartureRout a.selectedRout").data('value')
		};
		console.log(submitData);
	};

	function rsvpNo(){
		var submitData={

			"bestWhises" : $("#bestWhises").val(),
			"reasonFor"  : $("#reasonFor").val()
		};
		console.log(submitData);
	}

</script>



	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>