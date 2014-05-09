		<section class="main">
			<h3>Knatsch Admin</h3>

			<?php
				session_start();
				if(isset($_SESSION['jx-knatsch-admin'])){
					header("Location: index.php");						
				}else{
					$screenOut = '<form name="login-form" action="validaLogin.php" method="POST">
									<label>Login</label><br>
									<input type="text" name="login" required><br>
									<label>Password</label><br>
									<input type="password" name="pass" required><br>
									<input type="submit" value="Login">
								  </form>';
				}
				print $screenOut;
			?>
		</section>