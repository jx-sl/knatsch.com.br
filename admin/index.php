		<section class="main">
			<h3>Knatsch Admin</h3>
			<p>Tem certeza que tu foi convidado para estar aqui?</p>

			<?php
				$screenOut;
				session_start();
				if(isset($_SESSION['jx-knatsch-admin'])){
					$screenOut =
							'<form name="addAgenda" action="add.php" method="POST">
								<input type="hidden" name="fuja-loco" value="fugiu">
								<input type="submit" value="Logout">
							 	<select name="select-page">
							 		<option name="agenda">Agenda</option>
							 		<option name="videos">Videos</option>
							 		<option name="imprensa">Imprensa</option>
							 		<option name="fotos">Fotos</option>
							 	</select>
							  </form>';

				}else{
					header("Location: login.php");
				}
				print $screenOut;
			?>
			<div id="content-admin"></div>
		</section>