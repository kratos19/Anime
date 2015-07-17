<div class='wrapper'>
	<div id="contact-form">
		<h1>
			<i class="fa fa-envelope"></i>
			<span>Contacteaza-ne !</span>
		</h1>
		<form action="<?php echo URI, 'index.php?page=page_4'; ?>" method="post">
			<table>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-user"></i> Nume
						</div>
						<input type="text" nume"Nume" placeholder="Numele tau este ?" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-user"></i> Prenume
						</div>
						<input type="text" nume"Prenume" placeholder="Prenumele tau este ?" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-envelope-o"></i> Email
						</div>
						<input type="email" nume"Email" placeholder="Email-ul tau este ?" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-comment"></i> Comentariu
						</div>
						<textarea nume="Comentariu" id="comentariu" placeholder="Scrie un comentariu !"></textarea>
					</td>	
				</tr>
				<tr>
					<td>
						<input id="trimite" type="submit"   value="Trimite " >
					</td>
				</tr>	
			</table>
		</form>
	</div>
</div>