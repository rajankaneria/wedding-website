	 	
<!-- Modal Structure -->
  <div id="rsvpModal" class="modal"> <!-- modal-fixed-footer -->
    <div class="modal-content">
      <center><h4>RSVP </h4></center>
      <!-- <p>A bunch of text</p> -->

      <div class="row" id="GuestId">
      	<div class="container">
      		<!-- <div class="row"></div> -->
      		<center><h5>Welcome Guest,</h5></center>
      		<div>
      			<form>
      				<div class="input-field">
      					<input type="text" id="guest_name" name="full_name" placeholder="Full Name" required="required">
      				</div>
      				<div class="input-field">
      					<input type="text" id="guest_mobile" name="mobile" placeholder="Mobile" required="required" pattern="[0-9]" maxlength="10">
      				</div>
      				<div class="btn-area">
      					<center>
      						<button type="button" class="btn btnBack" id="btnBackAreYouComing">BACK</button>
      						<input type="button" name="" value="Next" class="btn btnGuestId" id="btnGuestId">
      					</center>
      				</div>
      			</form>
      		</div>
      	</div>
      </div>

      <!-- OTP -->

      <div class="row" id="GuestOTP">
      	<div class="container">
      		<center><h5>Enter OTP</h5></center>
      		<div>
      			<form>
      				<div class="input-field">
      					<input type="text" id="Otp" name="Otp" placeholder="Enter OTP" required="required" maxlength="4">
      				</div>
      				<div class="btn-area">
      					<center>
      						<button  type="button" class="btn btnBack" id="btnGuestOtp">BACK</button>
      						<input type="button" name="" value="Next" class="btn btnGuestId" id="GuestOtp">
      					</center>
      				</div>
      			</form>
      		</div>
      	</div>
      </div>


      <div class="row" id="selectSide">
      	<div class="container">
      		<center><h5>Whom are you related</h5></center>
      		<div class="row" id="activePerson">
      				<div class="slectSide-img-area" id="brideSide">
      				  <a href="#!" id="selectBride" data-value='bride'><img src="<?php echo base_url(); ?>html/images/female.jpeg" class="responsive-img" data-profile-id='20'>
      				  	<div class="brideName">
      				  		<h6>YESHA <span>KOTADIA</span></h6>
      				  	</div>
      				  </a>
      				</div>
      				<div class="slectSide-img-area" id="groomSide">
      				  <a href="#!" id="selectGroom" data-value='groom'><img src="<?php echo base_url(); ?>html/images/male.jpeg" class="responsive-img" data-profile-id='21'>
      				  <div class="groomName">
      				  		<h6>RISHABH <span>SHETH</span></h6>
      				  	</div>
      				  </a>
      				</div>
      			</div>
  			<div class="btn-area">
  					<center>
  						<button type="button" class="btn btnBack" id="btnBackSelectSide">BACK</button>
  						<input type="button" name="" class="btn btnSelectSide" id="btnSelectSide" value="Next">
  					</center>
  				</div>
      	</div>
      </div>

      <!-- Are You Comming? -->
      <div class="row" id="areYouComming">

      	 <div class="col s12 m12">
      	 	<!-- <div class="row"><button class="btn btnBack" id="btnBackAreYouComing">BACK</button></div> -->
      	 	<center><h5>Are You Coming?</h5></center></div>
      	 <div class="col s12 m12">
	      	 <button type="button" id="btnYes" class="btn btn-yes-no">YES</button>
	      	 <button type="button" id="btnNo" class="btn btn-yes-no">NO</button>
	      </div>
      </div>
	
	<div class="" id="RsvpDetails">
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
      			<div id="ArrivalPNR">
      				<div class="input-field">
      					<input type="text" name="pnrNo" placeholder="PNR No.">
      				</div>
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
      			<div id="DeparturePNR">
      				<div class="input-field">
      					<input type="text" name="pnrNo" placeholder="PNR No.">
      				</div>
      			</div>

      		</div>
      	</div>
      </div>

      <div class="row">
      	<div class="col s12 m6">
      		<div class="selectEvents" id="slectEvent">
				<div class="input-field col s12">
				    <select multiple id="selectEvent">
				      <option value="" disabled selected>Select Events</option>
				      <option value="1">Check-in & lunch</option>
				      <option value="2">Carnival of love</option>
				      <option value="3">Sangeet Sandhya</option>
				      <option value="3">Ganesh Sthapan, Mandap, Pithi</option>
				      <option value="3">Wedding Procession</option>
				      <option value="3">Hast Melap</option>
				      <option value="3">Check Out</option>
			    	</select>
			    	<label>Select Events</label>
			  	</div>
			</div>
		</div>
      	<div class="col s12 m6">
      		<a href="#!" onclick="$('#photoIdUpload').click()" class="btn btn-full" style="width: 100%;">Upload Photo ID</a>
      		<div style="display: none;"><input type="file" id="photoIdUpload" /></div>
      	</div>
      	
      </div>

      <div class="row input-field">
      	<center>
      		<button type="button" class="btn btnBack" id="btnBackRsvp">BACK</button>
      		<button type="button" class="btn btn-submit" id="yesSubmitBtn">Submit</button>
      	</center>
      </div>

  </div>

