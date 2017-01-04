<div class="modal-content" id="contactus">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round" style="color:#fff !important;"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Contact Us</h1>
	</div>
	<div class="modal-body">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-4 text-center">
					<h3 class="locations-h">
						<i class="ion-contactus ion-ios-location" aria-hidden="true"></i>
						VIT University, Vellore
					</h3>
				</div>
				<div class="col-xs-12 col-md-4 text-center">
					<h3 class="locations-h">
						<i class="ion-contactus ion-email" aria-hidden="true"></i>
						teamjaabaz@gmail.com
					</h3>
				</div>
				<div class="col-xs-12 col-md-4 text-center">
					<h3 class="locations-h">
						<i class="ion-contactus ion-ios-telephone" aria-hidden="true"></i>
						+91 9825 797199
					</h3>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="form-container">
				<form method="post" action="contact.php">
						<div class="col-md-6">
						<div class="text-field-name">
							<input type="text" title="name" required autocomplete="off" name="name" placeholder="Name*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Name*';}"> 
						</div>
						<div class="text-field-name">
							<input type="email" title="Your Email" required autocomplete="off" name="email" placeholder="Email*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Email*';}">
						</div>
						<div class="text-field-subject">
							<input type="text" title="Subject" required autocomplete="off" name="subject" placeholder="Subject*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Subject*';}">
						</div>
						</div>
						<div class="text-field-message col-md-6">
							<textarea name="message" title="Message" required autocomplete="off" placeholder="Message*" onfocus="if(this.placeholder == 'Message') this.placeholder='';" onblur="if(this.placeholder == '') this.placeholder='Message*';"></textarea>
						</div>
						<div class="text-field-submit col-md-offset-4 col-md-4">
							<input type="submit" value="Submit"> 
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footerr text-center">
	<hr class="white-hr">
		<button type="button" class="btn btn-default font-black" data-dismiss="modal">Close</button>
	</div>
</div>
