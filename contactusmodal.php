<div class="modal-content" id="contactus">
	<div class="modal-headerr" style="padding: 10px;">
		<br>
		<button type="button" class="close" data-dismiss="modal" style="color:#fff !important;"><i class="ion-close-round" style="color:#fff !important;"></i>&nbsp;&nbsp;</button>
		<h1 class="modal-title text-center">Contact Us</h1>
	</div>
	<div class="modal-body">
		<div class="container-contactus-modal">
			<div class="row">
				<div class="contactus-person-box col-md-3 col-xs-12">
					<h2 class="text-center underline-head">Faculty Coordinator
						<span class="underline"></span>
					</h2>
					<h1 class="text-center" style="color:#dc092f;">Prof. S. Senthil Kumar</h1>
					<h2 class="text-center person-box-phone">+91 9894676688</h2>
				</div>
				<div class="contactus-person-box col-md-3 col-xs-12">
					<h2 class="text-center underline-head">Technical Department
						<span class="underline"></span>
					</h2>
					<h1 class="text-center" style="color:#dc092f;">Satwik Darivemula<br><span class="contactus-position">(Team Captain)</span></h1>
					<h2 class="text-center person-box-phone">+91 9948071246</h2>
					<!-- <h1 class="text-center" style="color:#dc092f;">Som Dwivedi<br>(<span class="contactus-position">Team Co-Captain</span>)</h1>
					<h2 class="text-center person-box-phone">+91 9486476740</h2> -->
				</div>
				<div class="contactus-person-box col-md-3 col-xs-12">
					<h2 class="text-center underline-head">Marketing Department
						<span class="underline"></span>
					</h2>
					<h1 class="text-center" style="color:#dc092f;">Shadhir Haja<br><span class="contactus-position">(Team Manager)</span></h1>
					<h2 class="text-center person-box-phone">+91 9003730044</h2>
				</div>
				<!-- <div class="contactus-person-box col-md-3 col-xs-12">
					<h2 class="text-center underline-head">Join Jaabaz family
						<span class="underline"></span>
					</h2>
					<h1 class="text-center" style="color:#dc092f;">Deva Harsha<br><span class="contactus-position">(Public Relation Lead)</span></h1>
					<h2 class="text-center person-box-phone">+91 9944579079</h2>
				</div> -->
			</div>
			<br>
			<div class="row">
				<div class="col-md-8">
					<section class="text-center">
						<div class="google-maps-div-wrap">
							<div class="overlay" title="click to zoom"></div>
							<div id="embedded-map-display" style="height:100%; width:100%;max-width:100%;">
								<iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=VIT+University,+Vellore,+Tamil+Nadu,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
							</div>
							<a class="embed-map-code" rel="nofollow" href="http://www.szablonypremium.pl/website" id="make-map-information">motywy html</a>
						</div>
						<script src="https://www.szablonypremium.pl/google-maps-authorization.js?id=65d4e24c-8508-5507-f23c-d5aaad35bc87&c=embed-map-code&u=1475047957" defer="defer" async="async"></script>

					</section>
				</div>
				<div class="col-md-4">
					<div class="form-container">
						<h3 class="text-center"><a href="mailto:teamjaabaz.vit@gmail.com">teamjaabaz.vit@gmail.com</a></h3>
						<h2 style="color:#dc092f;" class="text-center">We’d love to hear from you</h2>

						<div class="text-field-name">
							<input type="text" title="name" required autocomplete="off" name="name" id="name" placeholder="Name*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Name*';}">
						</div>
						<div class="text-field-name">
							<input type="email" title="Your Email" required autocomplete="off" name="email" id="email" placeholder="Email*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Email*';}">
						</div>
						<div class="text-field-subject">
							<input type="text" title="Subject" required autocomplete="off" name="subject" id="subject" placeholder="Subject*" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Subject*';}">
						</div>

						<div class="text-field-message">
							<textarea name="message" id="message" title="Message" required autocomplete="off" placeholder="Message*" onfocus="if(this.placeholder == 'Message') this.placeholder='';" onblur="if(this.placeholder == '') this.placeholder='Message*';"></textarea>
						</div>

						<div class="text-field-submit">
							<button class="submit-but has-spinner" onclick="send_mail();" data-style="zoom-in" id="contact-form-submit"><span class="ladda-label">Submit</span></button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footerr text-center">
		<hr class="white-hr">
		<button type="button" class="btn btn-default font-black" data-dismiss="modal">Close</button>
		<br>
	</div>
</div>
<script type="text/javascript">
	$(".google-maps-div-wrap").click(function() {
		$(".google-maps-div-wrap .overlay").fadeOut();
	});
	$(".google-maps-div-wrap").mouseleave(function() {
		$(".google-maps-div-wrap .overlay").fadeIn();
	});
</script>