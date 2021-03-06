<div class="view-activation th-divider">
    <div class="l-wrapper">

	    <form id="registered" method="post" action="?" autocomplete="off">
	        <div class="m-login">
	            <fieldset>

			        <h2><?= $bodyTitle ?></h2>

	                <div id="js-form-output" class="m-form-output"></div>

			        <p><?= _("Please check your mailbox for your registration confirmation email and click on the activation link to be able to access your account.") ?></p>

			        <hr />

			        <p><?= _("Click the button below to resend the registration confirmation email with your activation link to ") . $user_email ?>.</p>

	                <div class="m-login-button">
	                    <br/>
	                    <button class="button" type="submit" value="<?= $user_id ?>" name="submit"><?= _("Resend"); ?></button>
	                </div>

	            </fieldset>

	        </div>
	    </form>

    </div>
</div>