<!-- Not Coming are -->
  <div id="notComming" class="">
	<div class="row">
		<center><h5>Why i'm not Coming?</h5></center>
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
           					<label for="last_name">I,m not Coming, Bcause...</label>
				        </div>
					</div>
				</div>

				<div class="row">
					<div class="input-field">
						<center>
						<button type="button" class="btn btnBack" id="btnNotComing">BACK</button>
						<button type="button" class="btn btn-submit modal-action modal-close" id="noSubmit-btn"> Submit</button>
						</center>
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


<!-- WHISHES Modal -->
<div id="whisheModal" class="modal whishMdalYes">
    <div class="modal-content">
	  	<div id="thankUforWhishes">
	  		<div class="container center">
	  			<img src="<?php echo base_url(); ?>html/images/best-whishes.jpg" class="responsive-img">
	  		</div>
	  	</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" id="closModal">Close</a>
    </div>
  </div>

<!-- yesSubmitBtn -->


<script type="text/javascript">
	var base_url;
	$(function(){
		base_url = $("#base_url").val();
		$("#noSubmit-btn").on("click",function(){
			$("#areYouComming").show();
			$("#whisheModal").modal("open");
		});

		$("#yesSubmitBtn").on("click", function(){
			rsvpYes();
		});

		$('#closModal').on("click", function(){
			$('#areYouComming').show();
			$('#thankUforWhishes').hide();
			$('#RsvpDetails').hide();
			$("#whisheModal").modal('close');
		});

		 $('.modal').modal();

		$("#noSubmit-btn").on("click",function(){
			rsvpNo();
		});

		$('#btnYes').on("click",function(){
			$('#areYouComming').hide();
			$('#GuestId').show();
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


		/*Guest id*/
		$('#btnGuestId').click(function(){
			var guestname = $("#guest_name").val();
			var guestmobile = $("#guest_mobile").val();

			if(guestname == "" || guestname == ""){
				alert("Please enter your name");
			}else if(isNaN(guestmobile) || guestmobile.length!=10 || guestmobile==""){
				alert("Please enter a valid mobile number!");
			}else{
				//@TODO send OTP 
				$("#btnGuestId").val("Sending...");
				$.post(base_url+"ajax/sendOTP",{mobile:guestmobile,guestname:guestname},function(data){
					$('#GuestId').hide();
					$('#GuestOTP').show();
					$("#btnGuestId").val("Next");
				});
			}
		});


		/*Guest Otp*/

		$('#GuestOtp').click(function(){
			//@TODO verify otp that hase been sent
			var otp = $("#Otp").val();
			var mobile = $("#guest_mobile").val();
			if(otp=="" || isNaN(otp) || otp.length!=4){
				alert("Please enter valid OTP");
			}else{
				$("#GuestOtp").val("Verifying...");
				$.post(base_url+"ajax/verifyOTP",{otp:otp,mobile:mobile},function(data){
					if(data == "verified"){
						$('#GuestOTP').hide();
						$('#selectSide').show();
						$("#GuestOtp").val("Next");
					}else{
						$("#GuestOtp").val("Next");
						alert("Verification Failed");
					}
					
				});
			}
			
		});

		$('#btnGuestOtp').click(function(){
			$('#GuestOTP').hide();
			$('#GuestId').show();
		});
		/*optGuest Btn */

		/*Select Groom / Bride*/
		$('#btnSelectSide').click(function(){
			if($("#brideSide .responsive-img.active").length==0 && $("#groomSide .responsive-img.active").length==0){
				alert("Please select who are you related");
			}else{
				$('#selectSide').hide();
				$('#RsvpDetails').show();
			}
		});


		/*btn selectSide*/

		$('#btnBackSelectSide').click(function(){
			$('#selectSide').hide();
			$('#GuestOTP').show();
		});
		
		/*are u Comimg*/
		$('#btnBackAreYouComing').click(function(){
			$('#GuestId').hide();
			$('#areYouComming').show();
		});

		/*btn rsvp*/
		$('#btnBackRsvp').click(function(){
			$('#RsvpDetails').hide();
			$('#areYouComming').show();
		});

		/*Not Comming*/
		$("#btnNotComing").on("click",function(){
			$('#notComming').hide();
			$('#areYouComming').show();
		});

		$("#btnNo").on("click",function(){
			$('#areYouComming').hide();
			$('#notComming').show();
		});

		/*back Button*/
/*
		$(".btnBack").on("click",function(){
			$('#areYouComming').show();
			$('#RsvpDetails').hide();
			$('#notComming').hide();
		});*/


		/*Not Comming DialogBox*/

		$('#noSubmit-btn').click(function(){
			$('#notComming').hide();
			$('#thankUforWhishes').fadeIn(700);

		});

		$('#bestWhises').val('');
		  $('#bestWhises').trigger('autoresize');
		

		$('#reasonFor').val('');
		  $('#reasonFor').trigger('autoresize');
		
		});

		/*ACTIVE Persone*/
		$('#activePerson a img').click(function(){
			$('#activePerson a img').removeClass('active');
			$(this).addClass('active');
		});


		/*Multiple Select*/





	function rsvpYes(){
		var errorFlag = 0;
		var mobile = $("#guest_mobile").val();
		var wedding_id = 8;
		var submitData = {
			"wedding_id" : wedding_id,
			"profile_id" : $("#selectSide .responsive-img.active").data("profile-id"),
			"guest_count" : $(".guestNumber a.selected li").html(),
			"arriving_on" : $("#arrival_date input.datepicker").val()+" "+$("#arrival_time input.timepicker").val(),
			"arriving_by" : $("#arrivalRout a.selectedRout").data('value'),
			"departing_on" : $("#DepartureDate input.datepicker").val()+" "+$("#DepartureTime input.timepicker").val(),
			"departing_by"	: $("#DepartureRout a.selectedRout").data('value'),
			"event_access" : "[6],[7],[8]",
			"attending" : "yes"
		};
		

		if(submitData.Arrival_date == "" || submitData.Arrival_time == "" || submitData.Departure_date == "" || submitData.Departure_time == ""){
			errorFlag = 1;
			alert("Please select arrival and departure details");
		}

		$("#yesSubmitBtn").val("Processing...");
		if(errorFlag == 0){
			var base_url = $("#base_url").val();
			$.post(base_url+"ajax/rsvp",{rsvpData:submitData,mobile:mobile,wedding_id:wedding_id},function(data){
				$("#areYouComming").show();
				$('#thankUforWhishes').css('display','block');
				$(".whishMdalYes").modal("open");
				$("#yesSubmitBtn").val("Submit");
			});

		}
		
	};

	function rsvpNo(){
		var submitData={
			"wishes" : $("#bestWhises").val(),
			"reason"  : $("#reasonFor").val()
		};
		var mobile = $("#guest_mobile").val();
		var wedding_id = 8;
		$.post(base_url+"ajax/rsvp",{rsvpData:submitData,mobile:mobile,wedding_id:wedding_id},function(data){
				$("#areYouComming").show();
				$('#thankUforWhishes').css('display','block');
				$(".whishMdalYes").modal("open");
		});
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