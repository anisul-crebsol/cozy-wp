<h1 class="section-title" id="contact-agency">Contact Agency</h1>
<form class="form-style">
	<div class="col-sm-6">
		<input type="text" name="Name" placeholder="Name" class="form-control required fromName" />
	</div>
	
	<div class="col-sm-6">
		<input type="email" name="Email" placeholder="Email" class="form-control required fromEmail"  />
	</div>
	
	<div class="col-sm-12">
		<input type="text" name="Subject" placeholder="Subject" class="form-control required subject"  />
		<textarea name="Message" placeholder="Message" class="form-control required"></textarea> 
	</div>
	
	
	<script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'custom',
			custom_theme_widget: 'recaptcha_widget'
		};
	</script>

	<div id="recaptcha_widget" class="col-sm-12">
		<div id="recaptcha_image"></div>
		<div class="recaptcha_only_if_incorrect">Incorrect! Please try again.</div>

		<span class="recaptcha_only_if_image">Enter the word(s) above:<a href="javascript:Recaptcha.reload()"><i class="fa fa-refresh"></i></a></span>
		<span class="recaptcha_only_if_audio">Enter the numbers you hear:</span>

		<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="form-control" />

		<div class="recaptcha_only_if_image recaptcha_switch_audio"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
		<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>

		<div><a href="javascript:Recaptcha.showhelp()">Help</a></div>
	</div>

	<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6LdJgOcSAAAAAEHjgPlKAGCE7e2WlfUiFrNks2hO"></script>
	<noscript>
		<iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdJgOcSAAAAAEHjgPlKAGCE7e2WlfUiFrNks2hO"></iframe><br>
		<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
		<input type="hidden" name="recaptcha_response_field" value="manual_challenge" />
	</noscript>
	
	<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
	
	
	<div class="center">
		<button type="submit" class="btn btn-default-color submit_form"><i class="fa fa-envelope"></i> Send Message</button>
	</div>
</form>