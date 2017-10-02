

<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="#">IFA</a>
	<a class="navbar-brand" href="#">Navbar w/ text</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			</li>
			</ul>
			<span class="navbar-text">
			Navbar text with an inline element
			</span>
		</div>
	</nav>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarText">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Features</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Pricing</a>
		</li>
		</ul>
		<span class="navbar-text">
		Navbar text with an inline element
		</span>
	</div>
</nav>

		<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="/login">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Please Login</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">E-Mail Address</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="text" name="email" class="form-control" id="email"
                                   placeholder="you@example.com" required autofocus>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> Example error message
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember"
                                   type="checkbox" >
                            <span style="padding-bottom: .15rem">Remember me</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
					<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                </div>
            </div>
        </form>
    </div>
	
		<section id="login">
			<div class="container">
				<div class="row justify-content-md-center">
				<!-- <div class="row"> -->
					<div class="col-xs-12">
						<div class="form-wrap">
						<h1>Connectez-vous avec votre adresse mail</h1>
							<form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
								</div>
								<div class="form-group">
									<label for="key" class="sr-only">Password</label>
									<input type="password" name="key" id="key" class="form-control" placeholder="Password">
								</div>
								<div class="checkbox">
									<span class="character-checkbox" onclick="showPassword()"></span>
									<span class="label">Show password</span>
								</div>
								<input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
							</form>
							<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
							<hr>
						</div>
					</div> <!-- /.col-xs-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</section>

		<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true">×</span>
							<span class="sr-only">Close</span>
						</button>
						<h4 class="modal-title">Recovery password</h4>
					</div>
					<div class="modal-body">
						<p>Type your email account</p>
						<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
<div class="container">
	<form class="form-horizontal" role="form" method="POST" action="/login">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h2>Please Login</h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="form-group has-danger">
					<label class="sr-only" for="email">E-Mail Address</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
						<input type="text" name="email" class="form-control" id="email"
								placeholder="you@example.com" required autofocus>

					</div>
				</div>
			</div>
			<!-- colonne message d'erreur -->
			<div class="col-md-3">
				<div class="form-control-feedback">
					<span class="text-danger align-middle">
						<!-- mettre le message d'erreur d'identifiant
						<i class="fa fa-close"></i> Example error message -->
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="form-group">
					<label class="sr-only" for="password">Password</label>
					<div class="input-group mb-2 mr-sm-2 mb-sm-0">
						<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
						<input type="password" name="password" class="form-control" id="password"
								placeholder="Password" required>
					</div>
				</div>
			</div>
			<!-- colonne message d'erreur  -->
			<div class="col-md-3">
				<div class="form-control-feedback">
					<span class="text-danger align-middle">
					<!-- Put password error message here -->    
					</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="padding-top: .35rem">
				<div class="form-check mb-2 mr-sm-2 mb-sm-0">
					<label class="form-check-label">
						<input class="form-check-input" name="remember"
								type="checkbox" >
						<span style="padding-bottom: .15rem">Remember me</span>
					</label>
				</div>
			</div>
		</div>
		<div class="row" style="padding-top: 1rem">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
				<a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
			</div>
		</div>
	</form>
</div>

<!-- Fenetre pour l'oubli de mot de passe  -->
<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

		<!-- <footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<p>Page © - 2014</p>
						<p>Powered by <strong><a href="http://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a></strong></p>
					</div>
				</div>
			</div>
		</footer> -->

	<div ng-controller='loginController'>
	<div ng-controller='accueilController'>
	<!-- <div ng-controller='loginController'>
>>>>>>> accueil
		{{data.test}}
		<button ng-click="getlist()">ok</button>
	</div> -->
