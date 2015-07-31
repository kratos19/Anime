<div class='wrapper'>
	<div id="contact-form" class="clearfix">
	    <h1>Contacteaza-ne!</h1>
	    <h2>Pentru a ne contacta ! </h2>
	    <form method="post" action="">
	        <label for="name">Nume: <span class="required">*</span></label>
	        <input type="text" id="name" name="name" value="" placeholder="Stancioiu Sergiu" required="required" autofocus="autofocus" />
	         
	        <label for="email">Adresa de Email: <span class="required">*</span></label>
	        <input type="email" id="email" name="email" value="" placeholder="s.sergiu96@gmail.com" required="required" />
	         
	        <label for="telephone">Telefon: </label>
	        <input type="tel" id="telephone" name="telephone" value="" />
	         
	        <label for="enquiry">Intrebare: </label>
	        <select id="enquiry" name="enquiry">
	            <option value="general">Anime</option>
	            <option value="sales">Manga</option>
	        </select>
	         
	        <label for="message">Mesaj: <span class="required">*</span></label>
	        <textarea id="message" name="message" placeholder="Scrie un mesaj !" required="required"></textarea>
	         
	        <span id="loading"></span>
	        <p id="req-field-desc"><span class="required">*</span> indica un camp obligatoriu</p>
	        <input type="hidden" name="trimite-mail"	/>
	        <input type="submit" value="Trimite !" id="submit-button" />
	    </form>
	</div>
</div>