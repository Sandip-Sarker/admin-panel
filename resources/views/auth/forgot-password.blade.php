
<!doctype html>
<html lang="en" dir="ltr"> 
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

      @include('backend.partial.style')

    </head>

    
        <body class="ltr login-img">

        
        <!-- Switcher-->
        <!-- Switcher -->
        <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="form_holder sidebar-right1">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="swichermainleft text-center">
                                <div class="p-3 d-grid gap-2">
                                    <a href="https://laravel8.spruko.com/noa" class="btn ripple btn-primary mt-0" target="_blank">View Demo</a>
                                    <a href="https://themeforest.net/item/noa-laravel-admin-template/38978033" class="btn ripple btn-secondary" target="_blank">Buy Now</a>
                                    <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-pink" target="_blank">Our
                                        Portfolio</a>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>LTR and RTL VERSIONS</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">LTR Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch23" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch23" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">RTL Version</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                    id="myonoffswitch24" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch24" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Light Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex">
                                            <span class="me-auto">Light Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-color-picker color-primary-light"
                                                    value="#8FBD56" id="colorID" type="color"
                                                    data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id7="transparentcolor" name="lightPrimary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Dark Theme Style</h4>
                                <div class="skin-body">
                                    <div class="switch_section">
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Theme</span>
                                            <p class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                    id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                            </p>
                                        </div>
                                        <div class="switch-toggle d-flex mt-2">
                                            <span class="me-auto">Dark Primary</span>
                                            <div class="">
                                                <input class="wpx-30 h-30 input-dark-color-picker color-primary-dark"
                                                    value="#8FBD56" id="darkPrimaryColorID"
                                                    type="color" data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                    data-id3="primary" data-id8="transparentcolor" name="darkPrimary">
                                            </div>
                                        </div>
                                        <div class="switch-toggle">
                                            <span class="">Background Image</span>
                                            <div class="mt-1">
                                                <a class="bg-img bg-img1" href="javascript:void(0);"><img
                                                        src="assets/images/media/bg-img1.jpg" alt="Bg-Image" id="bgimage1"></a>
                                                <a class="bg-img bg-img2" href="javascript:void(0);"><img
                                                        src="assets/images/media/bg-img2.jpg" alt="Bg-Image" id="bgimage2"></a>
                                                <a class="bg-img bg-img3" href="javascript:void(0);"><img
                                                        src="assets/images/media/bg-img3.jpg" alt="Bg-Image" id="bgimage3"></a>
                                                <a class="bg-img bg-img4" href="javascript:void(0);"><img
                                                        src="assets/images/media/bg-img4.jpg" alt="Bg-Image" id="bgimage4"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swichermainleft">
                                <h4>Reset All Styles</h4>
                                <div class="skin-body">
                                    <div class="switch_section my-4">
                                        <button class="btn btn-danger btn-block" id="customresetAll" type="button">Reset All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Switcher -->
        <!-- Switcher-->

            <!-- GLOBAL-LOADER -->
            <div id="global-loader">
                <img src="{{asset('backend')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>

    
                
			<!-- PAGE -->
            	<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col mx-auto text-center">
						<a href="index.html">
							<img src="assets/images/brand/logo.png" class="header-brand-img" alt="">
						</a>
					</div>
					<div class="col-12 container-login100">
						<div class="row">
							<div class="col col-login mx-auto">
								<form class="card shadow-none" method="post">
									<div class="card-body">
										<div class="text-center">
											<span class="login100-form-title">
												Forgot Password
											</span>
											<p class="text-muted">Enter the email address registered on your account</p>
										</div>
										<div class="pt-3" id="forgot">
											<div class="form-group">
												<label class="form-label" for="eMail">E-Mail:</label>
												<input class="form-control" id="eMail" placeholder="Enter Your Email" type="email">
											</div>
											<div class="submit">
												<a class="btn btn-primary d-grid" href="index.html">Submit</a>
											</div>
											<div class="text-center mt-4">
												<p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="#">Send me Back</a></p>
											</div>
										</div>

									</div>
									<div class="card-footer">
										<div class="d-flex justify-content-center my-3">
											<a href="javascript:void(0)" class="social-login  text-center me-4">
												<i class="fa fa-google"></i>
											</a>
											<a href="javascript:void(0)" class="social-login  text-center me-4">
												<i class="fa fa-facebook"></i>
											</a>
											<a href="javascript:void(0)" class="social-login  text-center">
												<i class="fa fa-twitter"></i>
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

            @include('backend.partial.script')
    </body>


<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
</html>
