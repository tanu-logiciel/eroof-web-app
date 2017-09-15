<?php include("header.php"); ?>
<div class="body-bg-wrapper">
	<div class="bg-overlay"></div>
	<div class="container content-container">
		<section>
			<div class="middle-container">
				<div class="middle-container-inner login-outer-wrap">
					<div class="container-form-outer container login-container">
						<div class="row">
							<div class="col-sm-12 login-form-space">
								<img src="assets/images/Logo.png" alt="logo">
							</div>
						</div>
						<!-- Form Start- -->
						<div class="row fields-wrap">
							<div class="col-sm-12">
								<div class="input-fields text-left">
									<input type="text" class="bottom-border-input form-control" placeholder="Username / Email" />
								</div>
							</div>
						</div>
						<div class="row fields-wrap-pass">
							<div class="col-sm-12">
								<div class="input-fields text-left">
									<input type="Password" class="bottom-border-input form-control" placeholder="Password" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 forgot-pass text-right">
								<a href="#"><p>Forgot Password?</p></a>
							</div>
						</div>
						<button type="button" class="btn btn-secondary btn-lg btn-big btn-red custom-btn sign-in">Sign In</button>
					</div>
				</div>
				<!-- /Form- -->
				<p class="outer-line-login">Don't have an account?<a href="#"><span> Sign Up</span></a></p>
			</div>
		</section>
	</div>
</div>
<?php include("footer.php"); ?>