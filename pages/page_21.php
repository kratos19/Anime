<?php 
	$utilizator = "root";
	$parola = "";
	$host = "localhost";
	$baza_de_date = "anime";
	

	$db = new PDO("mysql:host=localhost; dbname=$baza_de_date; charset=utf8" , $utilizator, $parola);

	$interogare="SELECT * FROM `anime`";
	$result=$db->query($interogare);
	$rezultate=$result->fetchAll(PDO::FETCH_ASSOC);
	//var_dump($rezultate); die();


	// Stergerea elementelor din tabela anime 
	if(isset($_GET['delete']) && is_numeric($_GET['delete']) ){
		$element_de_sters=$_GET['delete'];
		$interogare=" DELETE FROM `anime` WHERE id=$element_de_sters";
	 	$db->query($interogare);
	 	//header("Location: ".$_SERVER['PHP_SELF']);	
	}

	// Adaugarea elementelor in tabela anime
	if( isset($_POST['save']) && $_POST['save']='1234' )
	{
		$nume=isset($_POST['nume']) ? $_POST['nume'] : '';
		$statut=isset($_POST['statut']) ? $_POST['statut'] : '';
		$aparitie=isset($_POST['aparitie']) && is_numeric($_POST['aparitie']) ? $_POST['aparitie'] : 0;
		$episoade=isset($_POST['episoade']) && is_numeric($_POST['episoade']) ? $_POST['episoade'] : 0;
		$autor=isset($_POST['autor']) ? $_POST['autor'] : '';

		if($nume=="" && $statut=="")
		{
			die('Te rog sa adaugii un nume si un statut');
		}
		else
		{
			$interogare="INSERT INTO `anime` (`nume`, `statut`, `aparitie`, `episoade`, `autor`)
						 VALUES('$nume','$statut', $aparitie, $episoade, '$autor')";
			$db->query($interogare);
		}
		header("Location: ".$_SERVER['REQUEST_URI']);
	}
?>			

<div class='wrapper'>
	<div id="contact-form">
		<h1>
			<i class="fa fa-lock"></i>
			<span>Management anime-uri !</span>
		</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-angle-double-right"></i> Nume
						</div>
						<input type="text" name="nume" placeholder="Numeste un anime" value="<?php echo isset($filForm['nume'])? $filForm['nume']:''; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-angle-double-right"></i></i> Statut
						</div>
						<input type="text" name="statut" placeholder="ex: Finished sau On going " value="<?php echo isset($filForm['statut'])? $filForm['statut']:''; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-angle-double-right"></i></i> Aparitie
						</div>
						<input type="text" name="aparitie" placeholder="Aparitia anime-ului "  value="<?php echo isset($filForm['aparitie'])? $filForm['aparitie']:''; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-angle-double-right"></i></i> Episoade
						</div>
						<input type="text" name="episoade" placeholder="Numarul de episoade "  value="<?php echo isset($filForm['episoade'])? $filForm['episoade']: ''; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="form-text">
							<i class="fa fa-angle-double-right"></i> Autor
						</div>
						<input type="text" name="autor" placeholder="Creatorul anime-ului "  value="<?php echo isset($filForm['autor'])? $filForm['autor']: ''; ?>" required>
					</td>
				</tr>
				<tr>
					<td>
						<div id="testing"><input  type="submit" value="Trimite" /></div>
						<input type="hidden" name="save" value="1234" />
						<input  type="hidden" name="id" value="<?php echo isset($_GET['edit']) && is_numeric($_GET['edit'])? $_GET['edit']:0; ?>" />
					</td>
				</tr>
			</table>
		</form>
		<table>
					<thead>
						<tr>
							<th>
								Id
							</th>
							<th>
								Nume
							</th>
							<th>
								Statut
							</th>
							<th>
								Aparitie
							</th>
							<th>
								Episoade
							</th>
							<th>
								Autor
							</th>
							<th>
								Action
							</th>
						</tr>
					</thead>
					<tbody>
						<?php  foreach($rezultate as $info): ?> 
							<tr>
								<td>
									<?php echo $info['id']; ?> 
								</td>
								<td>
									<?php echo $info['nume'];?>
								</td>
								<td>
									<?php echo $info['statut'];?>
								</td>
								<td>
									<?php echo $info['aparitie'];?>
								</td>
								<td>
									<?php echo $info['episoade'];?>
								</td>
								<td>
									<?php echo $info['autor'];?>
								</td>
								<td>
									<a href="<?php echo $_SERVER['REQUEST_URI'], '&edit=', $info['id']; ?>">Editeaza</a>	
									<a href="<?php echo $_SERVER['REQUEST_URI'], '&delete=',$info['id']; ?>">Sterge</a>	
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
	</div>
</div>