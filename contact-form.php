<form method="POST" id="contactForm" name="contactform" action="contact-form-handler.php" role="form"> 
    <fieldset>
        <legend><h3>Contact Form</h3></legend>
        <div class="form-group">
            <label for="name" id="name_label">Name</label><br />
            <input type="text" name="name" id="name" class="text-input col-sm-12" />
        </div>
        <div class="form-group">
            <label for="email" id="email_label">Return Email</label>  <br />
            <input type="text" name="email" id="email" class="text-input col-sm-12" />
        </div>
        <div class="form-group">
            <label for="message" id="message_label">Message</label><br />
            <textarea name="message" id="message" class="col-sm-12" ></textarea>
        </div>
        <input type="submit" name="submit" class="button btn btn-default" id="submit_btn" value="Submit" ></input>
    </fieldset>  
</form>

<script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

</body>
</html>