
	<div id="container">
		<div class="row">
			<div class="col-md-3">
				<!-- dummy space -->
			</div>
			<!-- Tabs -->
			<div class="col-md-6">
                <div class="card">
                		<?php if($this->session->flashdata('err_msg')) { 
						echo '<div class="errmsg text-center">'.$this->session->flashdata('err_msg').'</div>';
						} ?>
                    <div class="card-body">
                        <ul class="tab-nav tn-justified tn-icon" role="tablist">
                            <li role="presentation" class="active">
                                <a class="col-sx-6" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                    Log In
                                </a>
                            </li>
                            <li role="presentation">
                                <a class="col-xs-6" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                    Sign Up
                                </a>
                            </li>
                        </ul>
                                
                        <div class="tab-content p-20">
                            <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">  

                                <form role="form" class="login-form">
	                                <div class="form-group fg-float">
			                            <div class="fg-line">
			                                <input type="text" name="email" class="email-input-login input-lg form-control fg-input">
			                                <label class="fg-label">Email address</label>
			                            </div><p><span class="errmsg-mail-login errmsg hidden">Please Enter a Valid Email</span></p>
			                        </div>
			                        <br>
	                                <div class="form-group fg-float">
			                            <div class="fg-line">
			                                <input type="password" name="password" class="password-input-login input-lg form-control fg-input">
			                                <label class="fg-label">Password</label>
			                            </div><p><span class="errmsg-password-login errmsg hidden">Please Enter a Valid Password</span></p>
			                        </div>
                                	<div class="form-group text-center">
	                                	<button id="login-btn" type="submit" class="btn btn-primary btn-sm m-t-10 submit-button" disabled="true" onclick="authenticate('login')">Login</button>
	                                </div>
	                            </form>
                            
                            </div>
                            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2">
                             
                                <form role="form" class="signup-form">
	                                <div class="row">
	                                	<div class="col-md-6">
		                                	<div class="form-group fg-float">
					                            <div class="fg-line">
					                                <input type="text" class="fname-input input-lg form-control fg-input" name="fname">
					                                <label class="fg-label">First Name</label>
					                            </div><p><span class="errmsg-fname errmsg hidden">Please Enter a Valid Name (minimum of three characters)</span></p>
					                        </div>
					                    </div>
					                    <div class="col-md-6">
		                                	<div class="form-group fg-float">
					                            <div class="fg-line">
					                                <input type="text" class="lname-input input-lg form-control fg-input" name="lname">
					                                <label class="fg-label">Last Name</label>
					                            </div><p><span class="errmsg-lname errmsg hidden">Please Enter a Valid Surname (minimum of three characters)</span></p>
					                        </div>
					                    </div>
				                    </div>
				                        <br>
				                    <div class="row">
					                    <div class="col-md-12">
			                                <div class="form-group fg-float">
					                            <div class="fg-line">
					                                <input type="text" class="email-input input-lg form-control fg-input" name="email">
					                                <label class="fg-label">Email address</label>
					                            </div><p><span class="errmsg-mail errmsg hidden">Please Enter a Valid Email</span></p>
					                        </div>
					                        <br>
			                                <div class="form-group fg-float">
					                            <div class="fg-line">
					                                <input type="password" class="password-input input-lg form-control fg-input" name="password">
					                                <label class="fg-label">Password</label>
					                            </div><p><span class="errmsg-password errmsg hidden">Password must be minimum of 8 characters long and no special characters allowed</span></p>
					                        </div>
					                        <br>
			                                <div class="form-group fg-float">
					                            <div class="fg-line">
					                                <input type="password" class="cpassword-input input-lg form-control fg-input" name="cpassword">
					                                <label class="fg-label">Confirm Password</label>
					                            </div><p><span class="errmsg-cpassword errmsg hidden">Passwords does not match</span></p>
					                        </div>
		                                	<div class="form-group text-center">
			                                	<button id="signup-btn" type="submit" class="btn btn-primary btn-sm m-t-10 submit-button" disabled="true" onclick="authenticate('signup')">Signup</button>
			                                </div>
			                            </div>
		                            </div>
	                            </form>
                                
                            </div>        
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            <!-- dummy space -->
			</div>

        </div>
    </div>