		<section class="main">
			<h3>Knatsch Admin</h3>
			<p>Tem certeza que tu foi convidado para estar aqui?</p>

			<?php
				session_start();
				$screenOut = '<form name="login-form" action="pages/2sde4er.php" method="POST">
								<label>Login</label><br>
								<input type="text" name="login" required><br>
								<label>Password</label><br>
								<input type="password" name="password" required><br>
								<input type="submit" value="Login">
							  </form>';
				if(isset($_SESSION['jx-knatsch-admin'])){
					header("Location: home.php")
					$screenOut='<h2>FUDEU, agora tu aacessou!!!</h2><br>
							<script src="media/js/jquery.min.js"></script>
							<script>
								function setScreenContent(str){
									var out = "<form name=\"logout-form\" action=\"pages/2sde4er.php\" method=\"POST\">";
									switch(str){
										case "agenda":
											out+="1";
										case "videos":
											out+="2";
										case "imprensa":
											out+="3";
										case "fotos":
											out+="4";
										default:
											out+="5";
									}
									out += "</form>";
									return out;
								}
								$(function(){
									$( "select" ).change(function () {
									    var str = "";
									    $( "select option:selected" ).each(function() {
									      str=$(this).attr("name");
									    });
									    $("#content-admin").text( setScreenContent(str) );
									  })
									  .change();
								});
							</script>
							<form name="logout-form" action="pages/2sde4er.php" method="POST">
								<input type="hidden" name="fuja-loco" value="fugiu">
								<input type="submit" value="Logout">
							</form>
							 	<select name="select-page">
							 		<option name="agenda">Agenda</option>
							 		<option name="videos">Videos</option>
							 		<option name="imprensa">Imprensa</option>
							 		<option name="fotos">Fotos</option>
							 	</select>
							  </form>';

				}
				print $screenOut;
			?>
			<div id="content-admin"></div>
		</section>