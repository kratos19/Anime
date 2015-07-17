<?php if(!defined('APP')) return false; ?>

<div class="wrapper home-wrapper">
	<h1>Ce sunt anime-urile?</h1>
	<p>
		Anime (din cuvantul japonez anime, la randul lui o abreviere a cuvantului englez animation, insemnand animatie, pluralul corect fiind anime-uri) reprezinta orice film de animatie produsa in Japonia sau originara din aceasta. La originea acestui gen stau benzile desenate japoneze numite manga.
		Cu toate ca anime-ul este considerat uneori in mod eronat un "gen" (precum comedia, drama, etc.), in realitate este o forma de arta care include toate genurile intalnite in literatura si cinema.
	</p>
	<div id="acasa-slider">
		<div id="hero">

			<div id="next">&rang;</div><!--end next-->
			<div id="prev">&lang;</div><!--end prev-->

			<div id="slider">

				<div class="items">
					<div class="img">
						<img src="images/sliderImg/image1.jpg">	
					</div><!--end img-->
					<div class="info">
						<h2>All Anime Heroes</h2>
						<p>Personajele principale din lumea anime. <a href="<?php echo createUrl(2)?>">Citeste mai mult...</a></p>
					</div><!--end info-->

				</div><!--end items-->
				<div class="items">
					<div class="img">
						<img src="images/sliderImg/image2.jpg">	
					</div><!--end img-->
					<div class="info">
						<h2>Spirited Away</h2>
						<p>Personajul principal Chihiro impreuna cu Haku. <a href="<?php echo createUrl(19)?>">Citeste mai mult...</a></p>
					</div><!--end info-->

				</div><!--end items-->
				<div class="items">
					<div class="img">
						<img src="images/sliderImg/image3.jpg">	
					</div><!--end img-->
					<div class="info">
						<h2>Attack On Titan - Mikasa</h2>
						<p>Actiunea se desfajoara in jurul lui Eren si sora lui Mikasa. <a href="<?php echo createUrl(9)?>">Citeste mai mult...</a></p>
					</div><!--end info-->

				</div><!--end items-->
				<div class="items">
					<div class="img">
						<img src="images/sliderImg/image4.jpg">	
					</div><!--end img-->
					<div class="info">
						<h2>Bleach</h2>
						<p>Povestea incepe cu aparitia subita a shinigami-ului Rukia Kuchiki in camera lui Ichigo.<a href="<?php echo createUrl(7)?>">Citeste mai mult...</a></p>
					</div><!--end info-->
					</div><!--end items-->
				<div class="items">
					<div class="img">
						<img src="images/sliderImg/image5.jpg">	
					</div><!--end img-->
					<div class="info">
						<h2>Naruto Shippuden</h2>
						<p>Naruto Shippuuden este continuarea seriei originale Naruto.<a href="<?php echo createUrl(5)?>">Citeste mai mult...</a></p>
					</div><!--end info-->

				</div><!--end items-->					

			</div><!--end slider-->

		</div><!--End Hero-->
	</div>
	<p id="secound-paragraf-index">
		In Japonia filmele de animatie sunt foarte indragite, semnificativ fiind faptul ca in anul 2001 filmul anime Spirited Away (Sen to Chihiro no Kamikakushi) a intrecut filmul Titanic. 
		Initial anime-urile erau desenate manual, insa in ultimii ani tehnicile asistate de calculator practic s-au generalizat. 
		Tehnicile anime sunt utilizate in seriale televizate, productii cinematografice si video, jocuri pentru computer, publicitate etc. 
		In ce priveste continutul, formatul anime este utilizat in toate genurile fictionale.
	</p>
	<div id="home-box">
		<h3>
			Studio Ghibli Films
		</h3>
		<div class="boxs">
			<div class="box">
				<div class="box-inner">
					<a href="<?php echo createUrl(15)?>">
						<img src="images/imagine1.jpg"/>
					</a>
					<a href="<?php echo createUrl(15)?>">
						<p>
							Howl's Castle
						</p>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="box-inner">
					<a href="<?php echo createUrl(19)?>">
						<img src="images/imagine2.jpg">
					</a>
					<a href="<?php echo createUrl(19)?>">
						<p>
							Spirited Away
						</p>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="box-inner">
					<a href="<?php echo createUrl(14)?>">
						<img src="images/imagine3.jpg">
					</a>
					<a href="<?php echo createUrl(14)?>">
						<p>
							Princess Mononoke
						</p>
					</a>
				</div>
			</div>
			<div class="box">
				<div class="box-inner">
					<a href="<?php echo createUrl(11)?>">
						<img src="images/imagine4.jpg">
					</a>
					<a href="<?php echo createUrl(11)?>">
						<p>
							Totoro
						</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
