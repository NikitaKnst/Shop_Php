<?php
ob_start();
$title='Login or Register';
?>
<div class="container" >
    <div class="row">
        <div>
		<?php
		//вывод отчета о входе
			if(isset($resultLogIn) && $resultLogIn==true){
				echo '<p style="color:green;">Login succeded. Hello, '.$_SESSION['name'].'!</p>';
			}
			elseif(isset($resultLogIn) && $resultLogIn==false){
				echo '<p style="color:red;">Login errors</p>';
			}
		?>
            <div class="login_form"><!--login form-->
				<form action="loginResult" method="POST" id="login_form">
					<div>
					<label class="login_label">Email address</label><br>
					<input class="login_input" type="email" name="email"  placeholder="Email Address" required />
					</div>
					<div>
					<label class="login_label">Password</label><br>
					<input class="login_input" type="password" name="password"  placeholder="Password" required />
					</div>
					<div class="form-group">
					<button class="btn btn-success" type="submit" class="btn btn-default" name="login">Login</button>
					</div>
				</form>
            </div><!--/login form-->
        </div>
    </div>
</div>


<?php
$content= ob_get_clean();
include_once 'view/templates/layout.php';
