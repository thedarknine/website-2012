<div id="Title"><img src="resources/titles/contact.png" alt="Contact" /></div>

<div id="Contact">
	<form action="send.html" method="post" id="contactform">
		<input type="hidden" name="action" value="sendMail" />
            <p class="form">
                <label for="contactName">Nom</label>
                <em>*</em><input id="contactName" name="contactName" size="25" class="validate[required] text-input" type="text" />
            </p>
            <p class="form">
                <label for="contactMail">Adresse mail</label>
                <em>*</em><input id="contactMail" name="contactMail" size="25" class="validate[required,custom[email]] text-input" type="text" />
            </p>
            <p class="form">
                <label for="contactMessage">Message</label>
                <em>*</em><textarea id="contactMessage" name="contactMessage" cols="50" rows="9"  class="validate[required]"></textarea>
            </p>

				<input type="submit" value="Envoyer" class="submit" />
	</form>
<br />
</div>

<div id="Me">
	<h2>Mon profil</h2>
	<a href="http://fr.linkedin.com/in/carolinenoyer"><img src="resources/home/linkedin-cnoyer.png" /></a><br />
   <a href="http://www.viadeo.com/fr/profile/carolinenoyer"><img src="resources/home/viadeo-cnoyer.png" /></a>

</div>

<div class="cleaner"></div>