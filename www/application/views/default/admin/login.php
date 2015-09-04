<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">    
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
		<div class="panel panel-primary" >
			<div class="panel-heading">
				<div class="panel-title">Authorization</div>
			</div>     
			<div style="padding-top:30px" class="panel-body" >
				<form class="form-horizontal" action="" method="post">
					<?php if (isset($errors[ 'common' ])) : ?>
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
							<a href="#" class="close" data-dismiss="alert">×</a>
							<?php echo $errors[ 'common' ] ?>
						</div>
					<?php endif; ?>
                                
					<div class="control-group pull-right clearfix">
						<?php if (isset($errors[ 'login' ])) : ?>
							<div class="alert alert-error">
								<a href="#" class="close" data-dismiss="alert">×</a>
								<?php echo $errors[ 'login' ] ?>
							</div>
						<?php endif; ?>
						<label class="control-label" for="alogin">Email or Username</label>
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login" type="text" class="form-control" name="login" value="" placeholder="Type your email or username">                                        
						</div>
					</div>
	 
					<div class="control-group pull-right">
						<?php if (isset($errors[ 'password' ])) : ?>
							<div class="alert alert-error">
								<a href="#" class="close" data-dismiss="alert">×</a>
								<?php echo $errors[ 'password' ] ?>
							</div>
						<?php endif; ?>
						<label class="control-label" for="apassword">Password</label>                         
						<div style="margin-bottom: 25px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="password" type="password" class="form-control" name="password" placeholder="Type your password">
						</div>
					</div>
					<div class="input-group">
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="1"> Remember me
							</label>
						</div>
					</div>

					<!-- Button -->
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
							<button type="submit" id="btn-login" href="#" class="btn btn-success">Login  </button>
						</div>
					</div>
				</form>
			</div>
        </div>
    </div>
</div>
 