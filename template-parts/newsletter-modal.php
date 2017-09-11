<!-- Newsletter modal -->
<div id="newsletter-modal" class="w3-modal">
	<div class="w3-modal-content w3-card-4 w3-animate-zoom w3-theme-l5" style="max-width:600px">
		<header class="w3-container w3-theme-d1">
		  <span onclick="close_newsletter_modal()" title="Close Modal"
		    class="w3-button w3-xlarge w3-hover-red w3-display-topright">
		    &times;
		  </span>
		  <h2>Abonnement à la newsletter</h2>
    </header>
    <div class="w3-container w3-margin-top">
      Restez informés en vous inscrivant à la newsletter.
    </div>
    <?php
      $form= new MailpoetFormCustom();
      $form->addClassSubmitButton('w3-button w3-green w3-margin-right');
      $form->addClassSubmitParagraph('w3-container w3-border-top w3-padding-16 w3-light-grey');
      $form->moveButtonBottom();
      $form->addButton('Fermer',  array(
        'class'=> 'w3-button w3-red',
        'type' => 'button',
        'onclick' => 'close_newsletter_modal()',
        'id' => 'newsletter-modal-close'
      ));
      $form->addClassTextInput('w3-input w3-hover-theme w3-theme-l4 w3-border-0');
      $form->addClassTextParagraph('w3-container w3-margin-top');
      $form->addClassMessageDiv('w3-container w3-margin-top');
      echo $form;
    ?>
	</div>
</div>
